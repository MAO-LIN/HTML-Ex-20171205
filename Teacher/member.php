<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:52
 */
session_start(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");
echo '<a href="logout.php">登出</a>  <br><br>';
//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['id'] != null)
{
    echo'yseseseseeeeeeeeeeeeeeefsdfsadf';
//    echo '<a href="register.php">新增</a>    ';
//    echo '<a href="update.php">修改</a>    ';
//    echo '<a href="delete.php">刪除</a>  <br><br>';
//
//    //將資料庫裡的所有會員資料顯示在畫面上
//    $sql="SELECT * FROM `User` where id = '$id'";
//    $result = mysqli_query($conn,$sql);
//    while($row = mysqli_fetch_row($result))
//    {
//        echo "$row[0] - 名字(帳號)：$row[1], " .
//            "電話：$row[4], email：$row[3]<br>";
//    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>