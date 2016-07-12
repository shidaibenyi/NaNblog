<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
  <meta name="description" content="">
  <meta name="author" content="ThemeBucket">
  <link rel="shortcut icon" href="#" type="/image/png">
  <title>当前访问-@yield('title')</title>
  <!--载入css样式-->
    @section('css')
  <link href="{{url('/js/iCheck/skins/minimal/minimal.css')}}" rel="stylesheet">
  <link href="{{url('/js/iCheck/skins/square/square.css')}}" rel="stylesheet">
  <link href="{{url('/js/iCheck/skins/square/red.css')}}" rel="stylesheet">
  <link href="{{url('/js/iCheck/skins/square/blue.css')}}" rel="stylesheet">

  <!--主页 日历-->
<link href="{{url('/css/clndr.css')}}" rel="stylesheet">

  <!--莫里斯图表 -->
<link rel="stylesheet" href="{{url('/js/morris-chart/morris.css')}}">

  <!--公共样式-->
<link href="{{url('/css/style.css')}}" rel="stylesheet">
<link href="{{url('/css/style-responsive.css')}}" rel="stylesheet">
    @show




  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">

<section>
    <!--  左侧边栏开始 -->
    <div class="left-side sticky-left-side">

        <!--图标开始-->
        <div class="logo">
            <a href="index.html"><img src="{{ url('/images/logo.png') }}" alt=""></a>
        </div>

        <div class="logo-icon text-center">
            <a href="index.html"><img src="{{ url('/images/logo_icon.png') }}" alt=""></a>
        </div>
        <!--Logo和图标 结束-->

        <div class="left-side-inner">
        <!-- 侧边栏开始 -->
            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="/index.html"><i class="fa fa-home"></i> <span>主页</span></a></li>
                <li class="menu-list"><a href=""><i class="fa fa-laptop"></i> <span>布局样式</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="blank_page.html"> 空白页 </a></li>
                        <li><a href="boxed_view.html"> 盒子 </a></li>
                        <li><a href="leftmenu_collapsed_view.html"> 隐藏侧边栏</a></li>
                        <li><a href="horizontal_menu.html"> 横导航栏 </a></li>

                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>用户管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/admin/user/index')}}"> 用户信息 </a></li>
                        <li><a href="{{url('/admin/user/add')}}"> 添加用户 </a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>分类管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/admin/cate/index')}}"> 分类信息 </a></li>
                        <li><a href="{{url('/admin/cate/add')}}"> 添加分类 </a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>文章管理</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/admin/article/index')}}"> 基本信息 </a></li>
                        <li><a href="{{url('/admin/article/add')}}"> 添加文章 </a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>评论</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="{{url('/admin/comment/index')}}"> 基本信息 </a></li>
                        <li><a href="{{url('/admin/comment/add')}}"> 添加评论 </a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href=""><i class="fa fa-book"></i> <span>收藏</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="general.html"> 基本信息 </a></li>
                        <li><a href="buttons.html"> 添加收藏 </a></li>
                    </ul>
                </li>
                </ul>
            <!--sidebar nav end-->
        </div>
    </div>
    <!-- left side end-->
    <!-- main content start-->
    <div class="main-content" >

        <!-- header section start-->
        <div class="header-section">

            <!--toggle button start-->
            <a class="toggle-btn"><i class="fa fa-bars"></i></a>
            <!--toggle button end-->

            <!--search start-->
            <form class="searchform" action="index.html" method="post">
                <input type="text" class="form-control" name="keyword" placeholder="搜索" />
            </form>
            <!--search end-->
            <!--notification menu start -->
            <div class="menu-right">
                <ul class="notification-menu">
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">你有1封新邮件 </h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="thumb"><img src="{{url('/images/photos/user1.png') }}" alt="" /></span>
                                        <span class="desc">
                                          <span class="name">姓名<span class="badge badge-success">new</span></span> 
                                          <!-- 当前未读取的消息，以倒叙显示 -->
                                          <span class="msg">当前邮件的内容...</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="new"><a href="">查看所有邮件</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle info-number" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="badge">1</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-head pull-right">
                            <h5 class="title">通知</h5>
                            <ul class="dropdown-list normal-list">
                                <li class="new">
                                    <a href="">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        <span class="name">有条新消息  </span>
                                        <!-- 当前读取的消息，以倒叙模式显示 -->
                                        <em class="small">34 分钟前</em>
                                    </a>
                                </li>
                                <li class="new"><a href="">显示所有通知</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('/images/photos/user-avatar.png') }}" alt="" />
                            登录ID
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                            <!-- <li><a href="#"><i class="fa fa-user"></i>  外观</a></li> -->
                            <li><a href="#"><i class="fa fa-cog"></i>  设置</a></li>
                            <li><a href="#"><i class="fa fa-sign-out"></i> 登出</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!--notification menu end -->
           
        </div>
        <!-- header section end-->
         <div class="page-heading">
         @section('breadcrumb') <!-- 对列表进行显示-->
            <h3>
                主页
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="{{ url('/admin') }}">主页</a>
                </li>
                <li>
                    <a href="#">日期表</a>
                </li>
                <li class="active"> 动态列表 </li>
            </ul>
        @show
        
            <div class="state-info">
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>网站年支出</span>
                            <h3 class="red-txt">￥ 100.00</h3>
                        </div>
                        <div id="income" class="chart-bar"></div>
                    </div>
                </section>
                <section class="panel">
                    <div class="panel-body">
                        <div class="summary">
                            <span>网站年收入</span>
                            <h3 class="green-txt">￥ 100.00</h3>
                        </div>
                        <div id="expense" class="chart-bar"></div>
                    </div>
                </section>
            </div>
        <!-- page heading end-->
        </div>
            @section('contents')
            <!--body wrapper start-->
        <div class="wrapper">  <!-- wrapper 盒子  statistics 统计-->
            <div class="row">
                <div class="col-md-6">
                    <!--statistics start-->
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel purple">
                                <div class="symbol">
                                    <i class="fa fa-gavel"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">230</div>
                                    <div class="title">新发布的博客</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel red">
                                <div class="symbol">
                                    <i class="fa fa-tags"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">3490</div>
                                    <div class="title">新评论</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row state-overview">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel blue">
                                <div class="symbol">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">22014</div>
                                    <div class="title"> 博客总数量 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12 col-sm-6">
                            <div class="panel green">
                                <div class="symbol">
                                    <i class="fa fa-eye"></i>
                                </div>
                                <div class="state-value">
                                    <div class="value">390</div>
                                    <div class="title"> 访问网站人数 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--statistics end-->
                </div>
                <div class="col-md-6">
                    <!--more statistics box start-->
                    <div class="panel deep-purple-box">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                    <div id="graph-donut" class="revenue-graph"></div>

                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <ul class="bar-legend">
                                        <li><span class="blue"></span> 访问量 </li>
                                        <li><span class="green"></span> 点击量 </li>
                                        <li><span class="purple"></span> 分享量 </li>
                                        <li><span class="red"></span> 注销量 </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--more statistics box end-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="row revenue-states">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <h4>每月收入报告</h4>
                                    <div class="icheck">
                                        <div class="square-red single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox" checked>
                                                <label>线上</label>
                                            </div>
                                        </div>
                                        <div class="square-blue single-row">
                                            <div class="checkbox ">
                                                <input type="checkbox">
                                                <label> 线下 </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <ul class="revenue-nav">
                                        <li><a href="#">每周</a></li>
                                        <li><a href="#">每月</a></li>
                                        <li class="active"><a href="#">每年</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="clearfix">
                                        <div id="main-chart-legend" class="pull-right">
                                        </div>
                                    </div>

                                    <div id="main-chart">
                                        <div id="main-chart-container" class="main-chart">
                                        </div>
                                    </div>
                                    <ul class="revenue-short-info">
                                        <li>
                                            <h1 class="red">15%</h1>
                                            <p>服务器载荷</p>
                                        </li>
                                        <li>
                                            <h1 class="purple">30%</h1>
                                            <p>硬盘空间</p>
                                        </li>
                                        <li>
                                            <h1 class="green">84%</h1>
                                            <p>转移量</p>
                                        </li>
                                        <li>
                                            <h1 class="blue">28%</h1>
                                            <p>温度</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            目标进程
                            <span class="tools pull-right">
                                <a href="javascript:;" class="fa fa-chevron-down"></a>
                                <a href="javascript:;" class="fa fa-times"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="goal-progress">
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{ url('/images/photos/user1.png') }}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">小明</a> - 项目领导人
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{ url('/images/photos/user2.png') }}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">小颖</a> - 销售人员
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                                <span class="">91%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{ url('/images/photos/user3.png') }}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">小强</a> - 技术支持
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="">40%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{ url('/images/photos/user4.png') }}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">小熊</a> - 市场推广
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="">20%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="prog-avatar">
                                        <img src="{{ url('/images/photos/user5.png') }}" alt=""/>
                                    </div>
                                    <div class="details">
                                        <div class="title">
                                            <a href="#">快快快</a> - 技术支持
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                <span class="">45%</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center"><a href="#">查看所有目标</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <h4 class="pros-title">预期 <span>主导</span></h4>
                            <div class="row">
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-1"></div>
                                    <p class="p-chart-title">笔记本</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-2"></div>
                                    <p class="p-chart-title">手机</p>
                                </div>
                                <div class="col-sm-4 col-xs-4">
                                    <div id="p-lead-3"></div>
                                    <p class="p-chart-title">平板</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body extra-pad">
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">访问量</div>
                                <div class="v-value">10,090</div>
                                <div id="visit-1"></div>
                                <div class="v-info">页/访问</div>
                            </div>
                            <div class="col-sm-6 col-xs-6">
                                <div class="v-title">绝对造访人次</div>
                                <div class="v-value">8,173</div>
                                <div id="visit-2"></div>
                                <div class="v-info">平均持续访问量</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="panel green-box">
                        <div class="panel-body extra-pad">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="79">
                                            <span class="percent">79% <span class="sm">新访问量</span></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="knob">
                                        <span class="chart" data-percent="56">
                                            <span class="percent">56% <span class="sm">弹出率</span></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="calendar-block ">
                                <div class="cal1">

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                        <header class="panel-heading">
                            任务清单
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <ul class="to-do-list" id="sortable-todo">
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check"/>
                                        <label for="todo-check"></label>
                                    </div>
                                    <p class="todo-title">
                                        主页计划和装饰声明
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check1"/>
                                        <label for="todo-check1"></label>
                                    </div>
                                    <p class="todo-title">
                                        准备新线框设计
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check2"/>
                                        <label for="todo-check2"></label>
                                    </div>
                                    <p class="todo-title">
                                        UI完美设计部分分区
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check3"/>
                                        <label for="todo-check3"></label>
                                    </div>
                                    <p class="todo-title">
                                        代码配置设计
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <span class="drag-marker">
                                    <i></i>
                                    </span>
                                    <div class="todo-check pull-left">
                                        <input type="checkbox" value="None" id="todo-check4"/>
                                        <label for="todo-check4"></label>
                                    </div>
                                    <p class="todo-title">
                                        区块和发展配置
                                    </p>
                                    <div class="todo-actionlist pull-right clearfix">

                                        <a href="#" class="todo-remove"><i class="fa fa-times"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" class="form-inline">
                                        <div class="form-group todo-entry">
                                            <input type="text" placeholder="添加任务计划" class="form-control" style="width: 100%">
                                        </div>
                                        <button class="btn btn-primary pull-right" type="submit">+</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel blue-box twt-info">
                        <div class="panel-body">
                            <h3>2016年7月9日</h3>

                            <p>NaN是一个新模型
                            主页 <a href="#">http://t.co/3laCVziTw4</a>
                            4天 前</p>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-body">
                            <div class="media usr-info">
                                <a href="#" class="pull-left">
                                    <img class="thumb" src="{{url('/images/photos/user2.png') }}" alt=""/>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Mila Watson</h4>
                                    <span>高级UI设计师</span>
                                    <p>从事本网站的网站和应用设计</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer custom-trq-footer">
                            <ul class="user-states">
                                <li>
                                    <i class="fa fa-heart"></i> 127
                                </li>
                                <li>
                                    <i class="fa fa-eye"></i> 853
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> 311
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--body wrapper end-->
        @show
        <!--footer section start-->
        @section('footer')
        <footer>
            2016 &copy; NaN by <a href="http://www.mycodes.net/" target="_blank">NaN工作室</a>
        </footer>
        <!--footer section end-->
        @show

    </div>
    <!-- main content end-->


</section>

@section('js')
<!-- Placed js at the end of the document so the pages load faster -->
<script src="{{ url('/js/jquery-1.10.2.min.js') }}"></script>
<script src="{{ url('/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<script src="{{ url('/js/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ url('/js/bootstrap.min.js') }}"></script>
<script src="{{ url('/js/modernizr.min.js') }}"></script>
<script src="{{ url('/js/jquery.nicescroll.js') }}"></script>

<!--easy pie chart-->
<script src="{{ url('/js/easypiechart/jquery.easypiechart.js') }}"></script>
<script src="{{ url('/js/easypiechart/easypiechart-init.js') }}"></script>

<!--Sparkline Chart-->
<script src="{{ url('/js/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ url('/js/sparkline/sparkline-init.js') }}"></script>

<!--icheck -->
<script src="{{ url('/js/iCheck/jquery.icheck.js') }}"></script>
<script src="{{ url('/js/icheck-init.js') }}"></script>

<!-- jQuery Flot Chart-->
<script src="{{ url('/js/flot-chart/jquery.flot.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.tooltip.js') }}"></script>
<script src="{{ url('/js/flot-chart/jquery.flot.resize.js') }}"></script>


<!--Morris Chart-->
<script src="{{ url('/js/morris-chart/morris.js') }}"></script>
<script src="{{ url('/js/morris-chart/raphael-min.js') }}"></script>

<!--Calendar-->
<script src="{{ url('/js/calendar/clndr.js') }}"></script>
<script src="{{ url('/js/calendar/evnt.calendar.init.js') }}"></script>
<script src="{{ url('/js/calendar/moment-2.2.1.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

<!--common scripts for all pages-->
<script src="{{ url('/js/scripts.js') }}"></script>

<!--Dashboard Charts-->
<script src="{{ url('/js/dashboard-chart-init.js') }}"></script>
@show

</body>
</html>