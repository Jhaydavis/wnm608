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

    <title>Car Enthusiast Art - Cart</title>

</head>

<body>
    <div class="main">
        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->


        <div class="siteInfo">
            <h3>Your Shopping Cart</h3>


        </div>


        <div class="card">

            <?php
            //print_p(getCartItems());
            $cart_items = getCartItems();

            //$product = makeQuery(makeConn(), "SELECT *  FROM `products` WHERE `id`=" . $_GET['id']);
            //echo '<div class="storeItemFlex">', array_reduce($product, 'productListTemplate'), '</div>';
            // $cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN(2,4,6)");



            ?>

            <div class="">

                <?= array_reduce($cart_items, 'cartListTemplate') ?>
            </div>
            <div class="productCard-cart">
                <?= cartTotals() ?>
            </div>

            <div class="cartItem">
                <button class="productButton"><a href="index.php">Continue Shopping</a></button>
                <button class="productButton"><a href="payment.php?">Go to Payment</a></button>

            </div>

        </div>






    </div>



    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>