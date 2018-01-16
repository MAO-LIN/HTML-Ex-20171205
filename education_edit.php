<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/14
 * Time: 上午 11:15
 */
session_start();
include("mysql_connect.php");
if ($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id=$_POST['id'];

    $event = $_POST['event'];
    $location= $_POST['location'];
    $date = $_POST['date'];
    $other = $_POST['other'];
    $style = $_POST['style'];
    $style1=0;
    if($style==1){
        $style1="經歷";
    }elseif ($style==2){
        $style1="學歷";
    }elseif ($style==3){
        $style1="教學";
    }elseif ($style==4){
        $style1="參加團體";
    }elseif ($style==5){
        $style1="其他";
    }
//    echo"<h3>'$id'</h3>";
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
    if($event != null && $date != null && $style!=null) {
        $sql="SELECT * FROM `education` WHERE id = '$id'";
        $sql = "update `education` set event='$event' ,location='$location' ,date='$date' ,other='$other' ,style='$style' ,style1='$style1' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_education.php>';
        } else {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_education.php>';
        }

    } else {
        echo " fail";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}