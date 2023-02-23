<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <button class="btn btn-primary mt-5"><a href="form.php" class="text-light"> Send Feedbacks </a></button>


    <form action="index.php" method="get">
        <button class="btn btn-success mt-5" name="show"> Show Feedbacks </button>

    </form>








    <?php

    include "conn.php";

    if (isset($_GET["show"])) {
        $query =  " SELECT * FROM `feedback`";

        $res =  mysqli_query($conn, $query);

        if ($res) {
            echo "<pre>";
            // print_r(mysqli_fetch_assoc($res));

            echo "</pre>";
            // $arr=mysqli_fetch_assoc($res);





            // $abc = 55.8;

            // echo $abc . "<br>";
            // print("<h1>". $abc ."</h1>" .  "<br>");
            // echo "Hello World";
            // echo $abc;

            // function myfunc()
            // {
            //     //    static $abc = 2;
            //     //     $abc++;

            //     echo $GLOBALS['abc'];
            // }

            // myfunc();





            // 
    ?>
            <table class="table table-dark container">
                <thead>
                    <tr>
                        <th scope="col">UserID</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Message</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($res)) {       ?>
                        <tr>
                            <th scope="row"><?php echo $row['Id'] ?></th>
                            <td><?php echo $row['userName'] ?></td>
                            <td><?php echo $row['Gender'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Phone'] ?></td>
                            <td><?php echo $row['Message'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['Id'] ?>"> <button class="btn btn-info "> Update </button> </a>
                                <a href="delete.php?id=<?php echo $row['Id'] ?>"> <button class="btn btn-danger "> Delete </button> </a>
                            </td>
                        </tr>

                    <?php  }     ?>
                <?php  }     ?>
                </tbody>
            </table>


        <?php  }     ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<?php

// $arr = ["abc", "def ", true, 55, 6.5, $abc]; //indexed array
// $arr = ["name" => "Hassan", "gender" => "male", "contact" => "03412365425", "grade" =>  true,];
// echo "<pre>";

// print_r($arr);

// echo $arr['grade'];
// echo $arr

// echo "</pre>";



?>