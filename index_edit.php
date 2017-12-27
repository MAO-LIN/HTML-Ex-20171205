<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/12/27
 * Time: 上午 07:51
 */
include("mysql_connect.php");
if($_SESSION['username'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $name = $_POST['name'];
    $university=$_POST['university'];
    $department=$_POST['department'];
    $position=$_POST['position'];
    $education=$_POST['education'];
    $office=$_POST['office'];
    $ext=$_POST['ext'];
    $email=$_POST['email'];
    $research=$_POST['research'];
    $other=$_POST['other'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM member_table where username='$id'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "帳號：<input type=\"text\" name=\"id\" value=\"$row[1]\" />(此項目無法修改) < br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"$row[2]\" /> <br>";
    echo "再一次輸入密碼：<input type=\"password\" name=\"pw2\" value=\"$row[2]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[3]\" /> <br>";
    echo "地址：<input type=\"text\" name=\"address\" value=\"$row[4]\" /> <br>";
    echo "備註：<textarea name=\"other\" cols=\"45\" rows=\"5\">$row[5]</textarea> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}