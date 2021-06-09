<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Giỏ hàng</h1>
    <?php
    session_start();
    $dssp = isset($_SESSION["cart"])?$_SESSION["cart"]:[];
    ?>
    <table class="table table-bordered table-striped">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th></th>
        </thead>
        <tbody>
        <?php foreach ($dssp as $item):?>
            <tr>
                <td><?php echo $item["id"];?></td>
                <td><?php echo $item["name"];?></td>
                <td><?php echo $item["price"];?></td>
                <td><?php echo $item["qty"];?></td>
                <td><a href="addtocart.php?id=<?php echo $item["id"];?>">Thêm vào giỏ hàng</a></td>
            </tr>
        <?php endforeach;  ?>
        </tbody>
    </table>
    <a href="checkout.php">Thanh toán</a>
</div>
</body>
</html>