<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="file.php" method="post" enctype="multipart/form-data" >

<input type="file" name="pic">

<button type="submit" name="submit">Submit</button>
</form>   
<form action="file.php"  >



<button type="submit" name="fetch">fetch</button>
</form> 


<pre>
<?php
include "conn.php";
if (isset($_POST['submit'])) {

    // print_r($_FILES['pic']);   
     $fileName = $_FILES['pic']['name'];   
     $tmpName = $_FILES['pic']['tmp_name'];
    echo $fileName . $tmpName;    
    if (move_uploaded_file($tmpName, "uploads/" . $fileName)) {
        $query = "INSERT INTO `pictures` ( `picName`) VALUES ('$fileName')";
        $res = mysqli_query($conn, $query);

        if ($res) {

            echo "File Uploaded";


        }

    }

}
if(isset($_GET['fetch'])){

$getData = "SELECT * FROM `pictures`";  
$getDataRes = mysqli_query($conn, $getData);  


if ($getDataRes) {
//   print_r($getDataRes);
while($row=mysqli_fetch_assoc($getDataRes)){

// print_r($row);


echo `<img src="uploads/$row[picName]" height="500px" width="500px">`;





}


}




?>




</pre>


<?php }?>
</body>
</html>