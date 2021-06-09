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
    $total = 0;
    ?>
    <div class="col-md-6">
        <table class="table table-bordered table-striped">
            <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Thành tiền</th>
            </thead>
            <tbody>
            <?php foreach ($dssp as $item):?>
                <tr>
                    <td><?php echo $item["id"];?></td>
                    <td><?php echo $item["name"];?></td>
                    <td><?php echo $item["price"];?></td>
                    <td><?php echo $item["qty"];?></td>
                    <td><?php $total+= $item["price"]*  $item["qty"]; echo  $item["price"]*  $item["qty"];?></td>
                </tr>
            <?php endforeach;  ?>
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Tổng tiền</td>
                    <td><?php echo $total;?></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="col-md-6">
        <form action="taodonhang.php" method="post">
            <div class="form-group">
                <label>Tên khách hàng</label>
                <input type="text" name="customer" class="form-control"/>
            </div>
            <div class="form-group">
                <label>DT khách hàng</label>
                <input type="tel" name="tel" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Địa chỉ khách hàng</label>
                <input type="text" name="address" class="form-control"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Thanh toán</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>