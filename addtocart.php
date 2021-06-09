<?php
session_start();
include_once "database.php";
$cart = [];
if(isset($_SESSION["cart"])){
    $cart = $_SESSION["cart"];
}
$id = $_GET["id"];
// lay sp ra tu db de cho vao cart
$sql = "select * from products where id= $id";
$ds = queryDB($sql);
if(count($ds)>0){
    $p = $ds[0]; // vi chỉ có 1 sp có id = $id
    $p["qty"] = 1;
    // kiem tra xem sp da co trong gio chua, neu co roi thi tang qty, ko co moi them sp
    if(checkCartItem($cart,$p)){
        foreach ($cart as $key=>$item){
            if($item["id"] == $p["id"])
                $cart[$key]["qty"]++;
        }
    }else{
        $cart[] = $p;
    }
    $_SESSION["cart"] = $cart;
    header("Location: listproduct.php");
}else{
    echo "Sản phẩm không tồn tại";
}

function checkCartItem($cart,$p){
    foreach ($cart as $item){
        if($item["id"] == $p["id"])
            return true;
    }
    return false;
}