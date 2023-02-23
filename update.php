<?php
error_reporting(E_ERROR | E_PARSE);
include "conn.php";


$userID = $_GET['id'];
// echo $userID;

$fetch =    " SELECT * FROM `feedback` WHERE `Id` = '$userID'";
$fetchRes =   mysqli_query($conn, $fetch);
$userData =  mysqli_fetch_assoc($fetchRes);




?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="">
</head>

<body class="container">

    <h1>Update Record</h1>
    <form class="container mt-5" action="update.php" method="post">
        <div class="form-group">
            <label for="formGroupExampleInput">UserID</label>
            <input type="text" name="userID" class="form-control" id="formGroupExampleInput"  value="<?php echo $userID ?>" placeholder="UserID">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">UserName</label>
            <input type="text" name="userName" class="form-control" id="formGroupExampleInput2" value="<?php echo $userData['userName'] ?>" placeholder="UserName">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Gender</label>
            <input type="text" name="gender" class="form-control" value="<?php echo $userData['Gender'] ?>" id="formGroupExampleInput2" placeholder="Gender">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Email</label>
            <input type="email" name="userEmail" class="form-control" id="formGroupExampleInput2" value="<?php echo $userData['Email'] ?>" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Phone</label>
            <input type="text" name="phone" class="form-control" value="<?php echo $userData['Phone'] ?>" id="formGroupExampleInput2" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Message</label>
            <input type="text" name="message" value="<?php echo $userData['Message'] ?>" class="form-control" id="formGroupExampleInput2" placeholder="Message">
        </div>


        <button class="btn btn-info mt-2" type="submit" name="update"> Update</button>

    </form>
    <?php
    if (isset($_POST['update'])) {
        // print_r($_POST);
        $ID = $_POST['userID'];
        $userName = $_POST['userName'];
        $gender = $_POST['gender'];
        $email = $_POST['userEmail'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $query =   "UPDATE `feedback` SET `userName` = '$userName', `Gender` = '$gender',`Email`='$email',
        `Phone` = '$phone', `Message` = '$message' WHERE `feedback`.`Id` = '$ID'";




       $res =  mysqli_query($conn, $query);
       if ($res) {
           echo "Record Updated";
       } else {

           echo "error";
       }
     
    }


    ?>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>