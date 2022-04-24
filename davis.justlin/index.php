<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->

    <title>Car Enthusiast Art - Home Page</title>
</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->

        <div class="siteInfo">
            <h3>The World's Highest Quality Automotive Art</h3>

            <p>Welcome to Car Enthusiast Art! Whether you're looking for paintings, high quality prints, or Digital NFT's you'll find it here. This month features automotive manufacturer, Porsche. From the iconic 911 to best electrified sedan in the world, the phenomenal Taycan Turbo S, we've got you covered.</p>
        </div>


        <div class="storeItemFlex">

            <?php

            include_once "components/functions.php";
            include_once "components/templates.php";

            $result = makeQuery(makeConn(), "SELECT *  FROM `products` ORDER BY `name` ");


            echo '<div class="storeItemFlex">', array_reduce($result, 'productListTemplate'), '</div>';

            ?>
        </div>




    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->







    </div>
</body>

</html>