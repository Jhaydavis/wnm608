<?php
include_once "components/functions.php";
include_once "components/templates-hr.php";
include_once "components/cartList.php";


resetCart();
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
            <div class="productDetail">
                <h2>Purchase Confirmed!</h2>


                <h3>Your order is being processed! </h3>

                <div>
                    <button class="productButton"><a href="index.php">Continue Shopping</a></button>
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