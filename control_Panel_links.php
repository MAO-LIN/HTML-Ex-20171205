<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/14
 * Time: 上午 11:40
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
        <span style="float: left;"><a href="control_Panel.php">控制台</a></span>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-2">
            <?php menu(6); ?>
        </div>
        <div class="col-sm-10">
            <div style="margin: 10px 10px 10px 10px ">
                <?php
                $sql = "SELECT * FROM `links`";
                $result = mysqli_query($conn, $sql);
                $total = mysqli_num_rows($result);
                ?>
                <div style="margin-bottom: 10px">
                    <form style="display: inline" action="links_add_form.php" method="POST">
                        <input type="hidden" name="no" <?php echo "value='$total'" ?>>
                        <button type="submit" class="btn btn-success btn-lg">新增</button>
                    </form>
                </div>
                <table class="table table-bordered" style="background-color: rgb(255,255,255)">
                    <tbody>
                    <tr>
                        <th style="background-color:#be6240;font-size: 1.3em"> English Learning</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM `links` WHERE style = '1' ";
                    $result = mysqli_query($conn, $sql);
                    $total = mysqli_num_rows($result);
                    for ($i = 0; $i < $total; $i++) {
                        $row = mysqli_fetch_row($result);
                        echo "<tr>";
                        echo "<td><a href='$row[2]'>$row[1]</a>";
                        ?>
                        <div style="float:right">
                            <form style="display: inline" action="links_edit_form.php" method="POST">
                                <?php echo "<input type='hidden' name='number' value='$row[0]' >" ?>
                                <button type="submit" class="btn btn-primary btn-md">修改</button>
                            </form>
                            <form style="display: inline" action="links_remove.php" method="POST">
                                <?php echo "<input type='hidden' name='number' value='$row[0]'>" ?>
                                <input type="submit" class="btn btn-danger btn-md" name="delkind" value="刪除"
                                       onClick="tfm_confirmLink('您真的確定要刪除嗎？');return document.MM_returnValue"/>
                            </form>
                        </div>
                        <?php
                        echo "</td></tr>";
                    }
                    ?>
                    <tr>
                        <th  style="background-color:#8bb9b0;font-size: 1.3em"> 其他連結</th>
                    </tr>
                    <?php
                    include("mysql_connect.php");
                    $sql = "SELECT * FROM `links` WHERE style = '2' ";
                    $result = mysqli_query($conn, $sql);
                    $total = mysqli_num_rows($result);
                    for ($i = 0; $i < $total; $i++) {
                        $row = mysqli_fetch_row($result);
                        echo "<tr>";
                        echo " <td><a href='$row[2]'>$row[1]</a>";
                        ?>
                        <div style="float:right">
                            <form style="display: inline" action="links_edit_form.php" method="POST">
                                <?php echo "<input type='hidden' name='number' value='$row[0]' >" ?>
                                <button type="submit" class="btn btn-primary btn-md">修改</button>
                            </form>
                            <form style="display: inline" action="links_remove.php" method="POST">
                                <?php echo "<input type='hidden' name='number' value='$row[0]'>" ?>
                                <input type="submit" class="btn btn-danger btn-md" name="delkind" value="刪除"
                                       onClick="tfm_confirmLink('您真的確定要刪除嗎？');return document.MM_returnValue"/>
                            </form>
                        </div>
                        <?php
                        echo "</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
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