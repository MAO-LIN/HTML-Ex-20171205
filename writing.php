<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/6
 * Time: 上午 10:50
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
            varbar(4);
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
<div class="container text-center" style="padding: 0">
    <div style="max-height:400px ;overflow: hidden">
        <img src="Image/background2_reSize.jpg" width="100%">
    </div>
</div>
<!--<div class="container" style="padding: 0;background-color: rgb(255,255,255);text-align: left">-->
<!--    <p><a href="index.php">首頁</a></p>-->
<!--</div>-->
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <span style="float: left"><a href="index.php">首頁</a></span>
    <span style="float: left;padding-left: 3px;padding-right: 3px"> > </span>
    <span style="float: left;"><a href="writing.php">著作</a></span>
    <br/>
    <div class="row">
        <div class="col-sm-8">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">著作</a></li>
                        <?php
                        if($_SESSION['id']!=null) {
                            ?>

                            <li><a data-toggle="tab" href="#menu1">新增</a></li>
                            <?php
                        }
                        ?>

                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">

                        <?php
                            include("mysql_connect.php");
//                            $id=$_POST['id'];
//                            $pw=sha1($_POST['pwd']);
                            $sql="SELECT * FROM `writing`";
                            $result=mysqli_query($conn,$sql);
//                            $row=mysqli_fetch_row($result);
                            $total=mysqli_num_rows($result);
                            echo $row[0];
                            for($i=0;$i<$total;$i++){
                                $row=mysqli_fetch_row($result);
                                echo "<h3 style=\"font-size:0.4em ;text-align: left\">".($i+1)."</h3>" ;
                                echo "<h3 style=\"font-size:1em;font-weight:bold;text-align: left; border-bottom: solid;\">".$row[1]."</h3>";
                                echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[2].",".$row[6].",".$row[4].",".$row[5].",".$row[7].",".$row[8].",".$row[10]."</h3>";
                                echo "<h3 style=\"font-size:0.4em ;text-align: left\">".$row[3]."</h3>";
                                echo "<br>";
                            }
//                            if($id!=null&&$pw!=null&&$row[0]==$id&&$row[2]==$pw){
//                            $_SESSION['id'] = $id;
//                            echo'Login successfully'. '<br>';
//                            }
//                            else{
//                            echo'Login failed';
//                            }
                        ?>

                        </div>
                        <?php
                        if($_SESSION['id']!=null) {
                            ?>
                            <div id="menu1" class="tab-pane fade">
                                <form action="writing_add.php" method="POST">
                                    <div class="form-group">
                                        <label for="name">論文名稱:</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="author">作者:</label>
                                        <input type="text" class="form-control" id="author"  name="author">
                                    </div>
                                    <div class="form-group">
                                        <label for="enterprise">單位:</label>
                                        <input type="text" class="form-control" id="enterprise" name="enterprise">
                                    </div>
                                    <div class="form-group">
                                        <label for="vol">Vol:</label>
                                        <input type="text" class="form-control" id="vol" name="vol">
                                    </div>
                                    <div class="form-group">
                                        <label for="no">No:</label>
                                        <input type="text" class="form-control" id="no" name="no">
                                    </div>
                                    <div class="form-group">
                                        <label for="page">頁數:</label>
                                        <input type="text" class="form-control" id="page" name="page">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">日期:</label>
                                        <input type="text" class="form-control" id="date" name="date">
                                    </div>
                                    <div class="form-group">
                                        <label for="runNumber">流水號:</label>
                                        <input type="text" class="form-control" id="runNumber" name="runNumber">
                                    </div>

                                    <div class="form-group">
                                        <label for="style">style</label>
                                        <select class="form-control" id="style" name="style">
                                            <option value="1">Journal</option>
                                            <option value="2">International Conference</option>
                                            <option value="3">Domestic Conference</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-md">新增</button>
                                </form>
                            </div>
                            <?php
                             }
                             ?>
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
<!--<div class="container text-center" style="background-color: rgb(255,255,255);font-size: 1.4em">-->
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

