<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/13
 * Time: 下午 02:13
 */

session_start();
include("function.php");
include("control_function.php");
include("mysql_connect.php");
$no=$_POST['no'];
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
            <h3 style="text-align: left">共 <?php echo "$no" ?> 筆資料</h3>
            <form action="writing_add.php" method="POST">
                <div class="form-group">
                    <label for="name" style="font-size: 1.5em">論文名稱:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="author" style="font-size: 1.5em">作者:</label>
                    <input type="text" class="form-control" id="author"  name="author">
                </div>
                <div class="form-group">
                    <label for="enterprise" style="font-size: 1.5em">單位:</label>
                    <input type="text" class="form-control" id="enterprise" name="enterprise">
                </div>
                <div class="form-group">
                    <label for="vol" style="font-size: 1.5em">Vol:</label>
                    <input type="text" class="form-control" id="vol" name="vol">
                </div>
                <div class="form-group">
                    <label for="no" style="font-size: 1.5em">No:</label>
                    <input type="text" class="form-control" id="no" name="no">
                </div>
                <div class="form-group">
                    <label for="page" style="font-size: 1.5em">頁數:</label>
                    <input type="text" class="form-control" id="page" name="page">
                </div>
                <div class="form-group">
                    <label for="date" style="font-size: 1.5em">日期:</label>
                    <input type="text" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="runNumber" style="font-size: 1.5em">流水號:</label>
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
                <button type="submit" class="btn btn-primary btn-lg">新增</button>
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