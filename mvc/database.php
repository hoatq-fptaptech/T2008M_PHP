<?php
    function connectDB(){
        $servername = "localhost";
        $username = "root";
        $password = ""; // neu dung mamp password: root
        $db = "t2008m_php";
        // create connection
        $conn = new mysqli($servername,$username,$password,$db);
        // kiem tra ket noi
        if($conn->connect_error){
           return null;
        }
        return $conn;
    }

    function queryDB($sql_txt){
        $conn = connectDB();
        $list = [];
        if($conn != null){
            $rs = $conn->query($sql_txt);

            if($rs->num_rows>0){
                while($row = $rs->fetch_assoc()){
                    $list[] = $row;
                }
            }
        }
        return $list;
    }

    function insertOrUpdateDB($sql_txt){
        $conn = connectDB();
        if($conn != null){
            return  $conn->query($sql_txt);
        }
        return false;
    }

