<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/26
 * Time: 下午 09:26
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
            <?php
            varbar(6);
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
centerTitle(6);
?>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <p style="text-align: left"><a href="index.php">首頁</a></p>
    <br>
    <div class="row">
        <div class="col-sm-8">
            <div>
                <table class="table table-bordered">
<!--                    <thead>-->
<!--                    <tr>-->
<!--                        <th style="background-color:#6163ff"> English Learning</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
                    <tbody>
                    <tr>
                        <th style="background-color:#be6240"> English Learning</th>
                    </tr>
                    <tr>
                        <td><a href="https://www.liveabc.com/site/Online_Store/member/ok3.asp">LiveABC</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://mws.ust.hk/mw/account/login.php">My Words</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://wordneighbors.ust.hk/">Word Neighbors</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://egg.ust.hk/cl3/index.html">EGG ( English Grammar Guide)</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://www.ted.com/">TED (Technology, Entertainment, Design)</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://quod.lib.umich.edu/m/micase/">MICASE (Michigan Corpus of Academic Spoken English)</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://www.pbs.org/">PBS (Public Broadcasting Service)</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://hk.dictionary.yahoo.com/">Yahoo!字典</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://www.netspeak.org/">netspeak</a></td>
                    </tr>
                    <tr>
                        <th style="background-color:#8bb9b0"> 其他連結</th>
                    </tr>
                    <tr>
                        <td><a href="http://data.gov.tw/">政府資料開法平台</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://www.internationalgenome.org/">The 1000 genomes project</a></td>
                    </tr>
                    <tr>
                        <td><a href="ftp://ftp.ncbi.nih.gov/genomes/Viruses/">Viruses FTP</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://ictvdb.cumc.columbia.edu/">ICTVdB:The Universal Database of the International Committee on Taxonomy of Viruses</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://www.ncbi.nlm.nih.gov/Taxonomy/taxonomyhome.html/index.cgi?chapter=advisors">Contributors to the GenBank Taxonomy Database</a></td>
                    </tr>
                    <tr>
                        <td><a href="http://talk.ictvonline.org/files/ictv_documents/m/msl/1231/download.aspx">ICTV Master Species List 2009 - Version 7</a></td>
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