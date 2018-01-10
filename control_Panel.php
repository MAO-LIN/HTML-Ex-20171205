<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/9
 * Time: 下午 09:37
 */
session_start();
include ("function.php");
//include ("menufunction.php");
include ("control_function.php");
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
    <link rel="stylesheet" href="css/control_Panel.css">
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
            varbar(7);
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
        <div class="col-sm-2">
           <?php menu(1);?>
        </div>
        <div class="col-sm-10">
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active" style="background-color: white;margin: 10px 10px 10px">
                    <?php
                    $sql="SELECT * FROM `Introduction` WHERE id = '1' ";
                    $result=mysqli_query($conn,$sql);
                    $row=mysqli_fetch_row($result);
                    ?>
                    <h1><?php echo"$row[1]"?></h1>
                    <h2><?php echo"$row[2]"?> <?php echo"$row[3]"?> <?php echo"$row[4]"?></h2>
                    <br>
                    <h3>學歷： <?php echo"$row[5]"?></h3>
                    <h3>辦公室： <?php echo"$row[6]"?></h3>
                    <h3>分機： <?php echo"$row[7]"?></h3>
                    <h3>E-mail： <?php echo"$row[8]"?></h3>
                    <h3>研究領域：</h3>
                    <h3><?php echo"$row[9]"?></h3>
                    <?php
                    if($row[10]!=null){
                        echo " <h3>其他：</h3> ";
                        echo "<h3>$row[10]</h3>";
                    }
                    ?>
                </div>
                <div id="academic" class="tab-pane fade" style="background-color: white;margin: 10px 10px 10px">
<!--                    <h3><a href="#academic_add">新增</a></h3>-->
<!--                    <h3><a href="#academic_edit">修改</a></h3>-->
<!--                    <h3><a href="#academic_remove">刪除</a></h3>-->
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
<!--                    <div id="academic_add" class="tab-pane fade" style="background-color: white;margin: 10px 10px 10px">-->
<!--                            <p>sadsadas</p>-->
<!--                    </div>-->
<!--                    <div id="academic_edit" class="tab-pane fade" style="background-color: white;margin: 10px 10px 10px">-->
<!--                        <p>edit</p>-->
<!--                    </div>-->
<!--                    <div id="academic_remove" class="tab-pane fade" style="background-color: white;margin: 10px 10px 10px">-->
<!--                        <p>remove</p>-->
<!--                    </div>-->

                </div>

                <div id="writing" class="tab-pane fade" style="background-color: white;margin: 10px 10px 10px">
                    <h3><a href="#writing_add">新增</a></h3>
                    <h3><a href="#writing_edit">修改</a></h3>
                    <h3><a href="#writing_remove">刪除</a></h3>
                    <?php
                    include("mysql_connect.php");
                    $sql="SELECT * FROM `writing`";
                    $result=mysqli_query($conn,$sql);
                    $total=mysqli_num_rows($result);
//                    echo $row[0];
                    for($i=0;$i<$total;$i++){
                        $row=mysqli_fetch_row($result);
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".($i+1)."</h3>" ;
                        echo "<h3 style=\"font-size:1em;font-weight:bold;text-align: left; border-bottom: solid;\">".$row[1]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[2].",".$row[6].",".$row[4].",".$row[5].",".$row[7].",".$row[8].",".$row[10]."</h3>";
                        echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[3]."</h3>";
                        echo "<br>";
                    }
                    ?>
                </div>
            </div>
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