<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="task.php" method="get">

        <input type="number" name="costprice" placeholder="Cost Price">
        <input type="number" name="sellprice" placeholder="sell price">

        <button type="submit" name="calc">Calculate</button>
    </form>
    <br><br>

    <?php
    print_r($_REQUEST);
    if (isset($_REQUEST['calc'])) {
        $costprice = $_REQUEST['costprice'];
        $sellprice = $_REQUEST['sellprice'];
        $profit = $sellprice -  $costprice;
        $profitMargin = $profit * 100 / $costprice;

    ?>

        <table border="1" cellpadding="10">

            <tr>
                <th>Profit</th>
                <td><?php echo $profit ?></td>
            </tr>
            <tr>

                <th>Profit Margin</th>
                <td><?php echo $profitMargin ?>%</td>
            </tr>
        </table>
    <?php } ?>
</body>

</html>