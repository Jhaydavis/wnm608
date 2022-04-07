<?php
include "../components/functions.php";
//$filename = "users.json";
//$file = file_get_contents($filename);
//$users_object = json_decode($file);
//print_p($users_object);

$users_array = file_get_json("../data/users.json");

function showUserPage($user)
{

    $classes = implode(", ", $user->classes);

    echo <<<formatted_string_data
    <div>
        <h3>$user->name</h3>
            <div>
                <strong>Type: </strong>
                <span>$user->type</span>
            </div>

            <div>
                <strong>Email: </strong>
                <span>$user->email</span>
            </div>

            <div>
            <strong>Classes: </strong>
            <span>$classes</span>
            </div>
        </div>

        <nav>
        <p>
        <a href="users.php"><< Back</a>
        </p>
        </nav>
    
    
    </div>
formatted_string_data;
}
?>

<!doctype html>
<html>

<head>
    <!-- BEGIN PHP Include for Meta Content -->
    <?php include "../components/meta.php"; ?>
    <!-- END PHP Include for Meta Content -->
    <link href="../lib/css/cae-style.css" rel="stylesheet" type="text/css">
    <title>Car Enthusiast Art - User Admin</title>

</head>

<body>
    <div class="main">
        <header class="navbar">

            <div class="container display-flex">
                <div class="flex-none">
                    <h1>UserAdmin</h1>
                </div>
                <div class="flex-stretch">
                    <nav class="nav nav-flex flex-none">
                        <ul>
                            <li><a href="users.php">User Admin</a></li>
                            <li><a href="../adminLogin.php">Main Admin</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="flex-none"></div>
            </div>


        </header>

        <hr>

        <div class="card">
            <h3> User List</h3>

            <?php
            if (isset($_GET['id'])) {
                showUserPage($users_array[$_GET['id']]);
            } else {


            ?>

                <?php

                for ($i = 0; $i < count($users_array); $i++) {

                    echo "<li>
                <a href='users.php?id=$i'>{$users_array[$i]->name}</a>
                </li>";
                }
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