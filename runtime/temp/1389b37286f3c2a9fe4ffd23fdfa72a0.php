<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:80:"F:\phpstudy\PHPTutorial\WWW\quanx\public/../application/admin\view\cate\list.htm";i:1583402422;s:73:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\css_r.htm";i:1583142395;s:71:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\top.htm";i:1583374509;s:72:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\left.htm";i:1583392912;s:72:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\js_r.htm";i:1583142063;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
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

    <style>
        .render {
            width: 100%;
            margin-right: 20%;
            padding-top: 10px;
            padding-left: 80%;
        }
    </style>
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
                <span class="menu-text">栏目管理</span>
                <i class="menu-expand"></i>
            </a>
            <ul class="submenu">
                <li>
                    <a href="<?php echo url('cate/getCateList'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    </span>
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
                        <a href="#">栏目管理</a>
                    </li>
                                        <li class="active">栏目列表</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<button type="button" tooltip="添加用户" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('cate/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <div class="widget-body">
                <div class="flip-scroll">
                    <table class="table table-bordered table-hover">
                        <thead class="">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">栏目名称</th>
                                <th class="text-center">栏目类型</th>
                                <th class="text-center">栏目关键词</th>
                                <th class="text-center">栏目描述</th>
                                <th class="text-center">栏目内容</th>
                                <th class="text-center">是否推荐</th>
                                <th class="text-center">是否推荐</th>
                                <th class="text-center">上级栏目id</th>
                                <th class="text-center">排序</th>
                                <th class="text-center">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?>
                        <tr>
                                <td align="center"><?php echo $value['id']; ?></td>
                                <td align="left"><?php echo str_repeat('|---',$value['level']); ?><?php echo $value['catename']; ?></td>
                                <td align="center">
                                    <?php if($value['type'] == 1): ?> 列表
                                    <?php else: ?>单页
                                    <?php endif; ?>

                                </td>
                                <td align="center"><?php echo $value['keywords']; ?></td>
                                <td align="center"><?php echo $value['desc']; ?></td>
                                <td align="center"><?php echo $value['content']; ?></td>
                                <td align="center"><?php echo $value['rec_index']; ?></td>
                                <td align="center"><?php echo $value['rec_bottom']; ?></td>
                                <td align="center"><?php echo $value['pid']; ?></td>
                                <td align="center"><?php echo $value['sort']; ?></td>
                                <td align="center">
                                    <a href="<?php echo url('cate/edit',array('id'=>$value['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                        <i class="fa fa-edit"></i> 编辑
                                    </a>
                                    <a href="#" onClick="warning('确实要删除吗', '<?php echo url('cate/del',array('id'=>$value['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                        <i class="fa fa-trash-o"></i> 删除
                                    </a>
                                </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                                    </tbody>
                    </table>
                    <div class="render">
                    </div>

                </div>
                <div>
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