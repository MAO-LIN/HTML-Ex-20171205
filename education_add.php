<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/14
 * Time: 上午 10:32
 */
session_start();

include("mysql_connect.php");

$event = $_POST['event'];
$location = $_POST['location'];
$date = $_POST['date'];
$other = $_POST['other'];
$style = $_POST['style'];
$style1=0;
if($style==1){
    $style1="經歷";
}elseif ($style==2){
    $style1="學歷";
}elseif ($style==3){
    $style1="教學";
}elseif ($style==4){
    $style1="參加團體";
}elseif ($style==5){
    $style1="其他";
}
//echo "ok";
//echo "<br/>";

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($event != null && $location != null && $date != null && $date!=null&& $style!=null)
{
    //新增資料進資料庫語法
    $sql = "insert into `education` ( event, location, date, other, style , style1 ) values ('$event', '$location', '$date', '$other' , '$style','$style1')";
    if(mysqli_query($conn,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_education.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_education.php>';
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
    if($name==null){
        echo "名字 is null"."<br/>";
    }
    if($author==null){
        echo "作者 is null"."<br/>";
    }
    if($enterprise==null){
        echo "單位 is null"."<br/>";
    }
    if($date==null){
        echo "日期 is null"."<br/>";
    }
    if($runNumber==null){
        echo "流水號 is null"."<br/>";
    }
    if($style1==null){
        echo "style is null"."<br/>";
    }
}