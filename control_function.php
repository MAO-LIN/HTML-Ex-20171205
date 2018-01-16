<?php
/**
 * Created by PhpStorm.
 * User: Saber
 * Date: 2018/1/9
 * Time: 下午 10:00
 */
function menu($flag){
    ?>
    <nav class="navbar navbar-default sidebar" role="navigation">
        <div class="container-fluid" style="max-width: 1200px">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                <ul class="nav navbar-nav" style="font-size: 1.6em">
                    <li <?php if($flag==1) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a href="control_Panel.php">個人資料<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                    <li <?php if($flag==2) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a href="control_Panel_education.php">簡歷<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list-alt"></span></a></li>
                    <li <?php if($flag==3) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a href="control_Panel_academic.php">學術<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pencil"></span></a></li>
                    <li <?php if($flag==4) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a  href="control_Panel_writing.php">著作<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-book"></span></a></li>
                    <li <?php if($flag==5) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a  href="control_Panel_student.php">學生<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li <?php if($flag==6) echo"style='background-color: rgba(154,154,154,0.5);'"; ?>><a href="control_Panel_links.php">常用連結<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-pushpin"></span></a></li>
                </ul>
            </div>
<!--        </div>-->
    </nav>
    <?php
}
