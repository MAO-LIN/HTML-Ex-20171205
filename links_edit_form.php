<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/16
 * Time: 下午 07:01
 */
session_start();
include("function.php");
include("control_function.php");
include("mysql_connect.php");
$no=$_POST['number'];
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
    <script type="text/javascript" src="js/control_Panel.js"></script>
    <style>
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>
<a id="top"></a>
<div class="container bg-3 text-center" style="background-color: rgb(119,178,255);">
    <div class="panel_background" style=";text-align: center">
        <div style="margin: 0 0 0 0;padding: 10px 10px 10px 10px;background-color: ;">
            <?php
            $sql = "SELECT * FROM `links` WHERE id = '$no' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);
            ?>
            <form action="links_edit.php" method="POST">
                <input type="hidden" name="id" <?php echo"value='$no'"?>>
                <div class="form-group">
                    <label for="location" style="font-size: 1.5em">連結說明:</label>
                    <input type="text" class="form-control" id="title"  name="title" <?php echo"value='$row[1]''"?>>
                </div>
                <div class="form-group">
                    <label for="date" style="font-size: 1.5em">連結網址:</label>
                    <input type="text" class="form-control" id="link" name="link" <?php echo"value='$row[2]''"?>>
                </div>

                <div class="form-group">
                    <label for="style" style="font-size: 1.5em">分類</label>
                    <select class="form-control" id="style" name="style">
                        <option value="1" <?php if($row[3]==1) echo"selected"?>>English Learning</option>
                        <option value="2" <?php if($row[3]==2) echo"selected"?>>其他連結</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">修改</button>
            </form>
        </div>
    </div>
</div>
<div class="container text-center" id="footer" style="background-color: white">
    <p><a href="#top">點我回頂端</a></p>
    <p> Lin @Asia University 2017</p>
</div>
</body>
</html>