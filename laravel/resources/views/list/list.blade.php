<!DOCTYPE HTML>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>职位列表</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="keywords" content="职位列表" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script type="text/javascript" src="js/jquery1.42.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.SuperSlide.2.1.1.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->
</head>

<body>
<!--header start-->
<div id="header">
    <h1>职位列表</h1>
    <p>青春是打开了,就合不上的书。人生是踏上了，就回不了头的路。你应该拥有更好的工作，你应该拥有更好的生活。</p>
</div>
<!--header end-->
<!--nav-->
<div id="nav">
    {{--<ul>--}}
        {{--<li><a href="index.html">首页</a></li>--}}
        {{--<li><a href="about.html">关于我</a></li>--}}
        {{--<li><a href="shuo.html">碎言碎语</a></li>--}}
        {{--<li><a href="riji.html">个人日记</a></li>--}}
        {{--<li><a href="xc.html">相册展示</a></li>--}}
        {{--<li><a href="learn.html">学无止境</a></li>--}}
        {{--<li><a href="guestbook.html">留言板</a></li>--}}
        {{--<div class="clear"></div>--}}
    {{--</ul>--}}
</div>
<!--nav end-->
<!--content start-->
<div id="content">
    <!--left-->
    <div class="left" id="c_left">
        <div class="s_tuijian">
            <h2>职位<span>推荐</span></h2>
        </div>
        <div class="content_text" id="show">
            <!--wz-->
            @foreach ($arr['data'] as $v)
            <div class="wz">
                <input type="hidden" id="page" value="{{$arr['page']}}"/>
                <h3><a href="#" title="{{$v['zpzw']}}">{{$v['zpzw']}}</a></h3>
                <dl>
                    <dt><img src="images/s.jpg" width="200"  height="123" alt=""></dt>
                    <dd>
                        <p class="dd_text_1">
                            招聘人数: <span style="color: #ff0000">{{$v['zprs']}}</span>
                            学历要求:<span style="color: #ff0000">{{$v['zpxt']}}</span>
                            工作地址:<span style="color: #ff0000">{{$v['zpfrom']}}</span>
                            工作经验:<span style="color: #ff0000">{{$v['zpmoney']}}</span>
                            薪资:<span style="color: #ff0000">{{$v['zpminyear']}}</span>--<span style="color: #ff0000">{{$v['zpmaxyear']}}</span>K<br>
                            公司简介:{{$v['jianjie']}}
                        </p>
                        <p class="dd_text_2">
                            <span class="left author">{{$v['qyname2']}}</span><span class="left sj">时间:{{$v['uptime']}}</span>
                            <span class="left fl">分类:<a href="#" title="{{$v['gztype']}}">{{$v['gztype']}}</a></span><span class="left yd"><a href="#" title="查看详情">查看详情</a>
               </span>
                        <div class="clear"></div>
                        </p>
                    </dd>
                    <div class="clear"></div>
                </dl>
            </div>
            <!--wz end-->
            @endforeach
        </div>
    </div>
    <!--left end-->
    <!--right-->
    <div class="right" id="c_right">
        <div class="s_about">
            <h2>关于我们</h2>
            <img src="images/1.jpg" width="230" height="230" alt="博主"/>
            <p>
                <a href="#" title="联系博主"><span class="left b_1"></span></a><a href="#" title="加入QQ群，一起学习！"><span class="left b_2"></span></a>
            <div class="clear"></div>
            </p>
        </div>
        <!--栏目分类-->
        <div class="lanmubox">
            <div class="hd">
                <ul><li>精心推荐</li><li>最新职位</li><li class="hd_3">随机职位</li></ul>
            </div>
            <div class="bd">
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>
                <ul>
                    <li><a href="#" title="网站项目实战开发（-）">网站项目实战开发（-）</a></li>
                    <li><a href="#" title="关于响应式布局">关于响应式布局</a></li>
                    <li><a href="#" title="如何创建个人博客网站">如何创建个人博客网站</a></li>
                    <li><a href="#" title="网站项目实战开发（二）">网站项目实战开发（二）</a></li>
                    <li><a href="#" title="为什么新站前期排名老是浮动？(转)">为什么新站前期排名老是浮动？(转)</a></li>
                </ul>


            </div>
        </div>
        <!--end-->
        <div class="link">
            <h2>友情链接</h2>
            <p><a href="http://www.baidu.com">百度</a></p>
        </div>
    </div>
    <!--right end-->
    <div class="clear"></div>
</div>
<!--content end-->
<!--footer start-->
<div id="footer">
    <p><a href="javascript:void(0)" onclick="page()" >加载更多...</a> </p>
</div>
<!--footer end-->
<script type="text/javascript">jQuery(".lanmubox").slide({easing:"easeOutBounce",delayTime:400});</script>
<script  type="text/javascript" src="js/nav.js"></script>
</body>
</html>
<script>
    function page(){
        var page=$("#page").val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "page",
            data: "p="+page,
            success: function(msg){
//                alert(msg);
                $("#page").remove();
                $("#show").after(msg);
            }
        });
    }
</script>
