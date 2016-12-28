<!doctype html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    <title>案例</title>
    <!--[if lt IE 9]>

    <script src="../js/html5shiv.js"></script>

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
        <div class="page-banenr  case-page-bg">
            <div class="container case-description">
                <h3>经典案例</h3>
                <p>所有案例均是真实</p>
                <p>口碑由用户支撑</p>
            </div>
        </div>
        <seciton >
            <div class="container">
                <div class="row success-case">
                    <h2 class="text-center">成功案例</h2>
                </div>
                <div class="row case-page-list" >
                    <div class="col-md-4 col-xs-12 case-page-item">
                        <a href="" class="thumbnail " data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-image.jpg" alt="" class="case-page-picture modal-case-picture">
                            <p class="case-page-comment">我是上课帮的老客户了，之前一直在这家代写作业和paper。老师们都很专业，后期还可以帮我修改paper。</p>
                            <div class="case-page-info">
                                <span>————   萌萌的女汉子</span>
                                <img src="../image/customer.png" alt="" class="img-circle">
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 col-xs-12 case-page-item">
                        <a href="" class="thumbnail " data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-image.jpg" alt="" class="case-page-picture modal-case-picture">
                            <p class="case-page-comment">我是上课帮的老客户了，之前一直在这家代写作业和paper。老师们都很专业，后期还可以帮我修改paper。</p>
                            <div class="case-page-info">
                                <span>————   萌萌的女汉子</span>
                                <img src="../image/customer.png" alt="" class="img-circle">
                            </div>
                        </a>

                    </div>
                    <div class="col-md-4 col-xs-12 case-page-item">
                        <a href="" class="thumbnail " data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-image.jpg" alt="" class="case-page-picture modal-case-picture">
                            <p class="case-page-comment">我是上课帮的老客户了，之前一直在这家代写作业和paper。老师们都很专业，后期还可以帮我修改paper。</p>
                            <div class="case-page-info">
                                <span>————   萌萌的女汉子</span>
                                <img src="../image/customer.png" alt="" class="img-circle">
                            </div>
                        </a>

                    </div>

                </div>
            </div>
        </seciton>
        <section>
            <div class="container">
                <div class="row task-screen">
                    <h2 class="text-center">任务截屏</h2>
                </div>
                <div class="row task-list">
                <?php
                
                $tableName = "task";
                $columnArray = array("id" => "", "imgsrc" => "");
                $currentPage = 1; //1页
                $pageSize = 20; //10个
                $order = "id"; //按照id排序
                $sort = "asc";//desc逆序
                $paramSql = null;
                $list = search($tableName, $currentPage, $pageSize, $order, $sort, $columnArray, $paramSql);
                // foreach($list as $obj) {
                // echo "<tr><td>" . $obj['id'] . "</td><td>" . $obj['name'] . "</td><td>" . $obj['age'] . "</td><td>" . $obj['sex'] . "</td><td>" . $obj['birth'] . "</td></tr>";
                // } 
                foreach ($list as $obj) {
                    echo "<div class='task-items col-md-4 col-xs-12'>
                        <a href='' class='task-link thumbnail' data-toggle='modal' data-target='.bs-modal1'>
                        <img src=../". $obj['imgsrc']." alt='' class='task-items-picture'>
                        </a>
                        </div>
                        ";
                }
                    ?>
                    
                            
                        
                   <!--  <div class="task-items col-md-4 col-xs-12">
                        <a href="" class="task-link thumbnail" data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-picture2.jpg" alt="" class="task-items-picture">
                        </a>
                    </div>
                    <div class="task-items col-md-4 col-xs-12">
                        <a href="" class="task-link thumbnail" data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-picture2.jpg" alt="" class="task-items-picture">
                        </a>
                    </div>
                    <div class="task-items col-md-4 col-xs-12">
                        <a href="" class="task-link thumbnail" data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-picture2.jpg" alt="" class="task-items-picture">
                        </a>
                    </div>
                    <div class="task-items col-md-4 col-xs-12">
                        <a href="" class="task-link thumbnail" data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-picture2.jpg" alt="" class="task-items-picture">
                        </a>
                    </div>
                    <div class="task-items col-md-4 col-xs-12">
                        <a href="" class="task-link thumbnail" data-toggle="modal" data-target=".bs-modal1">
                            <img src="../image/case-picture2.jpg" alt="" class="task-items-picture">
                        </a>
                    </div> -->

                </div>
            </div>
        </section>
    <!--  modal -->
    <div class="modal fade modal bs-modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-case-picture">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <?php
        include "../footer.php";
    ?>
</body>
<script src="../js/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
    $(function(){
        $(".case-page-picture").on('click',bindImgSrc);
        $(".task-items-picture").on('click',bindImgSrc);
        //绑定
        function bindImgSrc() {
            console.log($(this).attr('src'));
            var imgSrc=$(this).attr('src');
            modalContent(imgSrc);
        }
        //加载内容进入模态框
        function modalContent(imgsrc){
            $(".modal-case-picture").find('img').attr({src:imgsrc});
        }
        $.ajax({
            type:"GET",
            url:"http://localhost/goapi/task",
            success:function(data){
                console.log(data);
            }
        })
    })

</script>
</html>