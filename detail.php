<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3> Username: <?php  echo  $_POST['username']    ?> </h3>
    <h3>Email: <?php echo  $_POST['email']    ?> </h3>
    <h3>Gender: <?php  echo $_POST['gender']   ?> </h3>
    <h3>Phone: <?php  echo $_POST['phone']   ?> </h3>
    <h3>Message: </h3>
    <p> <?php

        echo  $_POST['txtMsg']

        ?> </p>
    <?php

    // print_r($_POST)
    // echo $_POST['username'] . "<br>";
    // echo $_POST['email'] . "<br>";
    // echo $_POST['gender'] . "<br>";
    // echo $_POST['phone'] . "<br>";
    // echo $_POST['txtMsg'] . "<br>";


    ?>


</body>

</html>