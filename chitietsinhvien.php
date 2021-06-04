<?php include_once "database.php" ;?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiet sinh vien</title>
</head>
<body>
<?php
    // thay tham so tren URL
    $id = $_GET["id"];// $_GET la 1 array voi cac key la key cua param tren url
    $ds = queryDB("select * from sinhviens where id = $id");
    if(count($ds) == 0){
        header("Location: list.php");
    }
    $sv = $ds[0];
?>
    <h1>id sinh viên: <?php echo $id;?></h1>
    <h2>tên sinh viên: <?php echo $sv["name"];?></h2>
</body>
</html>