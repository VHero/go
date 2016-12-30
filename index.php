<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>上学</title>
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <![endif]-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--头部-->
    <header>
        <?php
            include "index_header.php";
        ?>
        <section class="banner">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                	<?php
                		include "function.php";
                	$bannerTableName = "banner";
	                $bannerArray = array("id" =>"", "bannersrc" =>"","keyword"=>"");
	                $bannerCurrentPage = 1; //1页
	                $bannerPageSize = 20; //10个
	                $bannerOrder = "id"; //按照id排序
	                $bannerSort = "asc";//desc逆序
	                $bannerParamSql = null;
	                $imgindex=0;//图片记录次数
	                $bannerList = search($bannerTableName, $bannerCurrentPage, $bannerPageSize, $bannerOrder, $bannerSort, $bannerArray, $bannerParamSql);
	                
                		for($pageIndex=0;$pageIndex<count($bannerList);$pageIndex++){
                			if($pageIndex==0){
                				echo "<li data-target='#carousel-example-generic' data-slide-to=".$pageIndex." class='active pagination'></li>";
                			}else{
                				echo "<li data-target='#carousel-example-generic' data-slide-to=".$pageIndex." class='pagination'></li>";
                			}
                		}
                	?>
                </ol>
                	 <div class='carousel-inner' role='listbox'>
                <!-- Wrapper for slides -->
                <?php
                
                	foreach($bannerList as $obj) {
                		if($imgindex==0){
								echo "
		                			<div class='item active'>
		                				<img src=./".$obj['bannersrc']." alt='".$obj['keyword']."'>
		                     			<div class='carousel-caption'>
		                     			</div>
		                     		</div>
	                     		";
	                     		$imgindex++;
                		}else{
								echo "
		                			<div class='item'>
		                				<img src=./".$obj['bannersrc']." alt='".$obj['keyword']."'>
		                     			<div class='carousel-caption'>
		                     			</div>
		                     		</div>
	                     		";
	                     		$imgindex++;                			
                		}
	                	
                    } 
                ?>
<!--                 <div class="carousel-inner" role="listbox">
	                    <div class="item active">
	                        <img src="image/3.jpg" alt="...">
	                        <div class="carousel-caption">

	                        </div>
	                    </div>
                    <div class="item">
                        <img src="image/4.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
-->
                </div> 

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

    </header>
    <!--灰白背景-->
    <div class="background-gray">
        <!--国家-->
        <section class="country hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/06/318768-130621145437551.jpg&w=160&h=105&zc=1&f=0" alt="" class="country-picture blur">
                            <span class="mask"></span>
                            <span class="text">美国</span>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/06/240421-1305300K14066.jpg&w=160&h=105&zc=1&f=0" alt="" class="country-picture ">
                            <span class="mask"></span>
                            <span class="text">英国</span>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/07/au.jpg&w=160&h=105&zc=1&f=0" alt="">
                            <span class="mask"></span>
                            <span class="text">新加坡</span>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/07/nz.jpg&w=160&h=105&zc=1&f=0" alt="">
                            <span class="mask"></span>
                            <span class="text">法国</span>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/07/ca.jpg&w=160&h=105&zc=1&f=0" alt="">
                            <span class="mask"></span>
                            <span class="text">澳大利亚</span>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class=" country-item">
                            <img src="http://cdn.uiessays.com/static/timthumb.php?src=http://www.uiessays.com/wp-content/uploads/2016/07/sg.jpg&w=160&h=105&zc=1&f=0" alt="">
                            <span class="mask"></span>
                            <span class="text">加拿大</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--服务项目-->
        <section class="service">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">我们的服务</h1>
                    <p class="text-center">任何服务都严格按要求完成,专属定制你的服务</p>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://cdn.uiessays.com/static/images/home/help.png" alt="...">
                            <div class="caption">
                                <h3 class="text-center">论文辅导</h3>
                                <p>上课帮为您提供优质的论文辅导服务。上课帮会根据您的要求安排相关科目的辅导老师，在约定的截止时间内将任务完成。上课帮为您提供论文提供免费的修改服务，以确保最终作品符合您的预期。同时，上课帮免费赠送您Turnitin 检测，确保万无一失。</p>
                                <p class="text-center"><a href="http://wpa.qq.com/msgrd?v=3&uin=3359703978&site=qq&menu=yes" class="btn btn-primary" role="button">立即咨询</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://cdn.uiessays.com/static/images/home/help.png" alt="...">
                            <div class="caption">
                                <h3 class="text-center">作业辅导</h3>
                                <p>上课帮为您提供优质的作业辅导服务。上课帮会根据您的要求安排相关科目的辅导老师，在约定的截止时间内将任务完成。上课帮为您提供作业提供免费的修改服务，以确保最终作品符合您的预期。同时，上课帮免费赠送您Turnitin 检测，确保万无一失。</p>
                                <p class="text-center"><a href="http://wpa.qq.com/msgrd?v=3&uin=3359703978&site=qq&menu=yes" class="btn btn-primary" role="button">立即咨询</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail">
                            <img src="http://cdn.uiessays.com/static/images/home/help.png" alt="...">
                            <div class="caption">
                                <h3 class="text-center">课程辅导</h3>
                                <p>上课帮为您提供优质的作业辅导服务。上课帮会根据您的要求安排相关科目的辅导老师，在约定的截止时间内将任务完成。上课帮为您提供作业提供免费的修改服务，以确保最终作品符合您的预期。同时，上课帮免费赠送您Turnitin 检测，确保万无一失。</p>
                                <p class="text-center"><a href="http://wpa.qq.com/msgrd?v=3&uin=3359703978&site=qq&menu=yes" class="btn btn-primary" role="button">立即咨询</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--订单完成情况-->
        <section class="customerWitness">
            <div class="comment">
                <h2 class="text-center">订单累计完成 <span id="myTargetElement" ></span> ，实力见证!</h2>
                <p class="text-center user-comment"><span class="user">Alex:</span><span class="user-text">真是有实力</span></p>
            </div>
        </section>
        <!--教师团队-->
        <section class="teamTeacher">
            <h1 class="text-center">顶尖团队</h1>
            <p class="text-center team-description">我们的专家来自于全球各大顶尖高校，熟悉全世界顶尖专业分布</p>
            <div class="container">
                <div class="row team">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail team-item">
                            <img src="image/teacher1.png" alt="..." class="img-circle teacher-picture">
                            <div class="caption">
                                <h3 class="text-center">Sammy</h3>
                                <p>院校学历:哥伦比亚大学</p>
                                <p class="">
                                    擅长领域:
                                    <span class="label label-info">哲学</span>
                                    <span class="label label-info">法律</span>
                                    <span class="label label-info">心理</span>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail team-item">
                            <img src="image/teacher2.png" alt="..." class="img-circle teacher-picture">
                            <div class="caption">
                                <h3 class="text-center">Sammy</h3>
                                <p>院校学历:哥伦比亚大学</p>
                                <p class="">
                                    擅长领域:
                                    <span class="label label-info">哲学</span>
                                    <span class="label label-info">法律</span>
                                    <span class="label label-info">心理</span>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail team-item">
                            <img src="image/teacher3.png" alt="..." class="img-circle teacher-picture">
                            <div class="caption">
                                <h3 class="text-center">Sammy</h3>
                                <p>院校学历:哥伦比亚大学</p>
                                <p class="">
                                    擅长领域:
                                    <span class="label label-info">哲学</span>
                                    <span class="label label-info">法律</span>
                                    <span class="label label-info">心理</span>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail team-item">
                            <img src="image/teacher1.png" alt="..." class="img-circle teacher-picture">
                            <div class="caption">
                                <h3 class="text-center">Sammy</h3>
                                <p>院校学历:哥伦比亚大学</p>
                                <p class="">
                                    擅长领域:
                                    <span class="label label-info">哲学</span>
                                    <span class="label label-info">法律</span>
                                    <span class="label label-info">心理</span>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="./teacher/index.php" class="btn-primary btn team-btn">顶尖团队</a>
                </div>
            </div>
        </section>

    </div>
    <!--用户评价-->
    <section class="home-comment">
        <div class="comment-item container">
            <h1 class="text-center">他们是这样评价的</h1>
            <p class="text-center">这是解决留学生所有学业困难的首选平台</p>
            <div class="row comment-wrap">
                <div class="col-md-6">
                    <div class="home-comment-item">
                        <p>我选了几个门课都是实体课。虽然每次上课课内作业都还应付的来，但是考试很难。自从报名了上课帮，帮我考的一直很好。下学期我准备选几个online course.再来你家报名。</p>
                        <div class="comment-info clearfix">
                            <span class=" line">————  </span>
                            <img src="image/customer.png" alt="" class="img-circle customer-picture">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="home-comment-item ">
                        <p>临近毕业，面临着找工作的压力，课业上还不能耽误。最后一年的课程我。我要回国实习，资金上也周转不开。我申请了分期付款，帮我解决了资金困难而且最后给我做到了很好的成绩。真的很感谢上课帮。</p>
                        <div class="comment-info clearfix">
                            <span class=" line">————  </span>
                            <img src="image/customer.png" alt="" class="img-circle customer-picture">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="home-comment-item">
                        <p>我是上课帮的老客户了，之前一直在这家代写作业和paper。老师们都很专业，后期还可以帮我修改paper。很负责任。演讲稿也帮我做的很好。在你家代写给我解决了不少困难。。</p>
                        <div class="comment-info clearfix">
                            <span class=" line">————  </span>
                            <img src="image/customer.png" alt="" class="img-circle customer-picture">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="home-comment-item ">
                        <p>我网课报了一门英语的课程，之前的课程都是我自己来做的，但是后边的任务实在是没时间做了。上课帮我找了一个老师，可以按照我的写作风格来帮我继续接下来的任务。这个让我很放心。</p>
                        <div class="comment-info clearfix">
                            <span class=" line">————  </span>
                            <img src="image/customer.png" alt="" class="img-circle customer-picture">
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <a href="./userComments/comments.php" class="btn-primary btn comment-btn">用户评价</a>
            </div>
        </div>
    </section>
    <!--案例-->
    <section class="case">
        <div class="container">
            <h1 class="text-center">经典案例</h1>
            <p class="text-center">我们是如何帮助广大学子获得成功**************************</p>
            <div class="row case-list">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="image/case-image.jpg" alt="...">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="image/case-image.jpg" alt="...">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="image/case-image.jpg" alt="...">
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="./case/index.php" class="btn-primary btn case-btn">经典案例</a>
            </div>
        </div>
    </section>


<?php
    include "index_footer.php";
?>
<script src="js/countUp.js"></script>
<script>
$(function(){
        /*数字变化效果*/
    function numAnimate(){
        var numAnim = new CountUp("myTargetElement", 0, 59192,0, 60);
        numAnim.start();
    }

    /*用户评价*/
    function commentChane(){
        var commentList =[{user:'Charie:',userText:'不错的网站，让我没有后顾之忧'},{user:'Bon:',userText:'很好很好'}];
        var count=0;
        var oUser=$(".user");
        var oUserComment=$(".user-text");
        var timer=setInterval(function(){
            oUser.text(commentList[count].user);
            oUserComment.text(commentList[count].userText);
            if(count<commentList.length-1){
                count++;
            }else{
                count=0;
            }
        },5000);

    }
    commentChane();
    numAnimate();
})


</script>
</html>