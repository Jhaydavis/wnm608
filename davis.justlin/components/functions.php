<?php
session_start();


function print_p($v)
{
    echo "<pre>", print_r($v), "</pre>";
}

function file_get_json($filename)
{
    $file = file_get_contents($filename);
    return json_decode($file);
}

// Calls the file below to deliver database connection credentials
include_once "auth.php";

function makeConn()
{
    $conn = new mysqli(...MYSQLIAuth());
    //Next line checks for an error code. If so the it ends the process and returns the error
    if ($conn->connect_errno) die($conn->connect_error);
    $conn->set_charset('utf8');
    return $conn;
}


function makePDOConn()
{
    try {
        $conn = new PDO(...PDOAuth());
    } catch (PDOException $e) {
        die($e->getMessage());
    }
    return $conn;
}


// Makes a query to the database using the established connection
function makeQuery($conn, $qry)
{

    $result = $conn->query($qry);
    if ($conn->errno) die($conn->error);
    // Create an empty array object "$a"
    $a = [];
    while ($row = $result->fetch_object()) {
        $a[] = $row;
    }
    return $a;
}


//CART FUNCTIONS


function array_find($array, $fn)
{

    foreach ($array as $o) if ($fn($o)) return $o;
    return false;
}


function getCart()
{
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function addToCart($id, $amount)
{
    $cart = getCart();


    $p = array_find($cart, function ($o) use ($id) {
        return $o->id == $id;
    });

    if ($p) {
        $p->$amount += $amount;
    } else {
        $_SESSION['cart'][] = (object)[
            "id" => $id,
            "amount" => $amount
        ];
    }
}

function resetCart()
{
    $_SESSION['cart'] = [];
}

function cartItemById($id)
{
    return array_find(getCart(), function ($o) use ($id) {
        return $o->id == $id;
    });
}


function makeCartBadge()
{
    $cart = getCart();
    if (count($cart) == 0) {
        return "";
    } else {
        return "(" . array_reduce($cart, function ($r, $o) {
            return $r + $o->amount;
        }, 0) . ")";
    }
}

function getCartItems()
{
    $cart = getCart();
    if (empty($cart)) return [];

    $ids = implode(",", array_map(function ($o) {
        return $o->id;
    }, $cart));

    $data = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN ($ids)");

    return array_map(function ($o) use ($cart) {
        $p = cartItemById($o->id);
        $o->amount = $p->amount;
        $o->total = $p->amount * $o->price;
        return $o;
    }, $data);
}

/* Returns the format for the items in a cart based on the ID from the item clicked
function cartListTemplate($r, $o)
{

    return $r . <<<HTML
    <div class="productCard">
        <img src="$o->img_hres" class="productImage" alt="Image of Vehicle Art">
        <h2>$o->name</h2>
        <h3>Format: $o->type</h3>
        <p class="productPrice">&dollar;$o->price</p>
        <hr>
        <button class="productButton"><a href="cart.php?id=$o->id">Remove</a></button>
    </div>

    HTML;
}
*/
