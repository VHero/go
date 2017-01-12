<!DOCTYPE html>



<?php

$password = "qwe"; // 这里是密码
$p = "123";
if (isset($_COOKIE["isview"]) and $_COOKIE["isview"] == $password) {
    $isview = true;
} else {
    if (isset($_POST["pwd"])) {
        if ($_POST["pwd"] == $password) {
            setcookie("isview", $_POST["pwd"], time() + 0.001);
            $isview = true;
        } else {
            $p = (empty($_POST["pwd"])) ? "需要密码才能查看，请输入密码。" : "密码不正确，请重新输入。";
        }
    } else {
        $isview = false;
        $p = "请输入密码查看。<br>如需密码请联系QQ1204763805";
    }
}
if ($isview) {
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        h2 {
            font-weight: bold;
        }
    </style>
</head>


<h2 class="text-center">案例上传</h2>
<form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="

.php" class="form-horizontal">
    <div class="form-group">
        <div class="col-md-12">
            <label for="upfile">上传案例截图：</label>
            <input type="file" name="upfile" id="fileField" class="" />
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-md-1 control-label">姓名:</label>
        <div class="col-md-11">
            <input type="email" class="form-control" id="inputEmail3" placeholder="姓名">

        </div>

        <body>
        <div class="container">
            <h2 class="text-center">任务截屏</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="uploadAction.php" >
                <div class="form-group">
                    <label for="upfile">上传任务截图：</label>
                    <input type="file" name="upfile" id="fileField" />
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <input type="submit" name="submit" value="提交" class="btn-primary btn pull-right" />
                    </div>
                </div>
            </form>
            <h2 class="text-center">案例上传</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="caseAction.php" >
                <div class="form-group">
                    <div class="clearfix">
                        <label for="upfile">上传案例截图：</label>
                        <input type="file" name="upfile" id="fileField" class="" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="upfile">姓名:</label>
                    <input type="text" name="name" placeholder="姓名" class="form-control">
                </div>
                <div class="form-group">
                    <div class="">
                        <textarea type="text" class="form-control" name="contents" placeholder="评价内容" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <input type="submit" name="submit" value="提交" class="btn-primary btn pull-right" />
                    </div>
                </div>
            </form>
            <h2 class="text-center">广告图片</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="bannerAction.php">
                <div class="form-group">
                    <label for="upfile">上传广告图片：</label>
                    <input type="file" name="upfile" id="fileField" />
                </div>
                <div class="form-group">
                    <label for="upfile">图片alt关键字:</label>
                    <input type="text" name="keyword" placeholder="图片alt关键字" class="form-control">
                </div>
                <div class="form-group">
                    <div class="clearfix">
                        <input type="submit" name="submit" value="提交" class="btn-primary btn pull-right" />
                    </div>
                </div>
            </form>
            <h2 class="text-center">团队成员</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="teacherAction.php">
                <div class="form-group">
                    <label for="upfile">上传头像：</label>
                    <input type="file" name="upfile" id="fileField" />
                </div>
                <div class="form-group">
                    <label for="upfile">姓名:</label>
                    <input type="text" name="name" placeholder="姓名" class="form-control">
                </div>
                <div class="form-group">
                    <label>分数:</label>
                    <input type="text" name="score" class="form-control" placeholder="分数">
                </div>
                <div class="form-group">
                    <!-- <p><label>姓名:</label><input type="text" name="name"></p> -->
                    <textarea class="form-control" placeholder="自我介绍" rows="3" name="introduction"></textarea>

                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="教育背景" rows="3" name="educationbg"></textarea>

                </div>

                <div class="form-group">
                    <textarea class="form-control" placeholder="擅长领域" rows="3" name="speciality"></textarea>

                </div>



                <div class="form-group">
                    <div class="clearfix">
                        <input type="submit" name="submit" value="提交" class="btn btn-primary pull-right" />
                    </div>
                </div>
            </form>
            <h2 class="text-center">用户评价</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="commentAction.php">
                <div class="form-group">
                    <label for="upfile">上传头像：</label>
                    <input type="file" name="upfile" id="fileField" />
                </div>
                <div class="form-group">
                    <label for="upfile">姓名:</label>
                    <input type="text" name="name" placeholder="姓名" class="form-control">
                </div>
                <div class="form-group">

                    <textarea class="form-control" placeholder="用户评价" name="comment"></textarea>
                </div>

                <div class="form-group">
                    <div class="clearfix">
                        <input type="submit" name="submit" value="提交" class="btn btn-primary pull-right" />
                    </div>
                </div>
            </form>

            <h2 class="text-center">资源分享</h2>
            <form id="upfile" name="upform" enctype="multipart/form-data" method="post" action="resourceShare.php">
                <div class="form-group">
                    <label for="upfile">上传学生图片：</label>
                    <input type="file" name="upfile" id="fileField"/>
                </div>
                <div class="form-group">
                    <p><label>标题</label><input type="text" name="title"></p>
                    <p><label>作者</label><input type="text" name="author"></p>
                    <textarea class="form-control" placeholder="正文..." name="article"></textarea>
                </div>
                <input type="submit" name="submit" value="提交" class="btn btn-primary" />

            </form>
        </div>
        </body>

</html>



<?php
} else { ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>请输入登录密码</title>
    <!--[if lt IE 6]>
    <style type="text/css">
        .z3_ie_fix{
            float:left;
        }
    </style>
    <![endif]-->
    <style type="text/css">
        <!--
        body {
            background: none;
        }

        .passport {
            border: 1px solid red;
            background-color: #FFFFCC;
            width: 400px;
            height: 100px;
            position: absolute;
            left: 49.9%;
            top: 49.9%;
            margin-left: -200px;
            margin-top: -55px;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
            color: #746A6A;
        }
        -->
    </style>
    <head/>
<body>
<div class="passport">
    <div style="padding-top: 20px;">
        <form action="" method="post" style="margin: 0px;">
            输入查看密码 <input type="password" name="pwd" /> <input type="submit"
                                                               value="查看" />
        </form>
        <?php
        echo $p; ?>
    </div>
</div>
<?php
} ?>








