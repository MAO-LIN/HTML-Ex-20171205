<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/19
 * Time: 下午 08:09
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
<nav class="navbar navbar-inverse">
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
            <?php
            varbar(2);
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
        <span style="float: left;"><a href="writing.php">簡歷</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <ul class="nav nav-tabs" id="labStyle">
                <li class="active"><a data-toggle="tab" href="#home">學歷</a></li>
                <li><a data-toggle="tab" href="#edu">經歷</a></li>
                <li><a data-toggle="tab" href="#teach">教學</a></li>
                <li><a data-toggle="tab" href="#grounp">參加團體</a></li>
                <li><a data-toggle="tab" href="#speech">專題演講</a></li>
                <li><a data-toggle="tab" href="#honor">榮譽</a></li>
                <li><a data-toggle="tab" href="#other">其他</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div style="text-align: left">
                        <h3>沙鹿國小 (1972.9-1978.6)</h3>

                        <h3>沙鹿國中 (1978.9-1981.6)</h3>

                        <h3> 台中一中 (1981.9-1984.6)</h3>

                        <h3> 大同工學院資訊工程系   (1985.9-1989.6)</h3>

                        <h3> 中正大學資訊工程所 碩士(1991.9-1993.6)</h3>

                        <h3> 中正大學資訊工程所 博士(1993.9-2002.6)</h3>
                    </div>
                </div>
                <div id="edu" class="tab-pane fade">
                    <div style="text-align: left;font-size: 1.4em">
                        <p>1988.5  -1989.5  大同公司 網路組工讀</p>
                        <p> 1989.7  -1991.5  預官第39期步兵排長 (陸軍步校（受訓）)(陸軍官校（資訊中心少尉教官）)</p>
                        <p>1997.2  -1997.5  第28屆全國大專運動會資訊組 測試規劃負責人</p>
                        <p> 1999.12 -2000.4  網路資料庫、程式設計班講師(青輔會委託中正大學辦理，共三梯次)</p>
                        <p> 2002.8  -2003.1  澎湖技術學院 電算中心 系統作業與支援組 組長</p>
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
                                <td>2000.8.1 -  2003.1.31</td>
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
                            <tr>
                                <td>台灣生物資訊學會</td>
                                <td>永久會員 (2001.10起)</td>
                            </tr>
                            <tr>
                                <td>社團法人台灣雲端計算學會</td>
                                <td>永久會員 (2011.5.31起)</td>
                            </tr>
                            <tr>
                                <td>台灣生物資訊與系統生物學會</td>
                                <td>會員(2012)</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div id="speech" class="tab-pane fade">
                    <div style="text-align: left">
                    </div>
                </div>
                <div id="honor" class="tab-pane fade">
                    <div style="text-align: left">
                    </div>
                </div>
                <div id="other" class="tab-pane fade">
                    <div style="text-align: left">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div id="menu">
<!--                <div class="borderStyle">-->
                    <p style="text-align: left">Profile</p>
<!--                </div>-->
                <div style="margin:10px 10px 10px 10px">
                     <img src="Image/jdwang.jpg"  style="width:50%; max-width:150px; max-height:150px; border-radius:50%" alt="Image">
                </div>
                <ul style="margin:10px 10px 10px 10px">
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">學經歷</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">研究與專長</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">研究計畫</a></li>
                    <li><a href="http://dns2.asia.edu.tw/~jdwang/Experience.htm">教授課程</a></li>
                </ul>
<!--                <div class="borderStyle">-->
                    <p style="text-align: left">QRcode</p>
<!--                </div>-->
                <div style="margin: 10px 10px 10px 10px">
                <img src="Image/htmlQR.jpg" style="width:50%;max-width:200px;">
                </div>
            </div>
        </div>
        <!--<div class="col-sm-1"></div>-->
    </div>
    <br>
</div>
<!--<div class="container text-center" style="background-color: rgb(255,255,255);font-size: 1.4em">-->
    <div class="container text-center" id="footer" style="background-color: rgb(255,255,255)">
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
