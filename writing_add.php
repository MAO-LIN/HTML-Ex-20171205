<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/12
 * Time: 下午 10:53
 */
include("mysql_connect.php");

$name = $_POST['name'];
$author = $_POST['author'];
$enterprise = $_POST['enterprise'];
$vol = $_POST['vol'];
$no = $_POST['no'];
$page = $_POST['page'];
$date = $_POST['date'];
$runNumber = $_POST['runNumber'];
//$style = $_POST['style'];
echo $name;
echo $author;
echo $style;
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
//if($name != null && $author != null && $enterprise != null && $date!=null&& $runNumber!=null)
//{
//    //新增資料進資料庫語法
//    $sql = "insert into writing ( name, author, enterprise, vol, no , date ,page ,runnumber,style) values ('$name', '$author', '$enterprise', '$vol' , '$no','$date' ,'$page' ,'$runNumber','$style')";
//    if(mysqli_query($conn,$sql))
//    {
//        echo '新增成功!';
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//    }
//    else
//    {
//        echo '新增失敗!';
//        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//    }
//}
//else
//{
//    echo '您無權限觀看此頁面!';
////    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
//}