<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户评价</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/comments.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="comments.js"></script>
</head>
<body>



    <!--头部导航条-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">上学</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="../case/index.html">成功案例</a></li>
                    <li><a href="../teacher/index.html">导师</a></li>
                    <li><a href="comments.html">用户评价</a></li>
                    <li><a href="../resourceShare/share.html">资源分享</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">服务 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">论文辅导</a></li>
                            <li><a href="#">作业辅导</a></li>
                            <li><a href="../service/ourservice/html/course.html">课程辅导</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


    <div class="imgTop">
        <h1>客户反馈</h1>
    </div>


    <!--评论区-->
    <div class="comArea">
        <div class="container">
        <?php
            include "../function.php";
                $commentTableName = "comment";
                $commentArray = array("id" =>"", "imgsrc" =>"","comment"=>"","date"=>"","name"=>"");
                $commentCurrentPage = 1; //1页
                $commentPageSize = 20; //10个
                $commentOrder = "id"; //按照id排序
                $commentSort = "asc";//desc逆序
                $commentParamSql = null;
                $commentList = search($commentTableName, $commentCurrentPage, $commentPageSize, $commentOrder, $commentSort, $commentArray, $commentParamSql);
                 foreach($commentList as $obj) {
                echo "<div class='panel panel-info panelSty'>
                         <div class='panel-heading'>
                            <div>
                                <img src=../".$obj['imgsrc']. " alt='头像' class='img-circle imgSty'>
                                <h3 class='panel-title'>".$obj['name']."&nbsp;&nbsp;&nbsp;&nbsp;发表于".$obj['date']."</h3>
                            </div>
                         </div>
                         <div class='panel-body'>"
                           .$obj['comment']."
                         </div>
                       </div>  
                     ";
                    } 

        ?>
            
                
                    
                        
                        
                    

                
                

                
            
 <!--            <div class="panel panel-info panelSty">
                <div class="panel-heading">
                    <div>
                        <img src="https://p0.meituan.net/avatar/__47564542__7122477.jpg@100w_100h_1e_1c" alt="头像" class="img-circle imgSty">
                        <h3 class="panel-title">小五&nbsp;&nbsp;&nbsp;&nbsp;Penn State U&nbsp;&nbsp;&nbsp;&nbsp;发表于2015-12-15</h3>
                    </div>
                </div>
                <div class="panel-body">
                    我想上一门 Accounting的网课，但是自己找不到合适的。我想找一个是4年本科不是2年社区学员的，最好便宜一点的。
                    咨询了上课帮，帮我推荐了一门比较适合我现在情况的课程。我就报名代修了这门课，老师很专业，帮我拿到了很高的学分。
                </div>
            </div>
            <div class="panel panel-info panelSty">
                <div class="panel-heading">
                    <div>
                        <img src="https://p0.meituan.net/avatar/__47564542__7122477.jpg@100w_100h_1e_1c" alt="头像" class="img-circle imgSty">
                        <h3 class="panel-title">小五&nbsp;&nbsp;&nbsp;&nbsp;Penn State U&nbsp;&nbsp;&nbsp;&nbsp;发表于2015-12-15</h3>
                    </div>
                </div>
                <div class="panel-body">
                    我想上一门 Accounting的网课，但是自己找不到合适的。我想找一个是4年本科不是2年社区学员的，最好便宜一点的。
                    咨询了上课帮，帮我推荐了一门比较适合我现在情况的课程。我就报名代修了这门课，老师很专业，帮我拿到了很高的学分。
                </div>
            </div>
            <div class="panel panel-info panelSty">
                <div class="panel-heading">
                    <div>
                        <img src="https://p0.meituan.net/avatar/__47564542__7122477.jpg@100w_100h_1e_1c" alt="头像" class="img-circle imgSty">
                        <h3 class="panel-title">小五&nbsp;&nbsp;&nbsp;&nbsp;Penn State U&nbsp;&nbsp;&nbsp;&nbsp;发表于2015-12-15</h3>
                    </div>
                </div>
                <div class="panel-body">
                    我想上一门 Accounting的网课，但是自己找不到合适的。我想找一个是4年本科不是2年社区学员的，最好便宜一点的。
                    咨询了上课帮，帮我推荐了一门比较适合我现在情况的课程。我就报名代修了这门课，老师很专业，帮我拿到了很高的学分。
                </div>
            </div>
            <div class="panel panel-info panelSty">
                <div class="panel-heading">
                    <div>
                        <img src="https://p0.meituan.net/avatar/__47564542__7122477.jpg@100w_100h_1e_1c" alt="头像" class="img-circle imgSty">
                        <h3 class="panel-title">小五&nbsp;&nbsp;&nbsp;&nbsp;Penn State U&nbsp;&nbsp;&nbsp;&nbsp;发表于2015-12-15</h3>
                    </div>
                </div>
                <div class="panel-body">
                    我想上一门 Accounting的网课，但是自己找不到合适的。我想找一个是4年本科不是2年社区学员的，最好便宜一点的。
                    咨询了上课帮，帮我推荐了一门比较适合我现在情况的课程。我就报名代修了这门课，老师很专业，帮我拿到了很高的学分。
                </div>
            </div> -->
        </div>
    </div>

    <div class="text-center">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&raquo;</a></li> 

        </ul>
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