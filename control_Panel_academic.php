<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/9
 * Time: 下午 09:37
 */
session_start();
include("function.php");
//include ("menufunction.php");
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
    <!--    <script type="text/javascript" src="js/control_Panel.js" ></script>-->
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
        <span style="float: left;"><a href="writing.php">簡歷</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <?php menu(3); ?>
        </div>
        <div class="col-sm-10">
            <div style="margin: 10px 10px 10px 10px ">
                <?php
                include("mysql_connect.php");
                $sql = "SELECT * FROM `acadmid`";
                $result = mysqli_query($conn, $sql);
                $total = mysqli_num_rows($result);
                ?>
                <div style="margin-bottom: 10px">
                <form style="display: inline" action="academic_add_form.php" method="POST">
                    <input type="hidden" name="no" <?php echo "value='$total'" ?>>
                    <button type="submit" class="btn btn-success btn-lg">新增</button>
                </form>
                </div>
                <h3 style="font-size: 1.4em;text-align: left">共<?php echo"$total" ?>筆資料</h3>
                <?php
                for ($i = 0; $i < $total; $i++) {
                    ?>
                    <div style="background-color: white;padding: 10px 10px 10px;margin-bottom: 10px ">
                        <?php
                        $row = mysqli_fetch_row($result);
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">" . ($i + 1) .'.'."</h3>";
                        echo "<h3 style=\"font-size:1.3em;font-weight:bold;text-align: left; border-bottom: solid;\">" . $row[0] . "</h3>";
                        echo "<h3 style=\"font-size:1em ;text-align: left\">" . $row[1] . "</h3>";
                        echo "<h3 style=\"font-size:1em ;text-align: left\">" . $row[2] . "</h3>";
                        echo "<h3 style=\"font-size:1em ;text-align: left\">" . $row[3] . "</h3>";
                        echo "<h3 style=\"font-size:1em ;text-align: left\">" . $row[4] . "</h3>";
                        echo "<h3 style=\"font-size:1em ;text-align: left\">" . $row[5] . "</h3>";
                        echo "<br>";
                        ?>
                        <form style="display: inline"  action="academic_edit_form.php" method="POST">
                            <?php echo "<input type='hidden' name='number' value='$row[6]' >" ?>
                            <button type="submit" class="btn btn-primary btn-lg">修改</button>
                        </form>
                        <form style="display: inline" action="academic_remove.php" method="POST">
                            <?php echo "<input type='hidden' name='number' value='$row[6]'>" ?>
                            <!--                                <button type="submit" class="btn btn-primary btn-md" onclick="remove('您真的確定要刪除嗎？');return document.MM_returnValue">-->
                            <input type="submit" class="btn btn-danger btn-lg" name="delkind" value="刪除"
                                   onClick="tfm_confirmLink('您真的確定要刪除嗎？');return document.MM_returnValue"/>
                        </form>
                    </div>
                    <?php
                }
                ?>
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
<script>
    function tfm_confirmLink(message) {
        if (message == "") message = "確定刪除嗎?";//這一行應該是可以刪除　
        document.MM_returnValue = confirm(message);
    }
</script>