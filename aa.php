<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:11
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="max-width: 700px">
        <?php
        $ar=0;
        $ag=0;
        $ab=0;
        for($ar=0;$ar<=255;$ar+=25) {
            echo "<table width='700px'>";
            for ($ag = 0; $ag <= 255; $ag += 25) {
                echo "<tr>";
                for ($ab = 0; $ab <= 255; $ab += 25) {
                    echo "<td style='background-color: rgb($ar,$ag,$ab);color:white'>$ar,$ag,$ab</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
</div>
</body>
</html>
