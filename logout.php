<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2017/11/29
 * Time: 上午 06:50
 */
session_start()?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
unset($_SESSION['id']);
echo'登出中.....';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';

