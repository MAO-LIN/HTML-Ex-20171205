<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/6
 * Time: 上午 10:50
 */

session_start();
include ("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jing-Doo Wang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/news_test.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/cwtexyen.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>
<a id="top"></a>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a><img src="Image/Asia_Logo.jpg" style="width:3.7em;padding: 0;margin: 0;" ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php
            varbar(4);
            ?>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['id']!=null) {
                    echo" <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
                }
                else{
                    echo"<li><a href='login.html'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                ?>

            </ul>

        </div>
    </div>
</nav>
<div class="container text-center" style="padding: 0">
    <div style="max-height:400px ;overflow: hidden">
        <img src="Image/background2_reSize.jpg" width="100%">
    </div>
</div>
<!--<div class="container" style="padding: 0;background-color: rgb(255,255,255);text-align: left">-->
<!--    <p><a href="index.php">首頁</a></p>-->
<!--</div>-->
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <div>
    <span style="float: left"><a href="index.php">首頁</a></span>
    <span style="float: left;padding-left: 3px;padding-right: 3px"> > </span>
    <span style="float: left;"><a href="writing.php">著作</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <div>

            </div>
        </div>
        <div class="col-sm-4">
            <div id="menu">
                <p style="text-align: left">Profile</p>
                <img src="Image/jdwang.jpg"  style="width:50%; max-width:150px; max-height:150px; border-radius:50%" alt="Image">
                <ul style="margin:10px 10px 10px 10px">
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">學經歷</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">研究與專長</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">研究計畫</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">教授課程</a></li>
                </ul>
            </div>
        </div>
        <!--<div class="col-sm-1"></div>-->
    </div>
    <br>
</div>
<div class="container text-center" style="background-color: rgb(255,255,255)">
    <p><a href="#top">點我回頂端</a></p>
</div>

<!--<div class="container-fluid bg-3 text-center">-->
<!--<div class="row">-->
<!--<div class="col-sm-3">-->
<!--<p>Some text..</p>-->
<!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<p>Some text..</p>-->
<!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<p>Some text..</p>-->
<!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--</div>-->
<!--<div class="col-sm-3">-->
<!--<p>Some text..</p>-->
<!--<img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">-->
<!--</div>-->
<!--</div>-->
<!--<div class="container-fluid text-center"> </div>-->
<!--</div><br><br>-->

</body>
</html>
