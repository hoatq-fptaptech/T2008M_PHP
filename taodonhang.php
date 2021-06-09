<?php
session_start();
include_once "database.php";

$customer = $_POST["customer"];
$tel = $_POST["tel"];
$address = $_POST["address"];

$cart = isset($_SESSION["cart"])?$_SESSION["cart"]:[]; // isset la kiểm tra có tồn tại hay ko

if(count($cart)>0){
    $total = 0;
    foreach ($cart as $item){
        $total += $item["price"]*$item["qty"];
    }
    try {
        $sql_order = "insert into orders (grandtotal,customer,tel,address) values ($total,'$customer','$tel','$address')";
        $conn = connectDB();
        $order_id  = 0;
        if($conn->query($sql_order) === true){
            $order_id = $conn->insert_id; // lấy id của đơn hàng vừa tạo
        }
        if($order_id > 0){
            $sql_item = "insert into orders_products (order_id,product_id,price,qty) values ";
            $values = [];
            foreach ($cart as $item){
                $p_id = $item["id"];
                $price = $item["price"];
                $qty = $item["qty"];
                $values[] = "($order_id,$p_id,$price,$qty)";
            }
            $v = implode(",",$values); // chuuyeen mangr thanh 1 string
            $sql_item.= $v;
            insertOrUpdateDB($sql_item);
            echo "Tạo đơn thành công";
        }
    }catch (Exception $e){
        var_dump($e);
    }

}else{
    echo "Không có sản phẩm nào trong giỏ hàng";
}
