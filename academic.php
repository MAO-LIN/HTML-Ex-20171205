<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/26
 * Time: 下午 11:57
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
            varbar(3);
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
centerTitle(3);
?>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <p style="text-align: left"><a href="index.php">首頁</a></p>
    <!--    <br>-->
    <div class="row">
        <div class="col-sm-8">
            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#home">學術</a></li>
                    <?php
                    if($_SESSION['id']!=null) {
                        ?>
                        <li><a data-toggle="tab" href="#add">新增</a></li>
                        <li><a data-toggle="tab" href="#edit">修改</a></li>
                        <li><a data-toggle="tab" href="#remove">刪除</a></li>
                        <?php
                    }
                    ?>
                </ul>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                <table class="table table-bordered">
                    <tbody>
                    <?php
                    include("mysql_connect.php");
                    $sql="SELECT * FROM `acadmid`";
                    $result=mysqli_query($conn,$sql);
                    $total=mysqli_num_rows($result);
                    for($i=0;$i<$total;$i++){
                        $row=mysqli_fetch_row($result);
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".($i+1)."</h3>" ;
                        echo "<h3 style=\"font-size:1em;font-weight:bold;text-align: left; border-bottom: solid;\">".$row[0]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[1].",".$row[2]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[2]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[3]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[4]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[5]."</h3>";
                        echo "<br>";
                    }
                    ?>
<!--                    <tr>-->
<!--                        <th style="background-color:#be6240"> 參考期刊</th>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.editorialmanager.com/dami/">Data Mining and Knowledge Discovery (SCI) </a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.elsevier.com/wps/find/journaldescription.cws_home/939/description#description">IEEE Transactions on Cloud Computing IEEE Transactions on Cloud Computing (TCC)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.siam.org/journals/sisc.php">SIAM JOURNAL ON SCIENTIFIC COMPUTING(2012,SCI, 12/247,IF:1.949 )</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.journalofcloudcomputing.com/">Journal of Cloud Computing:</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.hindawi.com/journals/tswj/">The Scientific World Journal</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://grid.chu.edu.tw/SI/FGCS/">Future Generation Computer Systems</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.blackwellpublishing.com/journal.asp?ref=0824-7935&site=1">Computational Intelligence(SCI)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://bioinformatics.oupjournals.org/">Bioinformatics</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.journals.elsevier.com/information-systems/">Information Systems (SCI, Impact Factor: 1.595 )</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.elsevier.com/inca/publications/store/2/4/4/index.htt">Information Processing & Management ( EI, SCI Expanded)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.springer.com/computer/database+management+&+information+retrieval/journal/10791">INFORMATION RETRIEVAL(SCI Expanded)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.interscience.wiley.com/jpages/0038-0644/">Software - Practice & Experience (SCI Expanded)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://talip.acm.org/">Transactions on Asian Language Information Processing (TALIP)</a></td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td><a href="http://www.ksi.edu/seke/cpol.html">Computer Processing of Oriental Languages(CPOL)</a></td>-->
<!--                    </tr>-->
                    </tbody>
                </table>
                    </div>
                    <div id="add" class="tab-pane fade">
<!--                        --><?php
//                        if($_SESSION['id']!=null) {
//                            ?>
                                <form action="add.php" method="POST">
                                    <div class="form-group">
                                        <label for="title">計畫名稱:</label>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="number">計畫編號:</label>
                                        <input type="text" class="form-control" id="number"  name="number">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">計畫執行起迄:</label>
                                        <input type="text" class="form-control" id="date" name="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="money">核定金額:</label>
                                        <input type="text" class="form-control" id="money" name="money">
                                    </div>
                                    <div class="form-group">
                                        <label for="position">擔任職務:</label>
                                        <input type="text" class="form-control" id="position" name="position">
                                    </div>
                                    <div class="form-group">
                                        <label for="other">其他:</label>
                                        <input type="text" class="form-control" id="other" name="other">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md">新增</button>
                                </form>
<!--                            --><?php
//                        }
//                        ?>
                    </div>
                </div>
                <div id="edit" class="tab-pane fade">
                </div>
                <div id="remove" class="tab-pane fade">
                </div>
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