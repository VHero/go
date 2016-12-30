<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>课程辅导</title>
    <link rel="stylesheet" href="../../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/course.css">
    <script src="../../../js/jquery.min.js"></script>
    <script src="../../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/course.js"></script>
</head>
<body>



<?php
 include "../../service_header.php";
?>

<div class="container">
    <div class="jumbotron jum">
        <div>
            <h2 class="text-center">课程辅导</h2>
            <!--标题简介-->
            <div>
                <p>
                    上课帮为广大留学生提供优质的课程辅导服务。不论是实体课程还是网络课程，上课帮的助教都会为您提供最优服务。
                    选择上课帮，课程任务全部托管，其他的您都不需要操心了。好成绩，上课帮帮您实现。
                </p>
            </div>
            <!--为什么选择上课帮-->
            <div>
                <div class="reason1">
                    <h3>为什么选择上课帮</h3>
                </div>


                <ul class="reason3">
                    <li class="reason2">
                        留学生学术辅导第一品牌
                    </li>
                    <ul>
                        <li>4年品质</li>
                        <li>超过200名中外辅导助教</li>
                        <li>累计完成订单5000+</li>
                        <li>覆盖专业领域50+</li>
                    </ul>
                    <li class="reason2">正规公司，签订辅导协议</li>
                    <ul>
                        <li>
                            作为一家在中国注册的正规教育科技公司，
                            上课帮为每一位付款用户提供一份诚实有效的辅导协议，尽最大努力保障您的权益。
                        </li>
                    </ul>
                    <li class="reason2">24小时企业级客服</li>
                    <ul>
                        <li>
                            上课帮为您提供每天24小时，一周七天，全时段客服体验。无论是售前查询，
                            还是售后服务，上课帮为您提供独一无二的秒回相应。让您随时随地，能够及时得到帮助。
                        </li>
                    </ul>
                    <li class="reason2">
                        所有提交Turnitin检测
                    </li>
                    <ul>
                        <li>
                            上课帮为您提交的每份任务，都附带Turnitin反作弊检测。诚恳做事，让您安心。
                        </li>
                    </ul>
                    <li class="reason2">IP 定位技术</li>
                    <ul>
                        <li>上课帮全职IT团队，专门研发的IP获取技术，拥有独家的IP获取保护手段。
                            我们可以通过技术手段将登陆IP链接到您所在的地点.
                        </li>
                    </ul>
                </ul>

            </div>

            <!--价格与最新优惠-->
            <div class="price">

                <div class="reason1">
                    <h3>价格与最新优惠</h3>
                </div>

                <p>由于每个学校，不同专业课程差异较大，我们需要根据您的实际情况，为您评估辅导价格。您可以参考以下价格，具体价格请 <a href="" class="text-danger">咨询客服</a></p>

                <div class="table-responsive">
                    <table class="table" style="border: 1px solid lightgray">
                        <caption class="text-center text-info">课程与费用</caption>
                        <thead>
                            <tr>
                                <th></th>
                                <th>A级成绩</th>
                                <th>B级成绩</th>
                                <th>C级成绩</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>普通课程</td>
                                <td>1200美元起</td>
                                <td>900美元起</td>
                                <td>700美元起</td>
                            </tr>
                            <tr>
                                <td>专业课程</td>
                                <td>1400美元起</td>
                                <td>1100美元起</td>
                                <td>900美元起</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>最新优惠</h3>
                <p>暑假课程辅导震撼来袭！ 现在报名，单门课程立减50美元，两门课程立减100美元！ 介绍朋友来辅导，还有丰厚奖金！活动截止2016年6月15日。</p>

            </div>

            <!--常见问题-->
            <div>
                <div class="reason1">
                    <h3>常见问题</h3>
                </div>

                <ul class=" question">
                    <li>
                        <p class="text-info">Q: 我要修××类课程，你们有这类课的老师吗？</p>
                        <p>A: 有，我们储备了全美各大院系以及专业的优质老师，对于您提出的需求，我们有能力保质保量地完成。</p>
                    </li>
                    <li>
                        <p class="text-info">Q: 只能保B吗？我想要A不可以吗？</p>
                        <p>A: 您如果寻求达到更好的成绩，您可以选择我们的A级辅导服务。</p>
                    </li>
                </ul>

            </div>

            <!--协议展示-->
            <div>

                <div class="reason1">
                    <h3>辅导协议展示</h3>
                </div>

                <!--展示图-->
                <div id="modalImg" class="row gap">

                    <div class="col-md-6">

                        <div class="thumbnail" data-toggle="modal" data-target="#myModal" id="img0">
                            <img src="../../../image/protocal1.jpg">
                            <h2 class="text-center">点击放大</h2>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="thumbnail" data-toggle="modal" data-target="#myModal" id="img1">
                            <img src="../../../image/protocal2.jpg">
                            <h2 class="text-center">点击放大</h2>
                        </div>

                    </div>
                    <!-- 模态框（Modal） -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="line-height: 10px">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <img alt="切换图" src="../../../image/protocal1.jpg" id="targetImg">
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
include "../../service_footer.php";

?>

</body>
</html>