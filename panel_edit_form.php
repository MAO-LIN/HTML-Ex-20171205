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
            $sql = "SELECT * FROM `Introduction` WHERE id = '1' ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_row($result);
            ?>
            <form action="index_edit.php" method="POST">
                <div class="form-group">
                    <label for="name" style="font-size: 1.5em">名字:</label>
                    <input type="text" class="form-control" id="name" name="name" <?php echo"value=$row[1]"?>>
                </div>
                <div class="form-group">
                    <label for="university"  style="font-size: 1.5em">大學:</label>
                    <input type="text" class="form-control" id="university"  name="university" <?php echo"value=$row[2]"?>>
                </div>
                <div class="form-group">
                    <label for="department"  style="font-size: 1.5em">學系:</label>
                    <input type="text" class="form-control" id="department" name="department" <?php echo"value=$row[3]"?>>
                </div>
                <div class="form-group">
                    <label for="position"  style="font-size: 1.5em">職位:</label>
                    <input type="text" class="form-control" id="position" name="position" <?php echo"value=$row[4]"?>>
                </div>
                <div class="form-group">
                    <label for="education"  style="font-size: 1.5em">學歷:</label>
                    <input type="text" class="form-control" id="education" name="education" <?php echo"value=$row[5]"?>>
                </div>
                <div class="form-group">
                    <label for="office"  style="font-size: 1.5em">辦公室:</label>
                    <input type="text" class="form-control" id="office" name="office" <?php echo"value=$row[6]"?>>
                </div>
                <div class="form-group">
                    <label for="ext"  style="font-size: 1.5em">分機:</label>
                    <input type="text" class="form-control" id="ext" name="ext" <?php echo"value=$row[7]"?>>
                </div>
                <div class="form-group">
                    <label for="email"  style="font-size: 1.5em">Email:</label>
                    <input type="text" class="form-control" id="email" name="email" <?php echo"value=$row[8]"?>>
                </div>
                <div class="form-group">
                    <label for="research"  style="font-size: 1.5em">研究領域:</label>
                    <input type="text" class="form-control" id="research" name="research" <?php echo"value=$row[9]"?>>
                </div>
                <div class="form-group">
                    <label for="other"  style="font-size: 1.5em">Other:</label>
                    <textarea class="form-control" id="other" name="other"><?php echo "$row[10]"?></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">更改</button>
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