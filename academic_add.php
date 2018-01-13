<?php session_start(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/12
 * Time: 下午 10:53
 */
include("mysql_connect.php");

$title = $_POST['title'];
$number = $_POST['number'];
$date = $_POST['date'];
$money = $_POST['money'];
$position = $_POST['position'];
$other = $_POST['other'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($title != null && $number != null && $date != null && $position!=null)
{
    //新增資料進資料庫語法
    $sql = "insert into acadmid ( title, number, date, money, position , other) values ('$title', '$number', '$date' , '$money','$position' ,'$other')";
    if(mysqli_query($conn,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_academic.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=control_Panel_academic.php>';
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
    if($title==null){
        echo "名字 is null"."<br/>";
    }
    if($number==null){
        echo "作者 is null"."<br/>";
    }
    if($date==null){
        echo "單位 is null"."<br/>";
    }
    if($money==null){
        echo "日期 is null"."<br/>";
    }
    if($position==null){
        echo "流水號 is null"."<br/>";
    }
    if($other==null){
        echo "style is null"."<br/>";
    }
}