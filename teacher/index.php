<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>顶尖团队</title>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <?php
        include '../function.php';
        include "../header.php";
    ?>
<div class="page-banenr  teacher-page-bg">
    <div class="container teacher-description">
        <h3>顶尖团队</h3>
        <p>拥有数百名专家教员</p>
        <p>24小时专业客服</p>
    </div>
</div>


<section class="teacher">
    <div class="container">
        <div class="row"  id="teacher0">



        </div>

    </div>
</section>



<div class="container">

    <pre class="piginationMessage">
                        第 <span id="currentPage"></span> 页          每页显示 <span id="pageSize"></span> 条          总共 <span id="totalCount"></span> 条信息
                    </pre>

    <nav class="teacher-pagination">
        <ul class="pager">
            <li><a href="#" id="prevPage">上一页</a></li>
            <li><a href="#" id="nextPage">下一页</a></li>
        </ul>
    </nav>
</div>


<footer>
    <div class="container">
        <div class="col-md-10">
            <div class="col-md-5 text-left">
                <h3 class="foot-logo">上学Logo</h3>
                <p>上课帮为您提供优质的论文辅导服务。上课帮会根据您的要求安排相关科目的辅导老师，在约定的截止时间内将任务完成。上课帮为您提供论文提供免费的修改服务，以确保最终作品符合您的预期。同时，上课帮免费赠送您Turnitin 检测，确保万无一失。</p>

                <a href="" class="btn btn-primary col-md-8 col-xs-10 col-xs-offset-1  qq-btn"><img src="../image/qq.png" alt="" class="qq">在线客服</a>

            </div>
            <ul class="col-md-2 col-xs-4 service-items list-unstyled footer-item hidden-xs">
                <li class="title">
                    我们的服务
                </li>
                <li><a href="../service/ourservice/html/course.html">作业辅导</a></li>
                <li><a href="../service/ourservice/html/paper.html">论文指导</a></li>
                <li><a href="../service/ourservice/html/task.html">课程代修</a></li>
            </ul>
            <ul class="col-md-2 col-xs-4 privacy-items list-unstyled footer-item hidden-xs">
                <li class="title">
                    隐私与声明
                </li>
                <li>
                    <a href="../privacy.html">隐私条款</a>

                </li>
            </ul>
            <ul class="col-md-2 col-xs-4 aboutus-items list-unstyled footer-item hidden-xs">
                <li class="title">
                    关于我们
                </li>
                <li>
                    <a href="../joinUs.html">加入我们</a>
                </li>
            </ul>
        </div>
        <ul class="col-md-2 col-xs-12 text-center">
            <ul class="list-unstyled attention">
                <li class="title">
                    关注
                </li>
                <li><a href="">QQ:123456789</a></li>
                <li><a href="">Email:12314@xrkj.com</a></li>

            </ul>
        </ul>
        <div class="col-xs-12 col-md-12 text-center ui-intro">
            <i class="go-logo glyphicon glyphicon-home footer-icon"></i>
            <p class="copy-right">2011-2016 © CourseBang Inc. All Rights Reserved</p>
        </div>
    </div>
</footer>
</body>
</html>
<script src="../js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../pagination/Base.js"></script>
<script src="teacher.js"></script>