<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/27
 * Time: 上午 07:51
 */
session_start();
include("mysql_connect.php");
if($_SESSION['id']!= null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $name = $_POST['name'];
    $university=$_POST['university'];
    $department=$_POST['department'];
    $position=$_POST['position'];
    $education=$_POST['education'];
    $office=$_POST['office'];
    $ext=$_POST['ext'];
    $email=$_POST['email'];
    $research=$_POST['research'];
    $other=$_POST['other'];
    //若以下$id直接用$_SESSION['username']將無法使用
    include("mysql_connect.php");
//    $sql="SELECT * FROM `Introduction` WHERE id = '1'";
//    $result=mysqli_query($conn,$sql);
//    $row=mysqli_fetch_row($result);
    if($name!=null&&$university!=null&&$department!=null&&$position!=null&&$education!=null&&$office!=null&&$email!=null&&$research!=null){
        $sql="SELECT * FROM `Introduction` WHERE id = '1'";
        $sql = "update `Introduction` set name='$name', university='$university', department='$department',
                  position ='$position', education='$education' , office='$office', ext='$ext' , email='$email',research='$research', other='$other' where id='1'";
//        $sql = "update `Introduction` set university = $university WHERE `id` = '1'";
//        $sql = "UPDATE `Introduction` SET id=1 university=$university WHERE id='1'";
//        $sql="UPDATE `Introduction` SET email = 'aaaa' WHERE id = '1'";
        if(mysqli_query($conn,$sql))
        {
            echo '修改成功!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
            echo '修改失敗!';
            echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }

    }else{
        echo " fail";
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}