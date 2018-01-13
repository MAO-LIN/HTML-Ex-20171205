<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/13
 * Time: 下午 08:21
 */
session_start();
include("mysql_connect.php");
$number = $_POST['number'];
//$academic_id = $_POST['id'];
//echo $aaa;
if($_SESSION['id'])
{
    //刪除資料庫資料語法
    $sql = "delete from writing where id='$number'";
    if(mysqli_query($conn,$sql) && $number!=null)
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_writing.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_writing.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}