<?php
//include_once "database.php";
include_once "models/Sinhvien.php";
class Controller{

    public function home(){
        include "views/home.php";
    }

    public function aboutUs(){
        include "views/aboutus.php";
    }

    public function listSV(){
//        $sql_txt = "select * from sinhviens";
//        $dssinhvien = queryDB($sql_txt);
        $sv = new SinhVien();
        $dssinhvien = $sv->all();
        include "views/listsv.php";
    }

    public function themSV(){
        include "views/themsv.php";
    }

    public function luuSV(){
       $sv = new SinhVien();
        if($sv->save($_POST)){
            header("Location: ?route=listsv");
        }else{
            echo "Error";
        }
    }
}