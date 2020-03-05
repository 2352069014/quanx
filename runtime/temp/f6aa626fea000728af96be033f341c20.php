<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:87:"F:\phpstudy\PHPTutorial\WWW\quanx\public/../application/admin\view\index\edit_admin.htm";i:1583222821;s:73:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\css_r.htm";i:1583142395;s:71:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\top.htm";i:1583374509;s:72:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\left.htm";i:1583201843;s:72:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\js_r.htm";i:1583142063;}*/ ?>
<!DOCTYPE html>
<html><head>
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta charset="utf-8">
<meta name="description" content="Dashboard">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--Basic Styles-->
<link href="/admin/style/bootstrap.css" rel="stylesheet">
<link href="/admin/style/font-awesome.css" rel="stylesheet">
<link href="/admin/style/weather-icons.css" rel="stylesheet">

<!--Beyond styles-->
<link id="beyond-link" href="/admin/style/beyond.css" rel="stylesheet" type="text/css">
<link href="/admin/style/demo.css" rel="stylesheet">
<link href="/admin/style/typicons.css" rel="stylesheet">
<link href="/admin/style/animate.css" rel="stylesheet">

</head>
<body>
	<!-- 头部 -->
    <div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/admin/images/logo.png" alt="">
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo session('username'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/logout'); ?>">
                                        退出登录
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('index/edit',['id'=>\think\Request::instance()->session('id')]); ?>">
                                        修改密码
                                    </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>

	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input class="searchinput" type="text">
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li>
            <a href="http://www.chuanke.com/s2260700.html" target="_blank" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">ThinkPHP5视频教程</span>
                <i class="menu-expand"></i>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-user"></i>
                <span class="menu-text">管理员</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('index/list_r'); ?>">
                                    <span class="menu-text">
                                        管理列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-file-text"></i>
                <span class="menu-text">文档</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        文章列表                                    </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-gear"></i>
                <span class="menu-text">系统</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="/admin/document/index.html">
                                    <span class="menu-text">
                                        配置                                   </span>
                        <i class="menu-expand"></i>
                    </a>
                </li>
            </ul>
        </li>



    </ul>
    <!-- /Sidebar Menu -->
</div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="#">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('index/list_r'); ?>">用户管理</a>
                    </li>
                                        <li class="active">编辑管理员</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-header bordered-bottom bordered-blue">
                <span class="widget-caption">编辑管理员</span>
            </div>
            <div class="widget-body">
                <div id="horizontal-form">

                    <form class="form-horizontal" role="form" action="<?php echo url('index/edit',array('id'=>\think\Request::instance()->get('id'))); ?>" method="post">
                        <input type="hidden" value="<?php echo $info['id']; ?>" name="id">
                        <div class="form-group">
                            <label for="username" class="col-sm-2 control-label no-padding-right">管理员名称</label>
                            <div class="col-sm-6">
                                <input class="form-control"  placeholder="" name="name" required="" type="text" value="<?php echo $info['name']; ?>">
                            </div>
                            <p class="help-block col-sm-4 red">* 必填</p>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-2 control-label no-padding-right">管理员密码</label>
                            <div class="col-sm-6">
                                <input class="form-control" placeholder="" name="password"  type="text" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">保存信息</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    <script src="/admin/style/jquery_002.js"></script>
<script src="/admin/style/bootstrap.js"></script>
<script src="/admin/style/jquery.js"></script>
<!--Beyond Scripts-->
<script src="/admin/style/beyond.js"></script>
    


</body></html>