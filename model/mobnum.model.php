<?php

include '../controller/mobnum.controller.php';
include '../connection.php';

function postname($name){
    $sql = "INSERT INTO customers (name) VALUES ($name);";
    // $conn -> query($sql);
    if($conn -> query($sql) === TRUE){
        echo "<script>location.href='../view/mobileno.php'</script>";
    }
    // $sql2 = "SELECT id, name, date_created FROM customers WHERE name = '$name'";
    // $conn -> query($sql2);
    // return $sql2;
}

function postreturn() {
    echo "<script>location.href='../index.php'</script>";
}