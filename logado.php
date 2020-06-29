<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location:login.php");
        exit;
    }


?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FUCKAPE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
        #chat {
            margin: 0 auto 200px auto;
        }
    </style>


</head>

<body>
  
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1 ">
        <div class="container ">
            <div class="chat" align="center">
                <embed wmode="transparent" src="https://www.xatech.com/web_gear/chat/chat.swf" quality="high" width="640" height="480" name="chat" FlashVars="id=220435186" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="https://xat.com/update_flash.php"
                /><br><small><a target="_BLANK" href="https://xat.com/web_gear/?cb"></a> <a target="_BLANK" href="https://xat.com/web_gear/chat/go_large.php?id=220435186"></a></small><br>
            </div>
        </div>
        <h1> FUCKAPE É FODA 
             [LG] [É] [MITO]
             E COMI O CU DE QUEM TA LENDO </h1>
    </div>    

        <!--/ bradcam_area  -->

     
     <a href="sair.php">sair</a>
  

</body>

</html>