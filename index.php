<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>






    <h1><?php

        $abc = 55.8;
        // echo $abc . "<br>";
        // print("<h1>". $abc ."</h1>" .  "<br>");
        // echo "Hello World";
        echo var_dump($abc)




        ?></h1>



</body>

</html>
<?php

// $arr = ["abc", "def ", true, 55, 6.5, $abc]; //indexed array
$arr = ["name" => "Hassan", "gender" => "male", "contact" => "03412365425", "grade" =>  true, ];
echo "<pre>";

print_r($arr);

echo $arr['grade'];
// echo $arr

echo "</pre>";



?>