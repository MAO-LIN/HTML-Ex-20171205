<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/9
 * Time: 下午 09:37
 */
session_start();
include("function.php");
include("control_function.php");
include("mysql_connect.php");
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
    <link rel="stylesheet" href="css/control_Panel.css">
    <script type="text/javascript" src="js/control_Panel.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

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
            <?php
            varbar(7);
            ?>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($_SESSION['id'] != null) {
                    echo " <li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
                } else {
                    echo "<li><a href='login.html'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
                }
                ?>

            </ul>

        </div>
    </div>
</nav>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <div>
        <span style="float: left"><a href="index.php">首頁</a></span>
        <span style="float: left;padding-left: 3px;padding-right: 3px"> > </span>
        <span style="float: left;"><a href="control_Panel.php">控制台</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <?php menu(1); ?>
        </div>
        <div class="col-sm-10">
            <div style="margin: 10px 10px 10px 10px;padding: 10px 10px 10px 10px;background-color: white">
                <?php
                $sql = "SELECT * FROM `Introduction` WHERE id = '1' ";
                $result = mysqli_query($conn, $sql);
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
                    echo "<h3>其他：</h3>";
                    echo "<h3>$row[10]</h3>";
                }
                ?>
                <form style="display: inline"  action="panel_edit_form.php" method="POST">
                    <button type="submit" class="btn btn-primary btn-lg">修改</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="container text-center" id="footer">
    <p><a href="#top">點我回頂端</a></p>
    <p> Lin @Asia University 2017</p>
</div>
</body>
</html>