<?php

$arr =  ["name" => "Uzair", "gender" => "male", "grade" => true, "contact" => " 03126545987"];

// echo $arr;
// echo $arr["gender"];



$multiArr = [
    'student01' =>   ["name" => "Uzair", "gender" => "male", "grade" => true, "contact" => " 03126545987"],
    'student02' => ["name" => "Ather", "gender" => "male", "grade" => true, "contact" => " 03126545987"],
    'student03' => ["name" => "Salman", "gender" => "male", "grade" => true, "contact" => " 03126545987"],
    'student04' =>  ["name" => "Haseeb", "gender" => "male", "grade" => true, "contact" => " 03126545987"],
    'student05' =>  ["name" => "Fahad", "gender" => "male", "grade" => true, "contact" => " 03126545987"]
]




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

    <table border="1" cellpadding="10">
        <tr>
            <th>Key</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Grade</th>
            <th>Contact</th>
       


        </tr>


        <?php foreach ($multiArr as $key => $newarr) {

            echo "<tr>";
            echo "<td>" .  $key     . "</td>";
            // echo $key;
            foreach ($newarr as  $key => $values) {

                echo "<td>" .  $values     . "</td>";
            }
            // print_r($value);
            echo "</tr>";
        }   ?>








    </table>
    <pre>

<?php
// print_r($arr);

// print_r($multiArr['student02']["name"]);

?>

</pre>
</body>

</html>