<?php
include "../components/functions.php";


$empty_product = (object)[
    "name" => "928GTS",
    "description" => "The classis from Risky Business",
    "price" => "900",
    "type" => "Digital",
    "image_thumbnail" => "img/painting-caymans-tb.jpg",
    "image_hires" => "img/painting-caymans-tb.jpg",
    "inventory_status" => "1",
    "inventory_qty" => "2"

];


//LOGIC


try {
    $conn = makePDOConn();
    switch ($_GET['action']) {
        case "update":
            echo ("Connected!");
            $statement = $conn->prepare("UPDATE
            `products`
            SET
                `name`=?,
                `description`=?,
                `price`=?,
                `type`=?,
                `image_thumbnail`=?,
                `image_hires`=?,
                `inventory_qty`=?,
                `date_updated`=NOW()
            WHERE `id`=? 
            ");
            $statement->execute([
                $_POST["product-name"],
                $_POST["product-description"],
                $_POST["product-price"],
                $_POST["product-type"],
                $_POST["product-image_thumbnail"],
                $_POST["product-image_hires"],
                $_POST["product-inventory_qty"],
                $_GET["id"]


            ]);
            echo ($_POST["id"]);
            echo ($_POST["product-name"]);



            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;

        case "create":
            echo ("Connected!");
            $statement = $conn->prepare("UPDATE
            `products`
            (
                `name`
                `description`
                `price`
                `type`
                `image_thumbnail`
                `image_hires`
                `inventory_qty`
                `date_added`
                `date_updated`)
            VALUES (?,?,?,?,?,?,?,NOW(),NOW())
            ");

            $statement->execute([
                $_POST["product-name"],
                $_POST["product-description"],
                $_POST["product-price"],
                $_POST["product-type"],
                $_POST["product-image_thumbnail"],
                $_POST["product-image_hires"],
                $_POST["product-inventory_qty"]



            ]);
            $id = $conn->lastInsertID();

            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;

        case "delete":

            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
    }
} catch (PDOException $e) {
    die($e->getMessage());
}

//TEMPLATES

function productListItem($r, $o)
{

    return $r . <<<HTML
            
            <div>
            <h2><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name </h2><br>
            <a href="{$_SERVER['PHP_SELF']}?id=$o->id"><img src='../$o->img_tb'>
            
            <div>
            <a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="button">Edit</a>
            <hr>
         
            </div>
            </div>
         HTML;
}

function showProductPage($o)
{
    $id = $_GET['id'];

    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";
    $images = explode(", ", $o->img_tb);
    $delete = $id == "new" ? "" : "<a href='{$_SESSION['PHP_SELF']}?id=$id&action=delete'>Delete Product</a>";


    $display = <<<HTML
     <div>
        <h3>$o->name</h3>
            <div>
                <strong>Type: </strong>
                <span>$o->type</span>
            </div>
            <div>
                <strong>Description: </strong>
                <span>$o->description</span>
            </div>
            <div>
                <strong>Price: </strong>
                <span>&dollar;$o->price</span>
            </div>
            <div>
                <strong>Qty: </strong>
                <span>$o->inventory_qty</span>
            </div>
            <div><br>
            <strong>Image: </strong><br>
            <span><img src='../$o->img_tb'></span>
            </div>
        </div>
    </div>
    <br>
    <div class="flex-stretch"><a href="index.php">Go Back</a></div>
    <div class="flex-none">$delete</div>
   
    HTML;

    $form = <<<HTML
    <div>
        
        
    
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate"> 
       <h2>$addoredit Product</h2>

        <div class="form-control">
                <label class="form-label" for="product-name">Name: </form-label>
                <input class ="form-input" id="product-name" name="product-name" type="text" value="$o->name" placeholder="enter product name" >
            </div>
            <div class="form-control">
                <label class="form-label" for="product-type">Type: </form-label>
                <input class ="form-input" id="product-type" name="product-type" type="text" placeholder="enter produt type" value="$o->type">
            </div>
            <div class="form-control">
                <label class="form-label" for="product-price">Price: </form-label>
                <input class ="form-input" id="product-price" name="product-price" type="Number" placeholder="enter produt price"  min="100" max="10000"  value="$o->price">
            </div>
            <div class="form-control">
                <label class="form-label" for="product-inventory_qty">Qty: </form-label>
                <input class ="form-input" id="product-inventory_qty" name="product-inventory_qty" type="Number" placeholder="enter produt qty"  min="1 " max="1000" step="1.00" value="$o->inventory_qty">
            </div>

            <div class="form-control">
                <label class="form-label" for="product-description">Description: </form-label>
                <textarea class ="form-input" id="product-description" name="product-description"  rows="2" cols="50"placeholder="enter product description">$o->description</textarea>
            </div>

            <div class="form-control">
                <label class="form-label" for="product-image_thumbnail">Thumbnail Image: </form-label>
                <input class ="form-input" id="product-image_thumbnail" name="product-image_thumbnail" placeholder="Enter product images" type="text" value="$o->img_tb">         
            </div>
            <div class="form-control">
                <label class="form-label" for="product-image_hires">Hi-res Image: </form-label>
                <input class ="form-input" id="product-image_hires" name="product-image_hires" placeholder="Enter product images" type="text" value="$o->img_tb">         
            </div>

            <div class="form-control">
                <input class ="form-button" id="submit "type="submit" value="Save Changes">         
            </div>
        </div>

        
    </form>
      
   
    
    </div>
HTML;

    $output = $id == "new" ? $form :
        "<div class = 'grid gap'>
        <div class = 'col-xs-12 col-md-7'>$display</div>
        <div class = 'col-xs-12 col-md-5'>$form</div>
    </div>
    ";


    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete Product</a>";



    echo <<<HTML
 
        $output 

HTML;
}

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://use.typekit.net/ilv2uut.css" />
    <!-- END PHP Include for Meta Content -->
    <link href="../lib/css/cae-style.css" rel="stylesheet" type="text/css">
    <title>Car Enthusiast Art - Product Admin</title>

</head>

<body>
    <div class="main">
        <header class="navbar">

            <div class="container display-flex">
                <div class="flex-none">
                    <h1>Product Admin</h1>
                </div>
                <div class="flex-stretch">
                    <nav class="nav nav-flex flex-none">
                        <ul>
                            <li><a href="index.php">Product List</a></li>
                            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                            <li><a href="../index.php">Return to Site</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="flex-none"></div>
            </div>


        </header>

        <hr>

        <div class="card">


            <?php

            if (isset($_GET['id'])) {
                echo showProductPage(
                    $_GET['id'] == "new" ?
                        $empty_product :
                        makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $_GET['id'])[0]
                );
            } else {


            ?>
                <h2>Product List</h2>

            <?php
                $result = makeQuery(makeConn(), "SELECT * FROM `products`");

                echo array_reduce($result, 'productListItem');
            }
            ?>



        </div>





    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "../components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>