<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:51
 */
session_start();
function varbar($flag){
    ?>
    <ul class="nav navbar-nav" id="menuBar">
        <li <?php if($flag==1)echo"class='active menuBarAction'"?>><a href="index.php">首頁</a></li>
        <li <?php if($flag==2)echo"class='active menuBarAction' "?>><a href="education.php">簡歷</a></li>
        <li <?php if($flag==3)echo"class='active menuBarAction' "?>><a href="academic.php">學術</a></li>
        <li <?php if($flag==4)echo"class='active menuBarAction' "?>><a href="writing.php">著作</a></li>
        <li <?php if($flag==5)echo"class='active menuBarAction' "?>><a href="student.php">學生</a></li>
        <li <?php if($flag==6)echo"class='active menuBarAction' "?>><a href="links.php">常用連結</a></li>
<!--        --><?php //if($_SESSION('id')!=null){?>
        <!--        <li --><?php //if($flag==7)echo"class='active menuBarAction' "?><!-->-->
        <!--            <a href="control_function.php">控制台</a></li>-->
        <!--        --><?php //}?>
    </ul>
    <?php
}
function centerTitle($flag){
    ?>
<!--    <div  class="container text-center" style="background-color: rgb(164,151,142);padding: 1px">-->
<!--        <h2>-->
<!--            --><?php //if($flag==1)echo "首頁"?>
<!--            --><?php //if($flag==2)echo "簡歷"?>
<!--            --><?php //if($flag==3)echo "學術"?>
<!--            --><?php //if($flag==4)echo "著作"?>
<!--            --><?php //if($flag==5)echo "學生"?>
<!--            --><?php //if($flag==6)echo "常用連結"?>
<!--        </h2>-->
<!--    </div>-->
<?php
}

