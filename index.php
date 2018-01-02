<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/29
 * Time: 上午 06:38
 */
session_start();
include ("function.php");
include ("menufunction.php");
?>
<!DOCTYPE html>
<meta charset="utf-8">
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
                varbar(1);
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
    centerTitle(1);
?>
<div class="container bg-3 text-center" style="background-color: rgb(228,228,228)">
    <p style="text-align: left"><a href="index.php">首頁</a></p>
<!--    <br>-->
    <div class="row">
        <div class="col-sm-8">
            <?php
            if($_SESSION['id']!=null) {
            ?>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">簡介</a></li>
                    <li><a data-toggle="tab" href="#menu1">修改</a></li>
            </ul>
                <?php
            }
            ?>
            <?php
            if($_SESSION['id']!=null) {
            include("mysql_connect.php");
            $sql="SELECT * FROM `Introduction` WHERE id = '1' ";
            $result=mysqli_query($conn,$sql);
//            mysqli_set_charset($conn,'utf8');
            $row=mysqli_fetch_row($result);
//            echo $row[1];
//            echo "<br>";
//            echo $row[2];
//            echo "<br>";
//            echo $row[3];
//            echo "<br>";
//            echo $row[4];
//            echo "<br>";
//            echo $row[5];
//            echo "<br>";
//            echo $row[6];
//            echo "<br>";
//            echo $row[7];
//            echo "<br>";
//            echo $row[8];
//            echo "<br>";
//            echo $row[9];
//            echo "<br>";
//            echo $row[10];
            ?>
            <div class="tab-content">
            <div id="menu1" class="tab-pane fade">
                    <form action="index_edit.php" method="POST">
                        <div class="form-group">
                            <label for="name">名字:</label>
                           <input type="text" class="form-control" id="name" name="name" <?php echo"value=$row[1]"?>>
                        </div>
                        <div class="form-group">
                            <label for="university">大學:</label>
                            <input type="text" class="form-control" id="university"  name="university" <?php echo"value=$row[2]"?>>
                        </div>
                        <div class="form-group">
                            <label for="department">學系:</label>
                            <input type="text" class="form-control" id="department" name="department" <?php echo"value=$row[3]"?>>
                        </div>
                        <div class="form-group">
                            <label for="position">職位:</label>
                            <input type="text" class="form-control" id="position" name="position" <?php echo"value=$row[4]"?>>
                        </div>
                        <div class="form-group">
                            <label for="education">學歷:</label>
                            <input type="text" class="form-control" id="education" name="education" <?php echo"value=$row[5]"?>>
                        </div>
                        <div class="form-group">
                            <label for="office">辦公室:</label>
                            <input type="text" class="form-control" id="office" name="office" <?php echo"value=$row[6]"?>>
                        </div>
                        <div class="form-group">
                            <label for="ext">分機:</label>
                            <input type="text" class="form-control" id="ext" name="ext" <?php echo"value=$row[7]"?>>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" id="email" name="email" <?php echo"value=$row[8]"?>>
                        </div>
                        <div class="form-group">
                            <label for="research">研究領域:</label>
                            <input type="text" class="form-control" id="research" name="research" <?php echo"value=$row[9]"?>>
                        </div>
                        <div class="form-group">
                            <label for="other">Other:</label>
                            <input type="text" class="form-control" id="other" name="other" <?php echo"value=$row[10]"?>>
                        </div>
                        <button type="submit" class="btn btn-primary btn-md">更改</button>
                    </form>
            </div>
            <div id="home" class="tab-pane fade in active">
                <?php
                }
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


<!--                <div class="testImage" style="width:50px;height: 50px">-->
<!---->
<!--                </div>-->
<!--                <button onclick="aa()" class="btn btn-primary btn-md">點我阿</button>-->
<!--                <script>-->
<!--                    function aa() {-->
<!--                        var hello=window.prompt("aa");-->
<!--                        document.createElement("標籤")-->
<!--                  document.write(hello);-->
<!---->
<!--                    }-->
<!--               </script>-->
                <?php if($_SESSION['id']!=null){?>
                    </div>
            </div >
               <?php }?>
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

