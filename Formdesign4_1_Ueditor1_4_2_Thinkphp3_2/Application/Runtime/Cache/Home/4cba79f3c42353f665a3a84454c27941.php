<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
    
    <title>实例演示 Ueditor FormDesign Plugins -leipi.org</title>
    <meta name="keyword" content="ueditor formdesign plugins,ueditor扩展,web表单设计器,高级表单设计器,Leipi Form Design,web form设计器,web form designer">
    <meta name="description" content="javascript jquery ueditor php表单设计器实例演示与下载！">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="leipi.org">
    <link href="/Public/css/bootstrap/css/bootstrap.css?<?php echo ($_cjv); ?>" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap/css/bootstrap-ie6.css?<?php echo ($_cjv); ?>">
    <![endif]-->
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap/css/ie.css?<?php echo ($_cjv); ?>">
    <![endif]-->
    <link href="/Public/css/site.css?<?php echo ($_cjv); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        var _root='<?php echo ($_site_url); echo U('/');?>',_controller = '<?php echo ($_controller); ?>';
    </script>
    

 </head>
<body>

<!-- fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="http://www.leipi.org" target="_blank">雷劈网</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
            <li <?php if($_controller == 'index'): ?>class="active"<?php endif; ?>><a href="/">表单设计器</a></li>
            <li <?php if($_controller == 'demo'): ?>class="active"<?php endif; ?>><a href="<?php echo U('/demo');?>">实例</a></li>
            <li><a href="http://formdesign.leipi.org/doc.html" target="_blank">文档</a></li>
            <li><a href="http://formdesign.leipi.org/downloads.html" target="_blank">下载</a></li>
            <li><a href="http://formdesign.leipi.org/feedback.html" target="_blank">公开讨论</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


	


    <div class="bs-header" id="content">
        <div class="container">

            <h1>表单设计器使用实例演示</h1>
            <p>
                表单设计器通常在、OA系统、问卷调查系统、考试系统、等领域发挥着重要作用！<br /> 本实例仅方便大家了解使用方法和简化二次开发，你可以任意修改使功能无限强大！
            </p>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">表单设计器</a> <span class="divider">/</span></li>
                <li class="active">实例</li>
            </ol>
        </div>

        <div class="row">
            <p>
                <a href="<?php echo U('/demo/add');?>" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span>
                    添加</a>
            </p>

            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th>表单名称</th>
                    <th>表单描述</th>
                    <th>字段数</th>
                    <th>最后修改时间</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["form_name"]); ?></td>
                        <td><?php echo ($vo["form_desc"]); ?></td>
                        <td><?php echo ($vo["fields"]); ?></td>
                        <td><?php echo date('Y/m/d H:i',$vo['updatetime']);?></td>
                        <td><?php echo date('Y/m/d H:i',$vo['dateline']);?></td>
                        <td>
                            <?php if($vo["fields"] > 0): ?><a href="<?php echo U('/demodata/index/form_id/'.$vo['id']);?>" target="_blank"><span class="glyphicon glyphicon-list"></span>
                                    表单数据</a>&nbsp;&nbsp;&nbsp;&nbsp;<?php endif; ?>
                            <a href="<?php echo U('/demo/formdesign/form_id/'.$vo['id']);?>" target="_blank"><span class="glyphicon glyphicon-new-window"></span>
                                设计</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('/demo/preview/form_id/'.$vo['id']);?>" target="_blank"><span
                                    class="glyphicon glyphicon-eye-open"></span> 预览</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('/demo/edit/form_id/'.$vo['id']);?>"
                                target="_blank"><span class="glyphicon glyphicon-edit"></span> 编辑</a>
                        </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

            <?php echo ($page); ?>

        </div>
        <!--end row-->


        <div class="row">
            <hr />
            <h4>百度相关 <small>点一下就是对我们最大的赞助</small></h4>
            <script type="text/javascript">
                /*表单设计器DEMO 底960*22，创建于2014-6-25*/
                var cpro_id = "u1598625";
            </script>
            <script src="http://cpro.baidustatic.com/cpro/ui/c.js" type="text/javascript"></script>
        </div>


    </div>
    <!--end container-->




    
 <div class="bs-footer" role="contentinfo" id="bs-footer">
      <div class="container">
          <p><span class="glyphicon glyphicon-list-alt"></span> 免责声明：本站仅分享开发思路和示例代码并且乐于交流和促进网络良性发展，是非商业工具，如有疑问请加群或邮件告知，积极配合调整。</p>
          <p><span class="glyphicon glyphicon-list-alt"></span> 反馈：payonesmile@qq.com</p>
          <p><span class="glyphicon glyphicon-usd"></span> 支持：捐赠支付宝 payonesmile@qq.com 、<a href="#">捐赠记录</a></p>
          <p><span class="glyphicon glyphicon-bookmark"></span> 鸣谢：<a href="http://ueditor.baidu.com" target="_balnk">UEditor</a>、<a href="https://github.com/twbs/bootstrap/" target="_balnk">Bootstrap</a>、<a href="http://www.leipi.org" target="_balnk">雷劈网</a></p>
          <p><a href="http://www.leipi.org" title="雷劈网"><img src="http://www.leipi.org/wp-content/themes/leipi/images/leipi.png" alt="雷劈认证 icon" height="30"></a> &copy;2014 Ueditor Formdesign v4 leipi.org</p>
      </div>
</div>
    

    <!-- script end -->



<div style="display: none;">                                                                   
88888888888  88                             ad88  88                ad88888ba   8888888888   
88           ""                            d8"    88               d8"     "88  88           
88                                         88     88               8P       88  88  ____     
88aaaaa      88  8b,dPPYba,   ,adPPYba,  MM88MMM  88  8b       d8  Y8,    ,d88  88a8PPPP8b,  
88"""""      88  88P'   "Y8  a8P_____88    88     88  `8b     d8'   "PPPPPP"88  PP"     `8b  
88           88  88          8PP"""""""    88     88   `8b   d8'            8P           d8  
88           88  88          "8b,   ,aa    88     88    `8b,d8'    8b,    a8P   Y8a     a8P  
88           88  88           `"Ybbd8"'    88     88      Y88'     `"Y8888P'     "Y88888P"   
                                                          d8'                                
2014-3-15 Firefly95、Ard、xinG、Xiaoyaodaya               d8'  
</div>

<div style="width:1px;height:1px">
  <script type="text/javascript">
  var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
  document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F1e6fd3a46a5046661159c6bf55aad1cf' type='text/javascript'%3E%3C/script%3E"));
  </script>
</div>
</body>
</html>