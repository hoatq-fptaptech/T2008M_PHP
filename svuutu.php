<?php include_once "session.php";?>
<?php include_once "database.php";?>
<?php
    $svuutu = $_SESSION["sv_uu_tu"];
    $id = $_GET["id"];
    $ds = queryDB("select * from sinhviens where id = $id");
    if(count($ds) == 0){
        header("Location: list.php");
    }
    $sv = $ds[0];
    if(!in_array($sv,$svuutu)){ // Kiểm tra trong mảng đã có phần tử này chưa
        $svuutu[] = $sv;
        $_SESSION["sv_uu_tu"] = $svuutu;
    }
    header("Location: list.php");