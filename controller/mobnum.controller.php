<?php
    include '../index.php';
    include '../connection.php';
    // session_start();

    $name = $_POST["username"];
    // $_SESSION["username"] = $_POST["username"];

    

    function getusername($name) {
        if ($name !== " ") {
            postname($name);
            // return $name;
        } else {
            echo "<script>alert('Please enter your name')</script>";
            postreturn();
        }
    }

    getusername($name);