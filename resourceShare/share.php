<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>资源分享</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/screen.css">
    <link rel="stylesheet" href="../css/share.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../pagination/Base.js"></script>
    <script src="share.js"></script>
</head>
<body>



    <?php
 include "../header.php";
?>




<header class="headerImage">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="hColor">资源有限，共享无限。</h3>
                <h4 class="hColor">知识与幸福共存，分享与快乐同在。</h4>
            </div>
        </div>
    </div>
</header>


<!--主题内容部分-->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            <main class="col-md-8 main-content" id="share0">










            </main>


            <aside class="col-md-4 sidebar">

                <div class="widget">
                    <h4 class="title">社区</h4>
                    <div class="content community">
                        <p>QQ群：111111111</p>
                        <p><a href="#" title="Laravel中文网问答社区" target="_blank" >问答社区</a></p>
                    </div>
                </div>




                <div class="widget">
                    <h4 class="title">资源共享</h4>
                    <div class="content tag-cloud">
                        <a href="#">学习方法</a>
                        <a href="#">文档</a>
                        <a href="#">效率</a>


                        <a href="#">...</a>
                    </div>
                </div>

            </aside>

        </div>
    </div>
</section>

    <div class="container">

                    <pre class="piginationMessage">
                        第 <input type="text" value="1" id="currentPage"> 页          每页显示 <input type="text" value="20" id="pageSize"> 条          总共 <span id="totalCount"></span> 条信息
                    </pre>

        <nav class="teacher-pagination">
            <ul class="pager">
                <li><a href="#" id="prevPage">上一页</a></li>
                <li><a href="#" id="nextPage">下一页</a></li>
            </ul>
        </nav>
    </div>


<?php
 include "../footer.php";
?>

</body>
</html>