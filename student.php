<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/26
 * Time: 下午 11:25
 */
session_start();
include ("function.php");
include ("menufunction.php");
include ("mysql_connect.php");
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
            varbar(5);
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
centerTitle(5);
?>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <span style="float: left"><a href="index.php">首頁</a></span>
    <span style="float: left;padding-left: 3px;padding-right: 3px"> > </span>
    <span style="float: left;"><a href="student.php">學生</a></span>
    <br/>
    <div class="row">
        <div class="col-sm-8">
            <div style="text-align: left">
                <table class="table table-hover" style="font-size: 1.2em;">
                    <tr>
                        <th>學年</th>
                        <th>系所</th>
                        <th>姓名</th>
                        <th>題目</th>
                        <th>備註</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `student`";
                    $result = mysqli_query($conn, $sql);
                    //            mysqli_set_charset($conn,'utf8');
                    $total = mysqli_num_rows($result);
                    for ($i = 0; $i < $total; $i++) {
                        $row = mysqli_fetch_row($result);
                        echo "<tr style='background-color: rgb(255,216,229);border: solid'>";
                        echo "<td>$row[1]</td>";
                        echo "<td>$row[2]</td>";
                        echo "<td>$row[3]</td>";
                        echo "<td>$row[4]</td>";
                        echo "<td>$row[5]</td>";
                        echo "</tr>";
                    }
                    ?>
                </table>
            </div>
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