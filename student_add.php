<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/16
 * Time: 下午 06:10
 */

session_start();

include("mysql_connect.php");

$date = $_POST['date'];
$department = $_POST['department'];
$name = $_POST['name'];
$title= $_POST['title'];
$other = $_POST['other'];

//echo "ok";
//echo "<br/>";

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($date != null && $department != null && $name != null)
{
    //新增資料進資料庫語法
    $sql = "insert into `student` ( date, department, name, title, other  ) values ('$date', '$department', '$name', '$title' , '$other')";
    if(mysqli_query($conn,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_student.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_student.php>';
    }
}else{
//    echo $name."<br/>";
//    echo $author."<br/>";
//    echo $enterprise."<br/>";
//    echo $vol."<br/>";
//    echo $no."<br/>";
//    echo $date."<br/>";
//    echo $page."<br/>";
//    echo $runNumber."<br/>";
//    echo $style."<br/>";

}