<?php
include_once "components/functions.php";
//include_once "components/templates-hr.php";
include_once "components/cartList.php";
include_once "components/templates.php";



?>

<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->
    <title>Car Enthusiast Art - About Us</title>

</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->


        <div class="siteInfo">

            <div class="cardHero">

                <img src="img/home-hero3.png" class="aboutImage" alt="Car Enthusiast Art 911 GT3">
                <h2>Performance Car Fine Art</h2>

                <p>Car Enthusisast Art explores experience design, creative, and technical development of high performance sports cars from an artistic perspective. This includes art pieces developed in acrylic, oils, and water color as well as digital formats. </p>

                <hr>
            </div>
            <div>
                <H3>Newest Gallery Arrivials!</H3>
                <?php
                $result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `type` = 'digital' ORDER BY `date_added` DESC LIMIT 3");

                recommendedProducts($result);

                ?>
            </div>
        </div>




    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>