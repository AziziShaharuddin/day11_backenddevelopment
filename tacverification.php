<?php
    // include 'connection.php';
    session_start();

    $tacverify = [];
    array_push($tacverify, $_POST["firstdigit"], $_POST["seconddigit"], $_POST["thirddigit"], $_POST["forthdigit"], $_POST["fifthdigit"], $_POST["sixdigit"]);

    // echo $tacverify[2];

    if($_SESSION["tacnum"] == $tacverify) {
        echo "<script>location.href='scanner.php'</script>"; //('Location: scanner.php')
        
    } else {
        echo "wrong number!";
        echo "<script>location.href='mobileno.php'</script>";
    }