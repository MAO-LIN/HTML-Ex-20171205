<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/19
 * Time: 下午 08:09
 */
session_start();
include("function.php");
include("menufunction.php");
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
            varbar(2);
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
<div class="container text-center" style="padding: 0">
    <div style="max-height:400px ;overflow: hidden">
        <img src="Image/background2_reSize.jpg" width="100%">
    </div>
</div>
<!--<div class="container text-center" style="padding: 0">-->
<!--    <div style="max-height:400px ;overflow: hidden">-->
<!--        <img src="Image/background2_reSize.jpg" width="100%">-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container" style="padding: 0;background-color: rgb(255,255,255);text-align: left">-->
<!--    <p><a href="index.php">首頁</a></p>-->
<!--</div>-->
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <div>
        <span style="float: left"><a href="index.php">首頁</a></span>
        <span style="float: left;padding-left: 3px;padding-right: 3px"> > </span>
        <span style="float: left;"><a href="education.php">簡歷</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <ul class="nav nav-tabs" id="labStyle">
                <li class="active"><a data-toggle="tab" href="#home">學歷</a></li>
                <li><a data-toggle="tab" href="#edu">經歷</a></li>
                <li><a data-toggle="tab" href="#teach">教學</a></li>
                <li><a data-toggle="tab" href="#grounp">參加團體</a></li>
                <!--                <li><a data-toggle="tab" href="#speech">專題演講</a></li>-->
                <!--                <li><a data-toggle="tab" href="#honor">榮譽</a></li>-->
                <li><a data-toggle="tab" href="#other">其他</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div style="text-align: left">
                        <table class="table table-hover" style="font-size: 1.5em">
                            <?php
                            $sql = "SELECT * FROM `education` WHERE style = '1'";
                            $result = mysqli_query($conn, $sql);
                            //            mysqli_set_charset($conn,'utf8');
                            $total = mysqli_num_rows($result);
                            for ($i = 0; $i < $total; $i++) {
                                $row = mysqli_fetch_row($result);
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[3]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div id="edu" class="tab-pane fade">
                    <div style="text-align: left">
                        <table class="table table-hover" style="font-size: 1.5em">
                            <?php
                            $sql = "SELECT * FROM `education` WHERE style = '2'";
                            $result = mysqli_query($conn, $sql);
                            //            mysqli_set_charset($conn,'utf8');
                            $total = mysqli_num_rows($result);
                            for ($i = 0; $i < $total; $i++) {
                                $row = mysqli_fetch_row($result);
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>$row[3]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div id="teach" class="tab-pane fade">
                    <div style="text-align: left">
                        <table class="table table-hover">
                            <tr>
                                <td>專任副教授</td>
                                <td>亞洲大學</td>
                                <td>2014.8 - 至今</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>專任助理教授</td>
                                <td>亞洲大學</td>
                                <td>2005.8 - 2014.7</td>
                                <td>18學期</td>
                            </tr>
                            <tr>
                                <td>專任助理教授</td>
                                <td>臺中健康暨管理學院</td>
                                <td>2003.2.1 - 2005.7</td>
                                <td>5 學期</td>
                            </tr>
                            <tr>
                                <td>專任講師</td>
                                <td>澎湖技術學院</td>
                                <td>2000.8.1 - 2003.1.31</td>
                                <td>5 學期</td>
                            </tr>
                            <tr>
                                <td rowspan="5">兼任講師</td>
                                <td>中正大學</td>
                                <td>1995.8.1 - 1997.1.31&nbsp1997.8.1 - 1998.1.31&nbsp1998.8.1 - 2001.1.31</td>
                                <td>9 學期</td>
                            </tr>
                            <tr>
                                <td>中國醫藥學院</td>
                                <td>1997.9 - 1999.7</td>
                                <td>4 學期</td>
                            </tr>
                            <tr>
                                <td>協志高職</td>
                                <td>1996.9 - 1998.2</td>
                                <td>3 學期</td>
                            </tr>
                            <tr>
                                <td>勤益工專</td>
                                <td>1996.8.1 - 1997.1.31&nbsp1997.8.1 - 1998.1.31</td>
                                <td>2 學期</td>
                            </tr>
                            <tr>
                                <td>台灣體育學院</td>
                                <td>1998.8.1 - 1999.1.31</td>
                                <td>3 學期</td>
                            </tr>
                        </table>
                        <!--                        <p>(副字  第046300號103年8月起)</p>-->
                        <!--                        <p>(助理字第009831號 92年2月起)</p>-->
                        <!--                        <p>(講  字第48733號  85年7月起)</p>-->
                    </div>
                </div>
                <div id="grounp" class="tab-pane fade">
                    <div style="text-align: left">
                        <table class="table table-hover" style="font-size: 1.5em">
                            <!--                            <tr>-->
                            <!--                                <td>台灣生物資訊學會</td>-->
                            <!--                                <td>永久會員 (2001.10起)</td>-->
                            <!--                            </tr>-->
                            <!--                            <tr>-->
                            <!--                                <td>社團法人台灣雲端計算學會</td>-->
                            <!--                                <td>永久會員 (2011.5.31起)</td>-->
                            <!--                            </tr>-->
                            <!--                            <tr>-->
                            <!--                                <td>台灣生物資訊與系統生物學會</td>-->
                            <!--                                <td>會員(2012)</td>-->
                            <!--                            </tr>-->
                            <?php
                            $sql = "SELECT * FROM `education` WHERE style = '4'";
                            $result = mysqli_query($conn, $sql);
                            //            mysqli_set_charset($conn,'utf8');
                            $total = mysqli_num_rows($result);
                            for ($i = 0; $i < $total; $i++) {
                                $row = mysqli_fetch_row($result);
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                if ($row[2] != null) {
                                    echo "<td>$row[2]</td>";
                                }
                                if ($row[4] != null) {
                                    echo "<td>$row[2]</td>";
                                }
                                echo "<td>$row[3]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <!--                <div id="speech" class="tab-pane fade">-->
                <!--                    <div style="text-align: left">-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <div id="honor" class="tab-pane fade">-->
                <!--                    <div style="text-align: left">-->
                <!--                    </div>-->
                <!--                </div>-->
                <div id="other" class="tab-pane fade">
                    <div style="text-align: left">
                        <table class="table table-hover" style="font-size: 1.5em">
                            <?php
                            $sql = "SELECT * FROM `education` WHERE style = '5'";
                            $result = mysqli_query($conn, $sql);
                            //            mysqli_set_charset($conn,'utf8');
                            $total = mysqli_num_rows($result);
                            for ($i = 0; $i < $total; $i++) {
                                $row = mysqli_fetch_row($result);
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                if ($row[2] != null) {
                                    echo "<td>$row[2]</td>";
                                }
                                echo "<td>$row[3]</td>";
                                echo "</tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <?php
            Rightmenu();
            ?>
        </div>
    </div>
    <br>
</div>
<!--<div class="container text-center" style="background-color: rgb(255,255,255);font-size: 1.4em">-->
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
