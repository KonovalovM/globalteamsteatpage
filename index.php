<?php
require_once 'configs/pdo_ini.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>
            <?php echo "Page";?>
        </title>
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <div class="">
            <div id="menu">
                <?php
                include "modules/btn-login.php";
                ?>
            </div>
            <div class="logo">
                <span class="flex">PlayTosh</span>
            </div>
        </div>

        <!--    Login form -->
        <div class="enter" id="enter-form" <?php if (isset($_COOKIE["user_id"])){?> style="display: none"<?php } ?>>
            <span class="flex"><b><i>ENTER</i></b></span>
            <?php
                include "modules/login.php";
            ?>
                <div></div>
                <form action="index.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Enter you e-mail" title="Enter you e-mail">
                    <input type="password" id="password" name="password" placeholder="Enter you pasword" title="Enter you pasword">
                    <button type="submit" id="enter"><b>ENTER</b></button>
                    <a href="#" id="open-registration"><b>Registration</b></a>
                </form>
        </div>

        <!--    Registration form-->
        <div class="registration" id="registration-form">
            <span class="flex"><b><i>Registration form</i></b></span>
            <?php
                include "modules/registration.php";
            ?>
                <div class="close2">X</div>
                <form method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter you name" title="Enter you name">
                    <input type="email" id="email2" name="email" placeholder="Enter you e-mail" title="Enter you e-mail">
                    <input type="password" id="password2" name="password" placeholder="Enter you pasword" title="Enter you pasword">
                    <input type="password" id="password3" name="password3" placeholder="Enter you pasword again" title="Enter you pasword again">
                    <button type="submit" id="sign-up"><b>Sign up</b></button>
                </form>
        </div>
        <?php

        if (isset($_COOKIE["user_id"])){
        ?>

        <div class="head flex">
            <a href="/?sort=year"><h3>YEAR</h3></a>
            <a href="/?sort=month"><h3>MONTH</h3></a>
            <a href="/?sort=ip"><h3>IP</h3></a>
            <a href="/?sort=button_id"><h3>BUTTON ID</h3></a>
            <a href="/?sort=count_of_clicks"><h3>COUNT OF CLICKS</h3></a>
        </div>
        <?php
        include "modules/list.php";
        }
        ?>

        <script src="js/var.js"></script>
        <script src="js/script.js"></script>


    </body>

    </html>
