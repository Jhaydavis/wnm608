<?php
include_once "components/functions.php";
include_once "components/templates.php";
?>

<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="js/functions.js"></script>
    <script src="js/templates.js"></script>
    <script src="js/product_list.js"></script>
    <title>Car Enthusiast Art - Home Page</title>
</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->

        <div class="siteInfo">
            <p>Welcome to Car Enthusiast Art! Whether you're looking for paintings, high quality prints, or Digital NFT's you'll find it here. This month features automotive manufacturer, Porsche. Art ranges from the iconic 911 to electrified Taycan </p>

            <h2>View Art By:</h2>
            <div class="filterUI">
                <div class="flex-non">
                    <button data-filter="type" data-value="" class="filterButton" type="button">All Art</button>
                </div>
                <div class="flex-non">
                    <button data-filter="type" data-value="print" class="filterButton" type="button">Prints</button>
                </div>
                <div class="flex-non">
                    <button data-filter="type" data-value="painting" class="filterButton" type="button">Paintings</button>
                </div>
                <div class="flex-non">
                    <button data-filter="type" data-value="digital" class="filterButton" type="button">Digital</button>
                </div>
                <div class="flex-non">

                    <select class="js-sort">
                        <option value="">Sort by</option>
                        <option value="1">Price $$$</option>
                        <option value="2">Price $</option>


                    </select>

                </div>
            </div>

        </div>

        <div class="storeItemFlex">



        </div>




    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->







    </div>
</body>

</html>