<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/28
 * Time: 下午 08:54
 */

$serverName = "localhost";
$username = "105021058";
$password = "#zT6HwzNH";
$db_name='105021058';

// Create connection
$conn =@mysqli_connect($serverName, $username, $password , $db_name);

// Check connection
if (!$conn) {
    die("Connection failed");
}else {
    echo "Connected successfully";
}
mysqli_query("SET NAMES utf8");
