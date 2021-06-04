<?php
    include_once  "database.php";
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];

    $sql_txt = "insert into sinhviens (name,age,address) values('$name',$age,'$address')";
    if(insertOrUpdateDB($sql_txt)){
        header("Location: list.php");
    }else{
        echo "Error";
    }