<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/16
 * Time: 下午 06:49
 */

session_start();
include("mysql_connect.php");
if ($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id=$_POST['id'];

    $date = $_POST['date'];
    $department = $_POST['department'];
    $name = $_POST['name'];
    $title= $_POST['title'];
    $other = $_POST['other'];

//    echo"<h3>'$id'</h3>";
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
    if($date != null && $department != null && $name != null) {
        $sql="SELECT * FROM `student` WHERE id = '$id'";
        $sql = "update `student` set date='$date' ,department='$department' ,name='$name' ,title='$title' ,other='$other'  WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_student.php>';
        } else {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_student.php>';
        }

    } else {
        echo " fail";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}