<?php include_once "session.php";?>
<?php include_once "database.php" ;?>
<?php
$cookie_name = "title";
$cookie_value = "Hệ thống quản lý sinh viên";
setcookie($cookie_name,$cookie_value,time()+(60*60*24),"/"); // nạp giá trị vào cookie

$_SESSION["user"] = [
        "username"=>"Nguyễn Văn An",
        "email" =>"annv@gmail.com"
];
?>
<!doctype html>
<html lang="en">
<?php include "html/head.php" ;?>
<body>
    <h1>Danh sách sinh viên</h1>
    <?php
        // lay data tu bang sinhviens
        $sql_txt = "select * from sinhviens";
        $dssinhvien = queryDB($sql_txt);
    ?>
    <a href="themsinhvien.php">Thêm sinh viên</a>
    <ul>
        <?php foreach($dssinhvien as $sv){ ?>
            <li><a href="chitietsinhvien.php?id=<?php echo $sv["id"];?>"><?php echo $sv["name"]."--".$sv["age"];?></a>
                <a href="edit.php?id=<?php echo $sv["id"];?>">Sửa</a><a href="delete.php?id=<?php echo $sv["id"];?>">Xóa</a></li>
       <?php } ?>
    </ul>
</body>
</html>