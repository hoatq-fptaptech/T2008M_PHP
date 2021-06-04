<?php
    session_start();// cho phép khởi chạy session để lưu trữu
    if(!$_SESSION["sv_uu_tu"])
        $_SESSION["sv_uu_tu"]=[];