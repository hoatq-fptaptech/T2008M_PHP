<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $id = $_POST["id"];

    $sql_txt = "update sinhviens set name='$name',age = $age, address='$address' where id= $id";

    if(insertOrUpdateDB($sql_txt)){
        header("Location: list.php");
    }else{
        echo "Error";
    }