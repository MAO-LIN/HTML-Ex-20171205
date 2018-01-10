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
                <ul class="nav navbar-nav">
                    <li clsee="action"><a data-toggle="tab" href="#home">個人資料<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a data-toggle="tab" href="#educateion">簡歷<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a data-toggle="tab" href="#academic">學術<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a data-toggle="tab" href="#writing">著作<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a data-toggle="tab" href="#student">學生<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                    <li ><a data-toggle="tab" href="#links">常用連結<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                </ul>
            </div>
<!--        </div>-->
    </nav>
    <?php
}