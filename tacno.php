<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mysejahteri</title>
    <meta name="robots" content="follow, index" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?v=1.0.2" />
    <?php
        // Start the session
        session_start();
        ?>


</head>

<body>
    <?php
        $num = $_POST["phone"];
        $_SESSION["mobilenum"] = $num;

        $tac = [rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9)];
        //Generate TAC number
        echo '<script>alert("Your TAC numbers are: '.$tac[0].$tac[1].$tac[2].$tac[3].$tac[4].$tac[5].' ")</script>';

        $_SESSION["tacnum"] = $tac;
    ?>
    <div class="app__container">
        <div class="app__wrapper">
            <div class="app__logo"><img src="dist/images/svg/cvd_logo.svg" alt="" /></div>
            <div class="app__headline">Enter your <span class="app__name_newln">6-digit TAC</span></div>
            <div class="app__desc app__desc_tacno">
                <p class="app__desc_1">Once your number is verified, it cannot be further amended.</p>
            </div>
            <form action="tacverification.php" method="post">
                <div class="pin-wrapper">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="firstdigit">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="seconddigit">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="thirddigit">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="forthdigit">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="fifthdigit">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name="sixdigit">
                </div>
                <div class="form_app_submit_container">
                    <button type="submit" class="form_app_submit btn_orange" onclick="location.href='scanner.html';">Complete <span class="next_arrow_icon"><img src="dist/images/svg/arrow_right_white.svg" alt=""></span></button>
                </div>
            </form>
        </div>
        <div class="app__artwork_name"><img src="dist/images/svg/cvd_artwork_tac.svg" alt=""></div>
    </div>

    <script src="dist/js/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/app.js"></script>


</body>

</html>
