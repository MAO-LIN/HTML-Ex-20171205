<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 10:08
 */
session_start();
include("mysql_connect.php");
$number = $_POST['number'];
if($_SESSION['id'] != null)
{
    //刪除資料庫資料語法
    $sql = "delete from acadmid where number='$number'";
    if(mysqli_query($conn,$sql))
    {
        echo '刪除成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
    }
    else
    {
        echo '刪除失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=academic.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>