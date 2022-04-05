<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->
    <title>Car Enthusiast Art - Admin Portal</title>

</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->

        <div class="siteInfo">
            <h2>Admin Portal</h2>
            <hr>




            <form id='adminForm'>
                <label class="form-control-label">Admin ID</label>
                <input type="text" class="form-input" id="adminID" placeholder=" Enter Admin ID">

                <label class="form-control-label">Email</label>
                <input type="email" class="form-input" id="email" placeholder="Enter Email">

                <label class="form-control-label">Password</label>
                <input type="password" class="form-input" id="password" placeholder="Enter Password">

                <div>
                    <button class="buttonPurchase" id="adminBtn">Create JSON =></button>
                </div>
            </form>
            <hr>

            <div id="objects">
                <h2>Admin Users - JSON</h2>
                <div class="jsonList"></div>
            </div>


        </div>


        <?php include "components/footer.php"; ?>


    </div>

    <script src="js/userJSON.js"></script>
</body>

</html>