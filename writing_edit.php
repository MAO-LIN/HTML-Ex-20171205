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
    $id=$_POST['id'];

    $name = $_POST['name'];
    $author = $_POST['author'];
    $enterprise = $_POST['enterprise'];
    $vol = $_POST['vol'];
    $no = $_POST['no'];
    $page = $_POST['page'];
    $date = $_POST['date'];
    $runNumber = $_POST['runNumber'];
    $style = $_POST['style'];
    $style1=0;
    if($style==1){
        $style1="Journal";
    }elseif ($style==2){
        $style1="International Conference";
    }elseif ($style==3){
        $style1="Domestic Conference";
    }
//    echo"<h3>'$id'</h3>";
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
    if($name != null && $author != null && $enterprise != null && $date!=null&& $runNumber!=null&& $style1!=null) {
        $sql="SELECT * FROM `writing` WHERE id = '$id'";
        $sql = "update `writing` set name='$name' ,author='$author' ,enterprise='$enterprise' ,vol='$vol' ,no='$no' ,page='$page',date='$date',runNumber='$runNumber',style='$style',style1='$style1' WHERE id = '$id'";
        if (mysqli_query($conn, $sql)) {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_writing.php>';
        } else {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_writing.php>';
        }

    } else {
        echo " fail";
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}