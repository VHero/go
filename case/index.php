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
                    <?php
                                    
                $caseTableName = "case";
                $caseArray = array("id" =>"", "imgsrc" =>"","article"=>"","name"=>"");
                $caseCurrentPage = 1; //1页
                $casePageSize = 20; //10个
                $caseOrder = "id"; //按照id排序
                $caseSort = "asc";//desc逆序
                $caseParamSql = null;
                $caseList = search($caseTableName, $caseCurrentPage, $casePageSize, $caseOrder, $caseSort, $caseArray, $caseParamSql);
                // echo $caseList;
                foreach($caseList as $obj) {
                echo "<div class='col-md-4 col-xs-12 case-page-item'>
                        <a href='' class='thumbnail' data-toggle='modal' data-target='.bs-modal1'>
                            <img src=../".$obj['imgsrc']." alt='' class='case-page-picture modal-case-picture'>
                            <p class='case-page-comment'>".$obj['article']."</p>
                            <div class='case-page-info'>
                                <span>————   ".$obj['name']."</span>
                            </div>
                        </a>
                      </div>  
                     ";
                    } 
                    ?>

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
                <p></p>
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
            var imgSrc=$(this).attr('src');
            var commentText=$(this).next().text();
            console.log(commentText);
            modalContent(imgSrc,commentText);
        }
        //加载内容进入模态框
        function modalContent(imgsrc,commentText){
            $(".modal-content img").attr({src:imgsrc});
            $(".modal-content p").addClass("comment-text");
            $(".modal-content p").text(commentText);
        }
        // $.ajax({
        //     type:"GET",
        //     url:"http://localhost/goapi/task",
        //     success:function(data){
        //         console.log(data);
        //     }
        // })
    })

</script>
</html>