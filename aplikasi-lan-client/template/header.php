<?php error_reporting(1); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Metro UI CSS Framework">
    <meta name="description" content="Simple responsive css framework">
    <meta name="author" content="Sergey S. Pimenov, Ukraine, Kiev">

    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <!--<link href="css/metro-bootstrap-responsive.css" rel="stylesheet">-->
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/adaptive-modal.css" rel="stylesheet">
    
    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script> 
   
    <script src="js/jquery.adaptive-modal.js"></script>
    <script src="js/jquery.base64.js"></script>

    <title>Aplikasi Perpustakaan</title>

    <style>
        .container {
            width: 1040px;
        }
        
        form fieldset .input-control, .tile-content label{
            margin-left: 15px;
        }
        
        form fieldset .search{
            margin-top: 10px;
            float: right;
            margin-right: 15px;
        }
        
        .tile-content label{
            margin-top: 10px;
        }
        h1 {
            font-smooth: always;
            -webkit-font-smoothing: antialiased;
        }
        .buttonlink {
            display: inline-block; 
            color: white!important; 
            padding: 2px 5px; 
            background-color:grey; 
            margin-top: 10px; 
            float: right; 
        }
        .am-back {
            border-radius: 5px;
        }
        .search {
            float: right;
        }
        footer {
            position: fixed; 
            bottom: 0;
            height: 50px;
            width: 1040px;
            
            background: -moz-linear-gradient(top, rgba(255,255,255,0.3) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 99%, rgba(255,255,255,1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.3)), color-stop(17%,rgba(255,255,255,1)), color-stop(99%,rgba(255,255,255,1)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(top, rgba(255,255,255,0.3) 0%,rgba(255,255,255,1) 17%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(top, rgba(255,255,255,0.3) 0%,rgba(255,255,255,1) 17%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(top, rgba(255,255,255,0.3) 0%,rgba(255,255,255,1) 17%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%); /* IE10+ */
            background: linear-gradient(to bottom, rgba(255,255,255,0.3) 0%,rgba(255,255,255,1) 17%,rgba(255,255,255,1) 99%,rgba(255,255,255,1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4dffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
            copy

        }
        .main-content {
            margin-bottom: 50px;
        }
    </style>
</head>
<body class="metro">
    <div class="container first-con">
        <header class="margin20 nrm nlm">
            <div class="clearfix">
                <a class="place-left" href="#" title="">
                    <h1>Perpustakaan</h1>
                </a>
            </div>
            <?php
                include 'menu.php'; //this menu.php will change according to ACL
            ?>
        </header>
        <div class="main-content clearfix animated scaleShow">
            <div class="tile-area no-padding clearfix">