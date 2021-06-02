<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <?php
        // lay ds sv tu database
        $servername = "localhost";
        $username = "root";
        $password = ""; // neu dung mamp password: root
        $db = "t2008m_php";
        // create connection
        $conn = new mysqli($servername,$username,$password,$db);
        // kiem tra ket noi
        if($conn->connect_error){
            die("Connect error...");// die lam dung luong chuong trinh tai day
        }
      //  echo "Connect successfully";
        // lay data tu bang sinhviens
        $sql_txt = "select * from sinhviens";
        $rs = $conn->query($sql_txt);
        $dssinhvien = [];
        if($rs->num_rows>0){
            while($row = $rs->fetch_assoc()){
                $dssinhvien[] = $row;
            }
        }
    ?>
    <ul>
        <?php foreach($dssinhvien as $sv){ ?>
            <li><a href="chitietsinhvien.php?id=<?php echo $sv["id"];?>"><?php echo $sv["name"]."--".$sv["age"];?></a></li>
       <?php } ?>
    </ul>
</body>
</html>