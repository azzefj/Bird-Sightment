<?php
    session_start();
    if(empty($_SESSION['ADMIN_ID'])) { // Recuerda usar corchetes.
        header('Location: social.php');
    }
    include ("php/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Bird House</title>
    <link rel="stylesheet" href="css/social1.css">
    <link rel="stylesheet" href="css/social2.css">
    <link rel='stylesheet' href=''>
    <link rel="stylesheet" href="css/social3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bird House</title>
    <meta name="description" content="A photography-inspired website layout with an expanding stack slider and a background image tilt effect" />
    <meta name="keywords" content="photography, template, layout, effect, expand, image stack, animation, flickity, tilt" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/flickity.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="js/modernizr.custom.js"></script>

    <style>
        /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
        @import url(https://fonts.googleapis.com/css?family=Open+Sans);
        .btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
        .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
        .btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
        .btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
        .btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
        .btn-primary.active { color: rgba(255, 255, 255, 0.75); }
        .btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
        .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
        .btn-block { width: 100%; display:block; }

        * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

        html { width: 100%; height:100%; overflow:hidden; }

        body {
            width: 100%;
            height:100%;
            font-family: 'Open Sans', sans-serif;
        }
        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -150px 0 0 -150px;
            width:300px;
            height:300px;
        }
        .login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

        input {
            width: 100%;
            margin-bottom: 10px;
            background: rgba(0,0,0,0.3);
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #fff;
            text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
            border: 1px solid rgba(0,0,0,0.3);
            border-radius: 4px;
            box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
            -webkit-transition: box-shadow .5s ease;
            -moz-transition: box-shadow .5s ease;
            -o-transition: box-shadow .5s ease;
            -ms-transition: box-shadow .5s ease;
            transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }
        <style>
         html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            position: absolute;
            height: 50%;
            width: 25%;
            left: 70%;
            bottom: 30%;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body class=" w3-theme-d5">
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBK67GQM_P0GgmSjBFUApOI2T74Md5s_bc&callback=initMap">
</script>

<div class="w3-top">
    <div class="w3-bar w3-theme-d4 w3-left-align w3-large" style="background-color: #9d9d9d">
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
        <a href="adminTools_stats.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Birds stats"><i class="fa fa-envira"></i> Stats</a>
        <a href="adminTools_addClass.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add class"><i class="fa fa-plus-square"></i> Class</a>
        <a href="adminTools_addOrder.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add order"><i class="fa fa-plus-square"></i> Order</a>
        <a href="adminTools_addSuborder.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add suborder"><i class="fa fa-plus-square"></i> Suborder</a>
        <a href="adminTools_addFamily.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add family"><i class="fa fa-plus-square"></i> Family</a>
        <a href="adminTools_addGender.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add gender"><i class="fa fa-plus-square"></i> Gender</a>
        <a href="adminTools_addSpecie.php" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="Add specie"><i class="fa fa-plus-square"></i> Specie</a>
        <a href="#" class="w3-center w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-theme-d1" title="Check users"><i class="fa fa-users"></i> Users</a>
        <a href="social.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right" title="Exit Admin Tools"><i class="fa fa-cube"></i> Exit</a>
    </div>
</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-2 w3-round">
            </div>
            <br>

            <!-- Accordion -->




            <!-- Alert Box -->

            <!-- End Left Column -->
        </div>

        <!-- Middle Column -->
        <div class="w3-col m7">

            <div class="w3-row-padding">
                <div class="w3-col m12">
                    <div class="w3-card-2 w3-round w3-white">
                        <div class="w3-container w3-padding">
                            <h6 class="w3-opacity w3-center">Welcome <?php

                                echo ($_SESSION['USER_NICKNAME']);

                                ?>!</h6>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            loadUsers();
            ?>

            <!--
            <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-row-padding"><br>
                <img src="img/user+.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
                <span class="w3-right w3-opacity">Date</span>
                <h5>Nickname</h5><br>
                <hr class="w3-clear">
                <p><i class="fa fa-location-arrow fa-fw w3-margin-right w3-text-theme"></i> Country, Province, Canton, District.</p>
                <div class="w3-row-padding" style="margin:0 -16px">
                    <div class="w3-image">
                        <img src="sight/animals-snake-bird-photo-background-694x417.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
                    </div>
                </div>
                <button type="button" class="w3-button w3-margin-bottom"><i class="fa fa-star"></i></button>
                <button type="button" class="w3-button w3-margin-bottom"><i class="fa fa-star"></i></button>
                <button type="button" class="w3-button w3-margin-bottom"><i class="fa fa-star"></i></button>
                <button type="button" class="w3-button w3-margin-bottom"><i class="fa fa-star"></i></button>
                <button type="button" class="w3-button w3-margin-bottom"><i class="fa fa-star"></i></button>
                <span class="w3-right w3-opacity">Calification: 0</span>
            </div>-->

            <!-- End Middle Column -->
        </div>

        <!-- Right Column -->
        <div class="w3-col m2">


            <div class="w3-hover-text-gray w3-round w3-padding-32 w3-center">
            </div>
            <?php
            //loadTop();
            ?>

            <!-- End Right Column -->
        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<!-- End Page Container -->
<br>
</body>
</html>
