<?php

session_start();
echo "<h1> welcome  $_SESSION[userName] </h1>";






?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <form action="welcome.php" method="post"> <button type="submit" name="logout"> Logout </button>
    </form>

    <?php

    if (isset($_POST['logout'])) {

        session_unset();

        if (session_destroy()) {
            echo "<script>alert('user logout')</script>";
            header("location: login.php");
            // echo "user logout";
        }
    }
    ?>

</body>

</html>