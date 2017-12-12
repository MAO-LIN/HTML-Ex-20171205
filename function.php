<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:51
 */
function varbar($flag){
    ?>
    <ul class="nav navbar-nav" id="menuBar">
        <li <?php if($flag==1)echo"class='active' "?>><a href="index.php">首頁</a></li>
        <li <?php if($flag==2)echo"class='active' "?>><a href="#">簡歷</a></li>
        <li <?php if($flag==3)echo"class='active' "?>><a href="#">學術</a></li>
        <li <?php if($flag==4)echo"class='active' "?>><a href="writing.php">著作</a></li>
        <li <?php if($flag==5)echo"class='active' "?>><a href="#">學生</a></li>
        <li <?php if($flag==6)echo"class='active' "?>><a href="#">常用連結</a></li>
    </ul>
    <?php
}

