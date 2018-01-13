<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/27
 * Time: 上午 07:51
 */
session_start();
include("mysql_connect.php");
if ($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_POST['no'];
    $title = $_POST['title'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $money = $_POST['money'];
    $position = $_POST['position'];
    $other = $_POST['other'];
//    echo"<h3>'$id'</h3>";
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
    if ($title != null && $number != null && $date != null && $position!=null) {
        $sql="SELECT * FROM `acadmid` WHERE id = '$id'";
        $sql = "update `acadmid` set title='$title' ,number='$number' ,other='$other' ,date='$date' ,money='$money' ,position='$position' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_academic.php>';
        } else {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_academic.php>';
        }

    } else {
        echo " fail";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}