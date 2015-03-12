<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|Open Center管理后台</title>
    <link href="/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">


    <!--zui-->
    <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/zui/css/zui.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/admin.css" media="all">
    <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/ext.css" media="all">
    <!--zui end-->

    <!--
        <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/base.css" media="all">
        <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/common.css" media="all"-->
    <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/module.css">
    <link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/style.css" media="all">
    <!--<link rel="stylesheet" type="text/css" href="/Application/Platform/Static/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://static.yala.com/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="http://static.yala.com/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/Application/Platform/Static/js/jquery.mousewheel.js"></script>
    <!--<![endif]-->
    
    <script type="text/javascript">
        var ThinkPHP = window.Think = {
            "ROOT": "", //当前网站地址
            "APP": "/index.php", //当前项目地址
            "PUBLIC": "/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"],
            'URL_MODEL': "<?php echo C('URL_MODEL');?>"
        }
    </script>
</head>
<body>
<style>

</style>
<div class="panel-header">
    <nav class="navbar navbar-inverse admin-bar" role="navigation">
        <div class="navbar-header">
            <a href="<?php echo U('Index/index');?>" class="navbar-brand">
                <img class="logo" src="/Application/Platform/Static/images/logo.png">
                管理后台
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-example">
            <ul id="nav_bar" class="nav navbar-nav">
                <li data-id="1" class="">
                    <a href="/index.php?s=/admin/index/index.html">
                        <i class="icon-home"></i>&nbsp;首页
                    </a>
                </li>
                <li data-id="16" class="active">
                    <a href="/index.php?s=/admin/user/index.html">
                    <i class="icon-group"></i>&nbsp;用户</a>
                </li>
                <li data-id="43" class="">
                    <a href="/index.php?s=/admin/addons/index.html">
                        <i class="icon-cogs"></i>&nbsp;插件</a>
                </li>
                <li data-id="68" class="">
                    <a href="/index.php?s=/admin/config/group.html">
                        <i class="icon-windows"></i>&nbsp;系统
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript:;"  onclick="clear_cache()"><i class="icon-trash"></i> 清空缓存</a></li>
                <li><a target="_blank" href="<?php echo U('Home/Index/index');?>"><i class="icon-copy"></i> 打开前台</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>
                        <?php echo session('user_auth.username');?> <b
                                class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
                        <li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('Public/logout');?>">退出</a></li>
                    </ul>
                </li>
                <script>
                    function clear_cache() {
                        var msg = new $.Messager('清理缓存成功。', {placement: 'bottom'});
                        $.get('/cc.php');
                        msg.show()
                    }
                </script>
            </ul>
        </div>
    </nav>

    <div class="admin-title">

    </div>

</div>

<div class="panel-main">

    <div class="">


    <div class="clearfix " style="">
        <div class="sub_menu_wrapper" style="background: rgb(245, 246, 247); bottom: -10px;top: 0;position: absolute;width: 180px;overflow: auto">
                <div>
                    <nav id="sub_menu" class="menu" data-toggle="menu">
                        <ul class="nav nav-primary">
                            
                                <!--     -->
                                <!-- 子导航 -->
                                    <li class="nav-parent">
                                            <a href="#">
                                                用户管理                                            <i class="icon-chevron-right nav-parent-fold-icon"></i><i class="icon-chevron-right nav-parent-fold-icon"></i></a>
                                            <ul class="nav" style="display: none;">
                                                <li class="active">
                                                        <a href="/index.php?s=/admin/user/index.html">用户信息</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/user/profile.html">扩展资料</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/user/expandinfo_select.html">用户扩展资料列表</a>
                                                    </li>                                            </ul>
                                        </li>                                    <!-- /子导航 --><!-- 子导航 -->
                                    <li class="nav-parent">
                                            <a href="#">
                                                行为管理                                            <i class="icon-chevron-right nav-parent-fold-icon"></i><i class="icon-chevron-right nav-parent-fold-icon"></i></a>
                                            <ul class="nav" style="display: none;">
                                                <li>
                                                        <a href="/index.php?s=/admin/user/action.html">用户行为</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/action/actionlog.html">行为日志</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/user/scorelist.html">积分类型列表</a>
                                                    </li>                                            </ul>
                                        </li>                                    <!-- /子导航 --><!-- 子导航 -->
                                    <li class="nav-parent">
                                            <a href="#">
                                                权限管理                                            <i class="icon-chevron-right nav-parent-fold-icon"></i><i class="icon-chevron-right nav-parent-fold-icon"></i></a>
                                            <ul class="nav" style="display: none;">
                                                <li>
                                                        <a href="/index.php?s=/admin/auth_manager/index.html">权限管理</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/menu/index.html">菜单管理</a>
                                                    </li>                                            </ul>
                                        </li>                                    <!-- /子导航 --><!-- 子导航 -->
                                                                        <!-- /子导航 --><!-- 子导航 -->
                                    <li class="nav-parent">
                                            <a href="#">
                                                头衔管理                                            <i class="icon-chevron-right nav-parent-fold-icon"></i><i class="icon-chevron-right nav-parent-fold-icon"></i></a>
                                            <ul class="nav" style="display: none;">
                                                <li>
                                                        <a href="/index.php?s=/admin/rank/userlist.html">查看用户</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/rank/rankverify.html">待审核用户头衔</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/rank/rankverifyfailure.html">被驳回的头衔申请</a>
                                                    </li><li>
                                                        <a href="/index.php?s=/admin/rank/index.html">头衔列表</a>
                                                    </li>                                            </ul>
                                        </li>                                    <!-- /子导航 --><!-- 子导航 -->
                                    <li class="nav-parent">
                                            <a href="#">
                                                注册配置                                            <i class="icon-chevron-right nav-parent-fold-icon"></i><i class="icon-chevron-right nav-parent-fold-icon"></i></a>
                                            <ul class="nav" style="display: none;">
                                                <li>
                                                        <a href="/index.php?s=/admin/user_config/index.html">用户注册配置</a>
                                                    </li>                                            </ul>
                                        </li>                                    <!-- /子导航 -->
                            

                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <div id="main-content" class="" style="padding:10px;padding-left:0;padding-bottom:10px;left: 180px;position:absolute;right: 0;bottom: 0;top: 0;overflow: auto">
            <div id="top-alert" class="fixed alert alert-error" style="display: none;">
                <button class="close fixed" style="margin-top: 4px;">&times;</button>
                <div class="alert-content">这是内容</div>
            </div>
            <div id="main" style="overflow-y:auto;overflow-x:hidden;">
                
                    <!-- nav -->
                    <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                            <span>您的位置:</span>
                            <?php $i = '1'; ?>
                            <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                                    <?php else: ?>
                                    <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                                <?php $i = $i+1; endforeach; endif; ?>
                        </div><?php endif; ?>
                    <!-- nav -->
                

                <div class="admin-main-container">
                    

    <div class="with-padding-lg">
        <div class="count clearfix">
            <div class="col-xs-4 text-center">
                <a href="<?php echo U('action/actionlog');?>" class="with-padding-lg bg-special">
                    <i class="icon-tasks"></i>
                    <?php echo ($count["today_action_log"]); ?>
                    <br/>
                    今日用户行为
                </a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="with-padding-lg bg-info" href="<?php echo U('user/index');?>"><i class="icon-user"></i>
                    <?php echo ($count["today_user"]); ?> <br/>
                    今日新增用户数</a>
            </div>
            <div class="col-xs-4 text-center">
                <a class="with-padding-lg bg-danger" style="background: rgb(96, 210, 149)" href="<?php echo U('user/index');?>">
                    <i class="icon-group">
                    </i>
                    <?php echo ($count["total_user"]); ?>
                    <br/>
                    总用户数
                </a>
            </div>
        </div>
    </div>

    <div class="with-padding-lg" style="position: relative">
        <button class="btn  pull-right" data-toggle="modal" data-target="#settingCount"
                style="position: absolute;right: 15px;z-index: 999">
            <i class="icon-cog"></i>
            设置
        </button>
        <div id="myChart" height="400"></div>
    </div>

    <div class="clearfix">
        <div class="col-xs-4">

        </div>
        <div class="col-xs-4">

        </div>
        <div class="col-xs-4">

        </div>

    </div>
    <script>
        $('#main-content').css('left', 0);
        $(function () {
            $('#myChart').highcharts({
                chart: {
                    type: "spline",
                    style: {
                        fontFamily: '"Microsoft Yahei", "宋体"'
                    }
                },
                title: {
                    text: '最近<?php echo ($count["count_day"]); ?>天用户增长数',
                    x: -20 //center
                },
                xAxis: {
                    categories: eval('<?php echo ($count["last_day"]["days"]); ?>'),
                    title: {
                        text: '当天新注册会员',
                        enabled: false
                    }
                },
                yAxis: {
                    title: ''
                },
                legend: {
                    layout: 'vertical',
                    verticalAlign: 'middle',
                    borderWidth: 0,
                    enabled: false
                },
                series: [{
                    name: '当天新注册会员',
                    data: eval('<?php echo ($count["last_day"]["data"]); ?>'),
                    enable: true
                }], credits: {enabled: false}
            });
        });


    </script>


                </div>

            </div>
        </div>
    </div>
    </div>
</div>

<!-- 内容区 -->

<!-- /内容区 -->
<script type="text/javascript">
    (function () {
        var ThinkPHP = window.Think = {
            "ROOT": "", //当前网站地址
            "APP": "/index.php", //当前项目地址
            "PUBLIC": "/Public", //项目公共目录地址
            "DEEP": "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL": ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR": ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
</script>
<script type="text/javascript" src="http://static.yala.com/static/think.js"></script>

<!--zui-->
<script type="text/javascript" src="/Application/Platform/Static/js/common.js"></script>
<script type="text/javascript" src="/Application/Platform/Static/zui/js/zui.js"></script>
<script type="text/javascript" src="/Application/Platform/Static/zui/lib/autotrigger/autotrigger.min.js"></script>
<!--zui end-->
<link rel="stylesheet" type="text/css" href="/Application/Platform/Static/js/kanban/kanban.css" media="all">
<script type="text/javascript" src="/Application/Platform/Static/js/kanban/kanban.js"></script>
<script type="text/javascript">
    +function () {
        var $window = $(window), $subnav = $("#subnav"), url;
        $window.resize(function () {
            $("#main").css("min-height", $window.height() - 130);
        }).resize();


        // 导航栏超出窗口高度后的模拟滚动条
        var sHeight = $(".sidebar").height();
        var subHeight = $(".subnav").height();
        var diff = subHeight - sHeight; //250
        var sub = $(".subnav");
        if (diff > 0) {
            $(window).mousewheel(function (event, delta) {
                if (delta > 0) {
                    if (parseInt(sub.css('marginTop')) > -10) {
                        sub.css('marginTop', '0px');
                    } else {
                        sub.css('marginTop', '+=' + 10);
                    }
                } else {
                    if (parseInt(sub.css('marginTop')) < '-' + (diff - 10)) {
                        sub.css('marginTop', '-' + (diff - 10));
                    } else {
                        sub.css('marginTop', '-=' + 10);
                    }
                }
            });
        }
    }();
    highlight_subnav("<?php echo U('Admin'.'/'.CONTROLLER_NAME.'/'.ACTION_NAME,$_GET);?>")
</script>


    <script type="text/javascript" src="/Application/Platform/Static/zui/lib/highchart/highcharts.js"></script>


    <div class="modal fade" id="settingCount">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                            class="sr-only">关闭</span></button>
                    <h4 class="modal-title">设置统计图</h4>
                </div>
                <div class="modal-body">
                    <div class="with-padding">
                        <label>默认展示天数 </label><input class="form-control" name="count_day" value="<?php echo ($count["count_day"]); ?>">

                    </div>


                </div>
                <div class="modal-footer">
                    <button class="btn " data-role="saveCountSetting">
                        <i class="icon-ok"></i> 保存
                    </button>
                    <button class="btn " data-dismiss="modal">
                        <i class="icon-remove"></i> 取消
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('[data-role=saveCountSetting]').click(function () {
            $.post("/", {count_day: $('[name=count_day]').val()}, function (msg) {
                handleAjax(msg);
            });
        })
    </script>

</body>
</html>