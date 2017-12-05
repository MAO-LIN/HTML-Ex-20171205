<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:11
 */
$n=5;
$m=6;
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];
$rgb=$r.$g.$b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/new_test.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a><img src="Image/Asia_Logo.jpg" style="width:3.7em;padding: 0;margin: 0;" ></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">首頁</a></li>
                <li><a href="#">簡歷</a></li>
                <li><a href="#">學術</a></li>
                <li><a href="#">著作</a></li>
                <li><a href="#">學生</a></li>
                <li><a href="#">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!--<div class="jumbotron">-->
<!--<div class="container text-center">-->
<!--<h1>My Portfolio</h1>-->
<!--<p>Some text that represents "Me"...</p>-->
<!--</div>-->
<!--</div>-->
<div class="container-fluid text-center">
    <table class="table table-bordered table-hover">
    <?php
        for($i=1;$i<=$n;$i++){
            echo" <tbody><tr>";
            for($j=1;$j<=$m;$j++){
                echo "<td style='text-align: center'>".$i*$j."</td>";

            }
            echo"</tbody></tr>";
        }
    ?>
    </table>
</div>
<div class="container-fluid text-center">
    <table width="100px" border="4">
        <tr>
            <?php
            echo"<td height='100px' style='background-color:rgb( $r ,$g,$b)'></td>"
            ?>
        </tr>
    </table>
</div>
<div class="container-fluid text-center"> <?php echo $var ?></div>
<div class="container-fluid bg-3 text-center" style="margin:0px 10%">
    <br>
    <div class="row">
        <!--<div class="col-sm-1"></div>-->
        <div class="col-sm-12">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>學年度</th>
                    <th>系所</th>
                    <th>姓名</th>
                    <th>論文題目</th>
                    <th>備註</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>102</td>
                    <td>資訊工程所 (博士班)</td>
                    <td>Heri Wijayanto</td>
                    <td></td>
                    <td>(Indonesia)</td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>資訊工程所</td>
                    <td>陳彥棠</td>
                    <td>提升 Hadoop MapReduce 計算效能之研究-以抽取樣式歷史為例(Promoting the Computational Performance of Hadoop MapReduce for Pattern History Extraction)</td>
                    <td></td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>資訊工程所</td>
                    <td>蔣中凱</td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--<div class="col-sm-1"></div>-->
</div>
</div><br>

<footer class="container-fluid text-center">
    <p>powered by XiuLin @ Asia univ.2017</p>
</footer>

</body>
</html>

