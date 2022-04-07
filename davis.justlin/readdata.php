<?php
include "components/functions.php";
//$filename = "users.json";
//$file = file_get_contents($filename);
//$users_object = json_decode($file);
//print_p($users_object);

$users_array = file_get_json("data/users.json")
?>

<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->
    <title>Car Enthusiast Art - Reading Data</title>

</head>

<body>
    <div class="main">

        <!-- BEGIN PHP Include for Header/Nav Element -->
        <?php include "components/header.php"; ?>
        <!-- END PHP Include for Header/Nav Element -->


        <div class="siteInfo">
            <h3>Reading User Data</h3>
            <?php

            for ($i = 0; $i < count($users_array); $i++) {

                echo "<li>
                <strong>{$users_array[$i]->name}</strong>
                <span>{$users_array[$i]->type}</span>
                <span>{$users_array[$i]->email}</span>
                </li>";
            }
            ?>







        </div>





    </div>

    <!-- BEGIN PHP Include for Footer Element -->
    <?php include "components/footer.php"; ?>
    <!-- END PHP Include for Footer Element -->








    </div>
</body>

</html>