<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/14
 * Time: 上午 10:33
 */

session_start();
include("function.php");
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
            <form action="education_add.php" method="POST">
                <div class="form-group">
                    <label for="event" style="font-size: 1.5em">事件:</label>
                    <input type="text" class="form-control" id="event" name="event">
                </div>
                <div class="form-group">
                    <label for="location" style="font-size: 1.5em">地點:</label>
                    <input type="text" class="form-control" id="location"  name="location">
                </div>
                <div class="form-group">
                    <label for="date" style="font-size: 1.5em">日期:</label>
                    <input type="text" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="other" style="font-size: 1.5em">其他:</label>
                    <input type="text" class="form-control" id="other" name="other">
                </div>

                <div class="form-group">
                    <label for="style">style</label>
                    <select class="form-control" id="style" name="style">
                        <option value="1">學歷</option>
                        <option value="2">經歷</option>
                        <option value="3">教學</option>
                        <option value="4">參加團體</option>
                        <option value="5">其他</option>
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