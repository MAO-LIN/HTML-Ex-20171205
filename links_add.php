<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/16
 * Time: 下午 07:00
 */

session_start();

include("mysql_connect.php");

$title = $_POST['title'];
$link = $_POST['link'];
$style = $_POST['style'];

//echo "ok";
//echo "<br/>";

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($title != null && $link != null && $style != null )
{
    //新增資料進資料庫語法
    $sql = "insert into `links` ( title, link, style ) values ('$title', '$link', '$style')";
    if(mysqli_query($conn,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_links.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_links.php>';
    }
}else{

}