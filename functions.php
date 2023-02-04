<?php

function myfunc($username)
{


    echo " <h1> Welcome $username </h1> ";
}


function add($num1, $num2)
{

    return $num1 + $num2;
}

function calculate($num1, $num2, $op)
{

    switch ($op) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":

            echo $num1 - $num2;

            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;

        default:
            echo "invalid operator";
            break;
    }
}

// myfunc("Hassan");
// myfunc("Salman");
// myfunc("Saad");

// $res =  add(10, 50);
// echo $res;
// echo var_dump($res) ;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="functions.php" method="get">
        <input type="text" name="num1" placeholder="Number 1"> <br><br>
        <input type="text" name="num2" placeholder="Number 2"><br><br>
        <input type="text" name="operator" placeholder="operator" >
        <br>
        <button name="submit">calculate</button>

    </form>
    <pre>
    <?php

echo var_dump(isset($_GET['submit'])) ;
if(isset($_GET['submit'])){
    // print_r($_POST);
    // $number1 = $_POST['num1'];
    // $number2 = $_POST['num2'];
    // $operator =  $_POST['operator'];
    print_r($_GET);
    $number1 = $_GET['num1'];
    $number2 = $_GET['num2'];
    $operator =  $_GET['operator'];
   calculate($number1 , $number2 , $operator);



}

 

    ?>


</pre>

</body>

</html>