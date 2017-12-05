<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/29
 * Time: 上午 06:38
 */
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
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
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首頁</a></li>
                <li><a href="#">簡歷</a></li>
                <li><a href="#">學術</a></li>
                <li><a href="#">著作</a></li>
                <li><a href="#">學生</a></li>
                <li><a href="#">常用連結</a></li>
            </ul>
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
    <p style="text-align: left"><a href="index.php">首頁</a></p>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <div>
                <h1>王經篤(Jing-Doo Wang)</h1>
                <h2>亞洲大學 資訊工程系 副教授</h2>
                <br>
                <h3>學歷： 國立中正大學資訊工程博士</h3>
                <h3>辦公室： I517</h3>
                <h3>分機： 1847</h3>
                <h3>E-mail： jdwang@asia.edu.tw</h3>
                <h3>研究領域：</h3>
                <h3>雲端計算 、文件資訊擷取 、網路資訊擷取 、生物資訊</h3>
                <?php
                if($_SESSION['id']==null) {
                    echo"<h2><a href='login.html'>Login</a></h2>";
                }
                else{
                    echo  $_SESSION['id'] ;
                    echo"<h2><a href='logout.php'>Logout</a></h2>";
                }
                if($_SESSION['id']!=null) {
                    echo $_SESSION['id'];
                }else{
                    echo "no SESSION";
                }
                ?>
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

