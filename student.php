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
    <p style="text-align: left"><a href="index.php">首頁</a></p>
    <!--    <br>-->
    <div class="row">
        <div class="col-sm-8">
            <div>
               <table class="table table-hover">
                   <thead>
                   <tr>
                       <th>學年</th>
                       <th>系所</th>
                       <th>姓名</th>
                       <th>論文題目</th>
                       <th>備註</th>
                   </tr>
                   </thead>
                   <tbody>
                   <tr>
                       <td>102</td>
                       <td>資訊工程所 (博士班)</td>
                       <td>Heri Wijayanto</td>
                       <td></td>
                       <td>(Indonesia)</td>
                   </tr>
                   <tr>
                       <td rowspan="3">101</td>
                       <td rowspan="6">資訊工程所</td>
                       <td>陳彥棠</td>
                       <td>提升 Hadoop MapReduce 計算效能之研究-以抽取樣式歷史為例
                           (Promoting the Computational Performance of Hadoop MapReduce for Pattern History Extraction)</td>
                       <td></td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>蔣中凱</td>
                       <td>樣式歷史資料之形狀查詢-藉由Haar小波
                           (Shape Query for Pattern History via Haar Wavelet)</td>
                       <td></td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>郭佳霖</td>
                       <td>社群網站使用者上線時段分析-以批踢踢為例</td>
                       <td>為例	(2014.6畢業)(102學年度)</td>
                   </tr>
                   <tr>
                       <td rowspan="2">99</td>
<!--                       <td></td>-->
                       <td>吳健瑋</td>
                       <td>利用 Hadoop 建立樣式歷史資料趨勢索引</td>
                       <td>(2014.6畢業)(102學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>許柏凱</td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                       <td rowspan="3">97</td>
<!--                       <td></td>-->
                       <td>施耀竣</td>
                       <td>分類架構模糊度研究-利用鄰近點亂度</td>
                       <td>(2010.6畢業)(98學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
                       <td>生物資訊所</td>
                       <td>黃進福</td>
                       <td>病毒分類研究-藉由基因體序列</td>
                       <td>(2011.6畢業)(99學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
                       <td>資訊工程所</td>
                       <td>Arie Budiansyah</td>
                       <td>Text Trend Analysis from Indonesia Newspaper</td>
                       <td>(2010.6畢業)(98學年度)(Indonesia)</td>
                   </tr>
                   <tr>
                       <td rowspan="2">96</td>
                       <td>電腦與通訊所</td>
                       <td>廖益緯</td>
                       <td>關鍵字之趨勢研究-藉由PubMed文獻</td>
                       <td>(2010.6畢業)(98學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
                       <td>資訊工程所</td>
                       <td>劉宣榮</td>
                       <td>中華民國專利趨勢查詢-藉由顯要事件歷史</td>
                       <td>(2010.6畢業)(98學年度)</td>
                   </tr>
                   <tr>
                       <td rowspan="3">95</td>
                       <td>資訊工程所</td>
                       <td>盧勇凱</td>
                       <td>病毒分類研究-藉由CDS序列</td>
                       <td>(2011.6畢業)(99學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
                       <td rowspan="5">生物資訊所</td>
                       <td>許瀚升</td>
                       <td>水稻T-DNA插入突變體右翼序列自動化比對系統之建立</td>
                       <td>(2008.6畢業)(96學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>魏子傑</td>
                       <td>癌症類別關連研究-藉由生物晶片分析</td>
                       <td></td>
                   </tr>
                   <tr>
                       <td>94</td>
<!--                       <td></td>-->
                       <td>沈晉億</td>
                       <td>古菌與甲烷代謝有關之獨特胺基酸序列的挖掘--藉由基因體比較</td>
                       <td>(2008.1畢業)(96學年度)</td>
                   </tr>
                   <tr>
                       <td rowspan="2">93</td>
<!--                       <td></td>-->
                       <td>張文福</td>
                       <td>古菌基因體相關於氧氣需求的研究</td>
                       <td>(2007.6畢業)(95學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>鄒佳芳</td>
                       <td></td>
                       <td></td>
                   </tr>
                   <tr>
                       <td rowspan="3">92</td>
                       <td rowspan="2">資訊工程所</td>
                       <td>曾冠燕</td>
                       <td>生物資訊文獻查詢-利用文件相似度</td>
                       <td>(2008.1畢業)(96學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
<!--                       <td></td>-->
                       <td>楊季剛</td>
                       <td>中文新聞相關性事件之挖掘-藉由Haar小波轉換</td>
                       <td>(2007.1畢業)(95學年度)</td>
                   </tr>
                   <tr>
<!--                       <td></td>-->
                       <td>生物資訊所</td>
                       <td>林炯璁</td>
                       <td>臨床微生物檢驗的資料挖掘研究－以偵測鮑氏不動桿菌之院內感染為例</td>
                       <td>(2006.6畢業)(94學年度)</td>
                   </tr>
                   </tbody>
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