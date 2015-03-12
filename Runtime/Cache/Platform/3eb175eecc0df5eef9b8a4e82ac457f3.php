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
                    
    <!-- 标题栏 -->
    <div class="main-title">
        <h2>用户列表</h2>
    </div>
    <div class="clearfix">
        <div class="col-xs-10">
            <button class="btn ajax-post" url="<?php echo U('User/changeStatus',array('method'=>'resumeUser'));?>"
                    target-form="ids">启 用
            </button>
            <button class="btn ajax-post" url="<?php echo U('User/changeStatus',array('method'=>'forbidUser'));?>"
                    target-form="ids">禁 用
            </button>
            <button class="btn ajax-post confirm" url="<?php echo U('User/changeStatus',array('method'=>'deleteUser'));?>"
                    target-form="ids">删 除
            </button>

            <button class="btn " onclick="post_select_form()"
                    target-form="ids">选择用户分组
            </button>
        </div>
        <script>
            function post_select_form(){
                var ids=$('.ids').serialize();
                $.post("<?php echo U('user/changeGroup');?>",ids,function(msg){
                    (new ModalTrigger({custom: msg,title:'选择用户分组'})).show();
                })
            }
        </script>

        <!-- 高级搜索 -->
        <div class="search-form  col-xs-2 text-right">
            <div class="input-group">
                <input type="text" name="nickname" class="search-input form-control" value="<?php echo I('nickname');?>"
                       placeholder="请输入用户昵称或者ID">
                                 <span class="input-group-btn">  <a class="btn btn-default" href="javascript:;" id="search" url="<?php echo U('index');?>"><i class="icon-search"></i></a></span>
            </div>
        </div>
    </div>
    <!-- 数据列表 -->
    <div class="data-table with-padding">
        <table class="table table-bordered table-striped ">
            <thead>
            <tr>
                <th class="row-selected row-selected"><input class="check-all" type="checkbox"/></th>
                <th class="">UID</th>
                <th class="">昵称</th>
                <th class="">积分</th>
                <th class="">登录次数</th>
                <th class="">最后登录时间</th>
                <th class="">最后登录IP</th>
                <th class="">状态</th>
                <th class="">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(!empty($_list)): if(is_array($_list)): $i = 0; $__LIST__ = $_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><input class="ids" type="checkbox" name="id[]" value="<?php echo ($vo["uid"]); ?>"/></td>
                        <td><?php echo ($vo["uid"]); ?></td>
                        <td><a href="<?php echo U('Admin/User/expandinfo_details',array('uid'=>$vo['uid']));?>" ><?php echo (op_t($vo["nickname"])); ?></a></td>
                        <td><?php echo ($vo["score"]); ?></td>
                        <td><?php echo ($vo["login"]); ?></td>
                        <td><span><?php echo (time_format($vo["last_login_time"])); ?></span></td>
                        <td><a href="http://ip138.com/ips138.asp?ip=<?php echo (long2ip($vo['last_login_ip'])); ?>"><?php echo (long2ip($vo['last_login_ip'])); ?></a>
                        </td>
                        <td><?php echo ($vo["status_text"]); ?></td>

                        <td>
                            <?php if(($vo["status"]) == "1"): ?><a href="<?php echo U('User/changeStatus?method=forbidUser&id='.$vo['uid']);?>"
                                   class="ajax-get">禁用</a>
                                <?php else: ?>
                                <a href="<?php echo U('User/changeStatus?method=resumeUser&id='.$vo['uid']);?>"
                                   class="ajax-get">启用</a><?php endif; ?>
                            <a href="<?php echo U('AuthManager/group?uid='.$vo['uid']);?>" class="authorize">授权</a>
                            <a href="<?php echo U('User/changeStatus?method=deleteUser&id='.$vo['uid']);?>"
                               class="confirm ajax-get">删除</a>
                        </td>

                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <?php else: ?>
                <td colspan="9" class="text-center"> aOh! 暂时还没有内容!</td><?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="with-padding">
        <?php echo ($_page); ?>
    </div>

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


    <script src="http://static.yala.com/static/thinkbox/jquery.thinkbox.js"></script>

    <script type="text/javascript">
        //搜索功能
        $("#search").click(function () {
            var url = $(this).attr('url');
            var query = $('.search-form').find('input').serialize();
            query = query.replace(/(&|^)(\w*?\d*?\-*?_*?)*?=?((?=&)|(?=$))/g, '');
            query = query.replace(/^&/g, '');
            if (url.indexOf('?') > 0) {
                url += '&' + query;
            } else {
                url += '?' + query;
            }
            window.location.href = url;
        });
        //回车搜索
        $(".search-input").keyup(function (e) {
            if (e.keyCode === 13) {
                $("#search").click();
                return false;
            }
        });
        //导航高亮
        highlight_subnav("<?php echo U('User/index');?>");
    </script>



</body>
</html>