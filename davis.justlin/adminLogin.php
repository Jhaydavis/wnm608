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
            <h3>Admin Portal</h3>
            <hr>




            <form>
                <label class="form-control-label">Admin ID</label>
                <input type="text" class="form-input" placeholder="Admin ID">

                <label class="form-control-label">Password</label>
                <input type="password" class="form-input" id="password" placeholder="Password">





                <hr>
                <button class="buttonPurchase"><a href="adminProducts.php">Log In</a></button>

            </form>




        </div>




        <?php include "components/footer.php"; ?>








    </div>
</body>

</html>