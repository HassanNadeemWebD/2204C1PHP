<?php

include "conn.php";
$userID = $_GET['id'];

$query = "DELETE FROM `feedback` WHERE `feedback`.`Id` = '$userID'";


if(mysqli_query($conn , $query)){


header("location:index.php");

}

?>