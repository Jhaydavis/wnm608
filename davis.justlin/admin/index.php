<?php
include "../components/functions.php";


$empty_product = (object)[
    "name" => "",
    "description" => "",
    "price" => "",
    "type" => "",
    "img_tb" => "",
    "img_hres" => "",
    "inventory_qty" => ""

];


//LOGIC

if (isset($_GET['action'])) {
    try {
        $conn = makePDOConn();
        switch ($_GET['action']) {
            case "update":
                //echo ("Connected!");
                $statement = $conn->prepare("UPDATE
            `products`
            SET
                `name`=?,
                `description`=?,
                `price`=?,
                `type`=?,
                `img_tb`=?,
                `img_hres`=?,
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

                header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
                break;

            case "create":

                $statement = $conn->prepare("INSERT INTO
            `products`
            (
                `name`,
                `description`,
                `price`,
                `type`,
                `img_tb`,
                `img_hres`,
                `inventory_qty`,
                `date_added`,
                `date_updated`
            )
            VALUES (?,?,?,?,?,?,?,NOW(),NOW())
            ");

                $statement->execute([
                    $_POST["product-name"],
                    $_POST["product-description"],
                    $_POST["product-price"],
                    $_POST["product-type"],
                    $_POST["product-image_thumbnail"],
                    $_POST["product-image_hires"],
                    $_POST["product-inventory_qty"],

                ]);
                $id = $conn->lastInsertID();

                header("location:{$_SERVER['PHP_SELF']}?id=$id");
                break;

            case "delete":

                //echo ("DELETED");
                $statement = $conn->prepare("DELETE FROM `products` WHERE id=?");
                $statement->execute([$_GET['id']]);
                header("location:{$_SERVER['PHP_SELF']}");
                break;
        }
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}


//TEMPLATES

function productListItem($r, $o)
{

    return $r . <<<HTML
            
            <div class= "productCardAdmin">
            <h2><a href="{$_SERVER['PHP_SELF']}?id=$o->id">$o->name </h2><br>
            <a href="{$_SERVER['PHP_SELF']}?id=$o->id"><img src='../$o->img_tb'>
            
            <div>
            <a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="button">Edit</a>
          
         
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
    $delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete Product</a>";




    $display = <<<HTML
     
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
    
    <br>
    <div class="flex-stretch"><a href="index.php">Go Back</a></div>
    <div class="flex-none">$delete</div>
   
    HTML;


    $form = <<<HTML

    
<div class = "siteInfo">
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">  
       <h2>$addoredit Product</h2>

            <div class="form-control">
                <label class="form-label" for="product-name">Name: </label>
                <input name="product-name" class ="form-input" id="product-name"  type="text" value="$o->name" placeholder="enter product name" >
            </div>

            <div class="form-control">
                <label class="form-label" for="product-description">Description: </label>
                <textarea name="product-description" class ="form-input" id="product-description" name="product-description"  rows="2" cols="50"placeholder="enter product description">$o->description</textarea>
            </div>

            <div class="form-control">
                <label class="form-label" for="product-price">Price: </label>
                <input name="product-price" class ="form-input" id="product-price"  type="Number" placeholder="enter produt price"  min="100" max="10000"  value="$o->price">
            </div>

            <div class="form-control">
                <label class="form-label" for="product-type">Type: </label>
                <input name="product-type" class ="form-input" id="product-type"  type="text" placeholder="enter product type" value="$o->type">
            </div>

            <div class="form-control">
                <label class="form-label" for="product-image_thumbnail">Thumbnail Image: </label>
                <input name="product-image_thumbnail" class ="form-input" id="product-image_thumbnail"  placeholder="Enter product images" type="text" value="$o->img_tb">         
            </div>

            <div class="form-control">
                <label class="form-label" for="product-image_hires">Hi-res Image: </label>
                <input name="product-image_hires" class ="form-input" id="product-image_hires"  placeholder="Enter product images" type="text" value="$o->img_hres">         
            </div>

    
            <div class="form-control">
                <label class="form-label" for="product-inventory_qty">Qty: </label>
                <input name="product-inventory_qty" class ="form-input" id="product-inventory_qty"  type="Number" placeholder="enter produt qty"  min="1 " max="1000" step="1.00" value="$o->inventory_qty">
            </div>
        
            <div class="form-control">
                <input class ="form-button" type="submit" value="Save">         
            </div>

      
        
        
    </form>
</div>
HTML;

    $output = $id == "new" ? "<div>$form</div>" :
        "<div class = 'adminItemFlex'>

            <div class = 'adminCard'>
                <div class = 'productCard'>$display</div>
            </div>
        
            <div class = 'cartCard2'>
                <div class = 'productCardAdmin'>$form</div>
            </div>

        </div>";






    echo <<<HTML
 
      $output

HTML;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "../components/meta-admin.php"; ?>
    <!-- END PHP Include for Meta Content -->

    <title>Car Enthusiast Art - Product Admin Page</title>

</head>

<body>
    <div class="siteInfo">
        <header class="top">


            <div class="hero">
                <h1>Product Admin Page</h1>
            </div>
            <div class="navigation">

                <ul>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Product List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                    <li><a href="../index.php">Return to Site</a></li>
                </ul>

            </div>




        </header>

        <hr>

        <div class="storeItemFlex">


            <?php

            if (isset($_GET['id'])) {
                showProductPage(
                    $_GET['id'] == "new" ?
                        $empty_product :
                        makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=" . $_GET['id'])[0]
                );
            } else {


            ?>


                <?php

                $result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `price`DESC");

                echo array_reduce($result, 'productListItem');


                ?>



            <?php } ?>




        </div>





    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "../components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>