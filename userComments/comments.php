<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户评价</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/comments.css">
</head>
<body>



    <!--头部导航条-->

<?php
 include "../header.php";
?>

<div class="page-banenr  teacher-page-bg">
    <div class="container teacher-description">
        <h3>用户评价</h3>
        <p>所有评价都是真实</p>
    </div>
</div>

    <!--评论区-->
    <div class="comArea">
        <div class="container" id="comment0">






        </div>
    </div>



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
<script src="../js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="comments.js"></script>
<script src="../pagination/Base.js"></script>

</html>
