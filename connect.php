<?php session_start();?>
<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/28
 * Time: 下午 09:52
 */
include("mysql_connect.php");
$id=$_POST['id'];
$pw=sha1($_POST['pwd']);
$sql="SELECT * FROM `User` where id = '$id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
$ip=get_client_ip();
if($id!=null&&$pw!=null&&$row[0]==$id&&$row[2]==$pw){
    $_SESSION['id'] = $id;
    echo'Login successfully'. '<br>';
//    echo $_SESSION['id']. '<br>';
//    echo $id. '<br>';
//    echo $pw. '<br>';
    echo date("h:i:sa");
//    $sql = "insert into `Log` ( ip) values ('$ip')";
//    $result=mysqli_query($conn,$sql);
    require_once('mailertest.php');
    echo '<meta http-equiv=REFRESH CONTENT=1;url=control_Panel.php>';
}
else{
    echo'Login failed';
    echo '<meta http-equiv=REFRESH CONTENT=3;url=login.html>';
}
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
