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
    <div class="container" id="teacher0">
        <!-- <div class="row teacher-item">
        
            <div class="col-md-2 teacher-item-avartar">
               <img src="../uploadimg/1483171430.png" alt="" class="img-circle r">
            </div>
            <div class="col-md-10 teacher-item-right">
            <p >教育背景:</p>
            <p class="teacher-item-school">2005-2009 厦门大学  主攻英语语言文学，辅修法语<br>
                2009-2011 南加州大学  学习西方文学、西班牙语</p>
            <p class="teacher-item-description">自我介绍: <span>对西方语言，文学以及各国文化都有十分深入的研究，所代课程的成绩都十分优秀。</span></p>

            <p class="teacher-item-skill">擅长领域: <span class="speciality">英语语言文学，西方文学，法语，西班牙语</span></p>
            <p class="teacher-item-score clearfix">
                <strong class='pull-right'>
                <span class='get-score'>4.9</span>/<span class='all-score'>5.0</span>
                </strong>
            </p>
            </div>
        </div> -->

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
</html>
<script src="../js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../pagination/Base.js"></script>
<script src="teacher.js"></script>