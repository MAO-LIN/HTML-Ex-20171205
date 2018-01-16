<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/29
 * Time: 上午 06:38
 */
session_start();
include("function.php");
include("menufunction.php");
include("mysql_connect.php");
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html lang="en">
<head>
    <title>Jing-Doo_Wang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/newstest.css">
    <!--    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/cwtexyen.css">-->

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
            <a><img src="Image/Asiaa_Logo.png" style="width:3.7em;padding: 0;margin: 0;"></a>
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
                if ($_SESSION['id'] != null) {
                    echo " <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Logout</a></li>";
                } else {
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
<!--<div class="container text-center" style="padding: 0">-->
<!--    <div style="max-height:400px">-->
<!--<div class="view hm-white-light jarallax" data-jarallax='{"speed": 0.2}' data-jarallax-video="https://www.youtube.com/watch?v=syBR4xiikcQ">-->
<!--    <div class="full-bg-img">-->
<!--        <div class="container flex-center">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 wow fadeIn">-->
<!--                    <div class="text-center text-danger">-->
<!--                        <h1 class="display-2 mb-2 wow fadeInDown" data-wow-delay="0.3s">Header + Video</h1>-->
<!--                        <h5 class="font-up mb-3 mt-1 font-bold wow fadeInDown" data-wow-delay="0.4s">Para poner imagen o video de fondo. <br>Realizado con <b>Bootstrap 4</b> y <b>Material Design para Bootstrap</b></h5>-->
<!--                        <a class="btn btn-danger btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-diamond"></i> Administrador</a>-->
<!--                        <a class="btn btn-primary btn-lg wow fadeInDown" data-wow-delay="0.4s"><i class="fa fa-shield"></i> Moderador</a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->

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
            if ($_SESSION['id'] != null) {
                ?>
                <ul class="nav nav-tabs">
                    <li class="active" style="font-size: 1.5em"><a data-toggle="tab" href="#home">簡介</a></li>
                    <!--                    <li><a data-toggle="tab" href="#menu1">修改</a></li>-->
                </ul>
                <?php
            }
            ?>
            <?php
            if ($_SESSION['id'] != null) {
            $sql = "SELECT * FROM `Introduction` WHERE id = '1' ";
            $result = mysqli_query($conn, $sql);
            //            mysqli_set_charset($conn,'utf8');
            $row = mysqli_fetch_row($result);
            ?>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <?php
                    }

                    ?>
                    <?php
                    $sql = "SELECT * FROM `Introduction` WHERE id = '1' ";
                    $result = mysqli_query($conn, $sql);
                    //            mysqli_set_charset($conn,'utf8');
                    $row = mysqli_fetch_row($result);
                    ?>
                    <h1><?php echo "$row[1]" ?></h1>
                    <h2><?php echo "$row[2]" ?><?php echo "$row[3]" ?><?php echo "$row[4]" ?></h2>
                    <br>
                    <h3>學歷： <?php echo "$row[5]" ?></h3>
                    <h3>辦公室： <?php echo "$row[6]" ?></h3>
                    <h3>分機： <?php echo "$row[7]" ?></h3>
                    <h3>E-mail： <?php echo "$row[8]" ?></h3>
                    <h3>研究領域：</h3>
                    <h3><?php echo "$row[9]" ?></h3>
                    <?php
                    if ($row[10] != null) {
                        echo " <h3>其他：</h3> ";
                        echo "<h3>$row[10]</h3>";
                    }
                    if($_SESSION['name'] != null){
                        echo"hi";
                    }
                    ?>
                    <?php if ($_SESSION['id'] != null){ ?>
                </div>
            </div>
        <?php } ?>
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
    <p> Lin @Asia University 2017</p>
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
<!--//video hearder-->
<!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
<!--<script type="text/javascript" src="js/popper.min.js"></script>-->
<!--<script src="https://mdbootstrap.com/previews/docs/latest/js/bootstrap.min.js"></script>-->
<!--<script src="https://mdbootstrap.com/previews/docs/latest/js/mdb.min.js"></script>-->
<!--<script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax.js"></script>-->
<!--<script src="https://mdbootstrap.com/previews/docs/latest/js/jarallax-video.js"></script>-->
<!--<script>-->
<!--    new WOW().init();-->
<!--</script>-->
<!--//href-->
<!--https://bootsnipp.com/snippets/featured/header-video-bs4-mdb-->
<!--https://bootsnipp.com/snippets/featured/hover-effect-with-amazing-effect-->
<!--https://bootsnipp.com/snippets/featured/windows-8-bootstrap-modals-->
<!--https://bootsnipp.com/snippets/AXeZg-->
<!--https://bootsnipp.com/snippets/featured/bootstrap-4-card-->

