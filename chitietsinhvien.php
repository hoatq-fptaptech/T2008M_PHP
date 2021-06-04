<?php include_once "database.php" ;?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
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