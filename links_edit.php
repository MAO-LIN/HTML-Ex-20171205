<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/16
 * Time: 下午 07:01
 */
session_start();
include("mysql_connect.php");
if ($_SESSION['id'] != null) {
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id=$_POST['id'];

    $title = $_POST['title'];
    $link = $_POST['link'];
    $style = $_POST['style'];

//    echo"<h3>'$id'</h3>";
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
    if($title != null && $link != null && $style!=null) {
        $sql="SELECT * FROM `links` WHERE id = '$id'";
        $sql = "update `links` set title='$title' ,link='$link' ,style='$style' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_links.php>';
        } else {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_links.php>';
        }

    } else {
        echo " fail";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
