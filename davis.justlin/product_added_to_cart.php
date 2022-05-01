<?php
include_once "components/functions.php";
include_once "components/templates-hr.php";
include_once "components/cartList.php";



?>

<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->
    <title>Car Enthusiast Art - Purchase Confirmation</title>

</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->


        <div class="siteInfo">

            <div class="storeItemFlex">

                <?php


                $cart_product = array_find(getCart(), function ($o) {
                    return $o->id == $_GET['id'];
                    //getCartItems();
                });

                $product = makeQuery(makeConn(), "SELECT *  FROM `products` WHERE `id`=" . $_GET['id']);

                echo '<div class="storeItemFlex">', array_reduce($product, 'cartListTemplate'), '</div>';


                ?>
            </div>
            <h3>Items Added: <?= $cart_product->amount ?></h3>
            <h3>Total: <?= $o->total ?></h3>


            <p>Thank you!</p>
            <hr>
            <button class="productButton"><a href="index.php">Continue Shopping</a></button>


        </div>






    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>