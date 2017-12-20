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
$style = $_POST['style'];
$style1=0;
if($style==1){
    $style1="Journal";
}elseif ($style==2){
    $style1="International Conference";
}elseif ($style==3){
    $style1="Domestic Conference";
}
//echo "ok";
//echo "<br/>";

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($name != null && $author != null && $enterprise != null && $date!=null&& $runNumber!=null&& $style1!=null)
{
    //新增資料進資料庫語法
    $sql = "insert into writing ( name, author, enterprise, vol, no , date ,page ,runnumber,style,style1) values ('$name', '$author', '$enterprise', '$vol' , '$no','$date' ,'$page' ,'$runNumber','$style','$style1')";
    if(mysqli_query($conn,$sql))
    {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=writing.php>';
    }
    else
    {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=writing.php>';
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