<?php
include "../components/functions.php";
//$filename = "users.json";
//$file = file_get_contents($filename);
//$users_object = json_decode($file);
//print_p([$_GET, $_POST]);

$filename = "../data/users.json";
$users_array = file_get_json($filename);

$empty_user = (object) [
    "name" => "",
    "type" => "",
    "email" => "",
    "classes" => []

];


if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case "update":
            $users_array[$_GET['id']]->name = $_POST['user-name'];
            $users_array[$_GET['id']]->type = $_POST['user-type'];
            $users_array[$_GET['id']]->email = $_POST['user-email'];
            $users_array[$_GET['id']]->classes = explode(", ", $_POST['user-classes']);

            file_put_contents($filename, json_encode($users_array));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;

        case "create":
            $empty_user->name = $_POST['user-name'];
            $empty_user->type = $_POST['user-type'];
            $empty_user->email = $_POST['user-email'];
            $empty_user->classes = explode(", ", $_POST['user-classes']);

            $id = count($users_array);
            $users_array[] = $empty_user;

            file_put_contents($filename, json_encode($users_array));

            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;

        case "delete":
            array_splice($users_array, $_GET['id'], 1);
            file_put_contents($filename, json_encode($users_array));
            header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
            break;
    }
}





function showUserPage($user)
{
    $id = $_GET['id'];

    $addoredit = $id == "new" ? "Add" : "Edit";
    $createorupdate = $id == "new" ? "create" : "update";

    $delete = $id == "new" ? "" : "<a href='{$_SESSION['PHP_SELF']}?id=$id&action=delete'>Delete User</a>";

    $classes = implode(", ", $user->classes);
    $display = <<<HTML
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
    </div>
    <br>

    <div class="flex-stretch"><a href="users.php">Go Back</a></div>
    <div class="flex-none">$delete</div>
   
    HTML;

    $form = <<<HTML
    <div>
        
        
    
    <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate"> 
       <h2>$addoredit User</h2>

        <div class="form-control">
                <label class="form-label" for="user-name">Name: </form-label>
                <input class ="form-input" id="user-name" name="user-name" type="text" placeholder="enter user name" value="$user->name">
            </div>
            <div class="form-control">
                <label class="form-label" for="user-type">Type: </form-label>
                <input class ="form-input" id="user-type" name="user-type" type="text" placeholder="enter user type" value="$user->type">
            </div>

            <div class="form-control">
                <label class="form-label" for="user-email">Email: </form-label>
                <input class ="form-input" id="user-email" name="user-email" type="text" placeholder="enter user email" value="$user->email">
            </div>

            <div class="form-control">
                <label class="form-label" for="user-classes">Classes: </form-label>
                <input class ="form-input" id="user-classes" name="user-classes" placeholder="Enter user classes" type="text" value="$classes">         
            </div>

            <div class="form-control">
                <input class ="form-button" type="submit" value="Save Changes">         
            </div>
        </div>

        
    </form>
      
   
    
    </div>
HTML;
    $delete = $id == "new" ? "" : "<a href='{$_SESSION['PHP_SELF']}?id=$id&action=delete'>Delete User</a>";



    $output = $id == "new" ? $form :
        "<div class = 'grid gap'>
    <div class = 'col-xs-12 col-md-7'>$display</div>
    <div class = 'col-xs-12 col-md-5'>$form</div>
    </div>

    
    
";



    $delete = $id == "new" ? "" : "<a href='{$_SESSION['PHP_SELF']}?id=$id&action=delete'>Delete User</a>";


    echo <<<HTML
 
        $output 

HTML;
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
                            <li><a href="users.php">User List</a></li>
                            <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
                            <li><a href="../index.php">Return to Site</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="flex-none"></div>
            </div>


        </header>

        <hr>

        <div class="card">
            <h2> User Detail</h2>

            <?php
            if (isset($_GET['id'])) {
                showUserPage($_GET['id'] == "new" ? $empty_user : $users_array[$_GET['id']]);
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