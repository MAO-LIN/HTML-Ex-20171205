<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/29
 * Time: 上午 06:38
 */
session_start();
include ("function.php");
include ("menufunction.php");
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
    <link rel="stylesheet" href="css/newstest.css">
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
<nav class="navbar navbar-inverse container" style="max-width: 1170px">
    <div class="container-fluid" style="max-width: 1200px">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a><img src="Image/Asiaa_Logo.png" style="width:3.7em;padding: 0;margin: 0;" ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="#">首頁</a></li>-->
<!--                <li><a href="#">簡歷</a></li>-->
<!--                <li><a href="#">學術</a></li>-->
<!--                <li><a href="#">著作</a></li>-->
<!--                <li><a href="#">學生</a></li>-->
<!--                <li><a href="#">常用連結</a></li>-->
<!--            </ul>-->
            <?php
                varbar(1);
            ?>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if($_SESSION['id']!=null) {
                    echo " <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";
                }
                else{
                    echo " <li><a href='login.html'><span class='glyphicon glyphicon-log-in'></span>Login</a></li>";
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
<?php
    centerTitle(1);
?>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <p style="text-align: left"><a href="index.php">首頁</a></p>
<!--    <br>-->
    <div class="row">
        <div class="col-sm-8">
            <?php
            if($_SESSION['id']!=null) {
            ?>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">簡介</a></li>
                    <li><a data-toggle="tab" href="#menu1">修改</a></li>
            </ul>
                <?php
            }
            ?>
            <?php
            if($_SESSION['id']!=null) {
            ?>
            <div class="tab-content">
            <div id="menu1" class="tab-pane fade">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="name">名字:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="university">大學:</label>
                            <input type="text" class="form-control" id="university"  name="	university">
                        </div>
                        <div class="form-group">
                            <label for="department">學系:</label>
                            <input type="text" class="form-control" id="department" name="department">
                        </div>
                        <div class="form-group">
                            <label for="position">職位:</label>
                            <input type="text" class="form-control" id="position" name="position">
                        </div>
                        <div class="form-group">
                            <label for="education">學歷:</label>
                            <input type="text" class="form-control" id="education" name="education">
                        </div>
                        <div class="form-group">
                            <label for="office">辦公室:</label>
                            <input type="text" class="form-control" id="office" name="office">
                        </div>
                        <div class="form-group">
                            <label for="ext">分機:</label>
                            <input type="text" class="form-control" id="ext" name="ext">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="research">研究領域:</label>
                            <input type="text" class="form-control" id="research" name="research">
                        </div>
                        <div class="form-group">
                            <label for="other">Other:</label>
                            <input type="text" class="form-control" id="other" name="other">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">更改</button>
                    </form>
            </div>
            <div id="home" class="tab-pane fade in active">
                <?php
                }
                ?>
                <h1>王經篤(Jing-Doo Wang)</h1>
                <h2>亞洲大學 資訊工程系 副教授</h2>
                <br>
                <h3>學歷： 國立中正大學資訊工程博士</h3>
                <h3>辦公室： I517</h3>
                <h3>分機： 1847</h3>
                <h3>E-mail： jdwang@asia.edu.tw</h3>
                <h3>研究領域：</h3>
                <h3>雲端計算 、文件資訊擷取 、網路資訊擷取 、生物資訊</h3>
<!--                <button onclick="aa()" class="btn btn-primary btn-md">點我阿</button>-->
<!--                <script>-->
<!--                    function aa() {-->
<!--                        var hello=window.prompt("aa");-->
<!--                        document.createElement("標籤")-->
<!--                  document.write(hello);-->
<!---->
<!--                    }-->
<!--               </script>-->
                <?php if($_SESSION['id']!=null){?>
                    </div>
            </div >
               <?php }?>
        </div>
        <div class="col-sm-4">
            <?php
            Rightmenu();
            ?>
        </div>
        <!--<div class="col-sm-1"></div>-->
    </div>
    <br>
</div>
<div class="container text-center" id="footer">
    <p><a href="#top">點我回頂端</a></p>
    <p> @developing by Lin </p>
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

