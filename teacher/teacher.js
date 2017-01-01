/**
 * Created by p on 2016/9/13.
 */

$(document).ready(function(){



(function (window) {
    var page;
    //1.pager对象
    function Pager(params) {
        //给pager对象设置属性
        this.url = params.url;
        this.currentPage = 1;
        this.pageSize = params.pageSize?params.pageSize:1;
        this.handler = params.handler;
        //当第一个创建pager对象的时候，就应该加载数据
        this.loadPage();
        if(this.currentPage == 1){
            Base.disableA("prevPage");
        }
        // this.loadCount(); 在写一个ajax请求，请求商品的总数量
    }
    Pager.prototype = {
        //3.给pager对象增加方法，加载数据的方法
        //加载数据
        //比如我要加载第一页的数据
        loadPage :function () {
            var params = {
                "currentPage":this.currentPage,
                "pageSize":this.pageSize,
                "type":"query",
                "tableName":"teacher"
            }
            var $this = this;
            Base.ajax({
                url:this.url,
                type:'get',
                dataType:'json',
                param:params,
                aysn:true,
                success:function (dataString) {
                    $this.handler(dataString);
                }
            });
        },
        nextPage:function () {
            this.currentPage ++;
            this.loadPage();
        },
        prevPage:function () {
            this.currentPage --;
            this.loadPage();
        },
        //用来判断是否有传入参数的这一页
        /**
         * @param n
         * 用来判断 n处于1-this.pageCount之间，如果处于，则返回true，否则返回false
         */
        hasPage:function (n) {
            return n.isInter(1,this.pageCount);
        },
        hasNextPage:function () {
            return this.hasPage(this.currentPage+1);
        },
        hasPrePage:function () {
            return this.hasPage(this.currentPage-1);
        }

    }
    //为Number类扩展了一个方法，用来判断，数字是否处于a,b之间
    Number.prototype.isInter = function (a,b) {
        var min = Math.min(a,b),max = Math.max(a,b);
        var flag = (this == min || this == max ||
        (Math.max(this,min) == this && Math.min(this,max) == this));
        return flag;
    }


    //给下一页超链接添加点击事件
    Base.addEvent(Base.$('nextPage'),'click',function (evt) {
        //禁止浏览器默认的行为
        evt.preventDefault();
        if (page.hasNextPage()){
            page.nextPage();
            //修改上一页标签的样式
            Base.restA("prevPage");
        }
        if(page.pageCount == page.currentPage){
            Base.disableA('nextPage');
        }
    });
    //给上一页超链接添加点击事件
    Base.addEvent(Base.$('prevPage'),'click',function (evt) {
        //禁止浏览器默认的行为
        evt.preventDefault();
        if (page.hasPrePage()){
            page.prevPage();
            Base.restA("nextPage");
        }
        if(page.currentPage == 1){
            Base.disableA("prevPage");
        }
    });
    //给window添加事件
    Base.addEvent(window,'load',function () {
        //5.在windon的load方法中创建pager对象
        page =  new Pager({
            url:'../pagination/php/Pager.php',
            pageSize:6,
            //传入回调函数，让pager类更加的通用
            handler:function (dataString) {
                var data = JSON.parse(dataString);
                var html = [];
                // var string = "<tr><td>姓名</td><td>价格</td><td>数目</td><td>描述</td></tr>"
                // html.push(string);
                for(var i = 0,htmlString;i<data.length - 1;i++){

                    var dataObj = data[i];


                    // htmlString = "<img src="+dataObj['imgsrc']+">"+"<p>"+data[i]['introduction']+"</p>";
                    // htmlString = "<div class='col-sm-6 col-md-4'>"+
                    //     "<div class='thumbnail teacher-item'>"+
                    //     "<img src=../"+dataObj['imgsrc']+ " class='img-circle teacher-item-avartar'>" +
                    //     "<div class='caption'>" +
                    //     "<p class='teacher-item-name'>"+
                    //     "姓名:" +"<span>"+dataObj['name']+"</span>" +
                    //     "</p>" +"<p class='teacher-item-skill'>"+"" +
                    //     "擅长领域:" +
                    //     "<span class='speciality'>"+dataObj['speciality']+"</span>" +"</p>"+"<p class='teacher-item-description'>"+
                    //     "自我介绍:"+
                    //     "<span class='introduce'>"++"</span>" +
                    //     "</p>" +"<p class='teacher-item-school'>"+
                    //     "背景:" +
                    //     "<span class='educationbg'>"+dataObj['educationbg']+"</span>"+
                    //     "</p>"+
                    //     "<p class='teacher-item-score clearfix'>"+
                    //     "评分:"+
                    //     "<strong class='pull-right'>"+
                    //     "<span class='get-score'>"+dataObj['score']+"</span>"+"/"+"<span class='all-score'>"+"5.0"+"</span>" +
                    //     "</strong>"+
                    //     "</p>"+
                    //     "</div>"+
                    //     "</div>"+
                    //     "</div>";

                        htmlString="<div class='row teacher-item'>"
                                        +"<div class='col-md-2 teacher-item-avartar'>"
                                            +"<img src=../"+dataObj['imgsrc']+" alt='' class='img-circle'>"
                                        +"</div>"
                                        +"<div class='col-md-10 teacher-item-right'>"
                                        +"<p >教育背景:</p>"
                                        +"<p class='teacher-item-school'>"+dataObj['educationbg']
                                        +"</p>"
                                        +"<p class='teacher-item-description'>自我介绍:"
                                        +"<span>"+dataObj['introduction']+"</span>"
                                        +"<p class='teacher-item-skill'>擅长领域: "
                                        +"<span class='speciality'>"+dataObj['speciality']
                                        +"</span>"
                                        +"</p>"
                                        +"<p class='teacher-item-score clearfix'>"
                                        +"<strong class='pull-right'>"
                                        +"<span class='get-score'>4.9</span>/<span class='all-score'>5.0</span>"
                                        +"</strong></p></div></div>"
                        
        
            
               
            
            
            
      



            
                
                
                
                    html.push(htmlString);


                }
                var countObj = data[data.length - 1];
                var htmls = html.join("");


                Base.$('teacher0').innerHTML = htmls;


                // Base.$('table').innerHTML = htmls;
                Base.$('totalCount').innerHTML = countObj.count;
                Base.$('pageSize').value = this.pageSize;
                //求得最大的页数
                this.pageCount = Math.ceil(countObj.count / this.pageSize);
                Base.$('currentPage').value = this.currentPage;
            }
        });
    });
})(window);

})