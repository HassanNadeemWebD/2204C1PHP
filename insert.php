<?php
// $conn = mysqli_connect("localhost", "root", "", "2204C1");

// if ($conn) {

//     echo "connection established !";


// }
// else {



// mysqli_connect_error();    echo " Error ";


// }
include "conn.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];    $email = $_POST['email'];    $gender = $_POST['gender'];    $phone = $_POST['phone'];    $message = $_POST['txtMsg'];
    $query = "INSERT INTO `feedback` ( `userName`, `Gender`, `Email`, `Phone`, `Message`) 
VALUES ( '$username', '$gender', '$email', '$phone', '$message')";    $res = mysqli_query($conn, $query);

    if ($res) {
        echo "Data Inserted !";
    }    else {

        echo "error";    }

}

?>