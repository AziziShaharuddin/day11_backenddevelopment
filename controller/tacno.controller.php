<?php
    include '../view/mobileno.php';

    $phonenum = $_POST["phone"];

    getphonenum($phonenum);

    function getphonenum($phonenum) {
        if ($phonenum !== " "){
            postnum($phonenum);
            return $phonenum;
        } else {
            echo "<script>alert('Please enter your name')</script>";
            numverify();
        }
    }