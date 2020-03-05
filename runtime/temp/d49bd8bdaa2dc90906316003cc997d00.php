<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:83:"F:\phpstudy\PHPTutorial\WWW\quanx\public/../application/admin\view\public\alert.htm";i:1583301190;s:73:"F:\phpstudy\PHPTutorial\WWW\quanx\application\admin\view\public\tools.htm";i:1531100454;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
   <!-- 新 Bootstrap 核心 CSS 文件 -->
   <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <!-- mycp CSS 文件 -->
   <link rel="stylesheet" href="/admin/style/mycp.css">
   <link rel="stylesheet" href="/admin/style/bootstrap-datetimepicker.min.css">
   <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
   <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
   <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
   <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <!-- mycp JS 文件 -->
   <script src="/admin/style/mycp.js"></script>
</head>
<body>
<!-- tools begin --> 
<!-- alert begin -->
<div id="alert" class="alert-box modal fade bs-example-modal-sm"
     tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
     style="margin-top:200px;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
      提示
      </div>
      <div class="modal-body">
        <div class="info">你好吗</div>
        <div class="btn_box">
          <input type="hidden" id="url"/>  
          <button onclick="alertSubmit();" type="button" class="btn btn-primary" data-dismiss="modal">确认</button>
        </div>    
      </div> 
    </div>   
  </div>
</div>
<!-- alert end -->
<!-- confirm begin -->
<div id="confirm" class="alert-box modal fade bs-example-modal-sm" tabindex="-1"
     role="dialog" aria-labelledby="mySmallModalLabel" >
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
      请确认<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="info">你好吗</div>
        <div class="btn_box">
          <input type="hidden" id="url"/>  
          <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
          <button type="button" onclick="confirmSubmit();" class="btn btn-primary" data-dismiss="modal">确认</button>
        </div>    
      </div> 
    </div>   
  </div>
</div>
<!-- confirm end -->
<!-- Small modal end -->
<!-- tools end -->
<script type="text/javascript">
    jsAlert("<?php echo $info; ?>","<?php echo $url; ?>");
</script>
</body>
</html>