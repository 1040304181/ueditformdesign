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
    

    <script type="text/javascript" src="/Public/js/jquery-1.7.2.min.js?<?php echo ($_cjv); ?>"></script>

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
                表单设计器通常在、OA系统、问卷调查系统、考试系统、等领域发挥着重要作用！<br /> 您也可以尝试和操作一下，本演示禁止搜索引擎收录，SEO党飘过！
            </p>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <ol class="breadcrumb">
                <li><a href="/">表单设计器</a> <span class="divider">/</span></li>
                <li><a href="<?php echo U('/demo');?>">实例</a> <span class="divider">/</span></li>
                <li class="active">设计表单 [<?php echo ($one["form_name"]); ?>]</li>
            </ol>
        </div>


        <form method="post" id="saveform" name="saveform" action="<?php echo U('/demo/formdesign');?>" method="post">
            <input type="hidden" name="form_id" value="<?php echo ($one["id"]); ?>">
            <div class="row">
                <div class="well well-small">
                    <span class="pull-right">
                        <a href="javascript:void(0);" class="btn btn-primary btn-small" onclick="leipiFormDesign.fnReview();">预览效果</a>
                        <a href="javascript:void(0);" class="btn btn-success btn-small" id="button_save" onclick="leipiFormDesign.fnCheckForm('save');">确定保存</a>
                    </span>

                    <p>
                        一栏布局：<br /><br />
                        <button type="button" onclick="leipiFormDesign.exec('text');" class="btn btn-info">文本框</button>
                        <button type="button" onclick="leipiFormDesign.exec('textarea');" class="btn btn-info">多行文本</button>
                        <button type="button" onclick="leipiFormDesign.exec('select');" class="btn btn-info">下拉菜单</button>
                        <button type="button" onclick="leipiFormDesign.exec('radios');" class="btn btn-info">单选框</button>
                        <button type="button" onclick="leipiFormDesign.exec('checkboxs');" class="btn btn-info">复选框</button>
                        <button type="button" onclick="leipiFormDesign.exec('macros');" class="btn btn-info">宏控件</button>
                        <button type="button" onclick="leipiFormDesign.exec('progressbar');" class="btn btn-info">进度条</button>
                        <button type="button" onclick="leipiFormDesign.exec('qrcode');" class="btn btn-info">二维码</button>
                        <button type="button" onclick="leipiFormDesign.exec('listctrl');" class="btn btn-info">列表控件</button>
                        <button type="button" onclick="leipiFormDesign.exec('more');" class="btn btn-primary">一起参与...</button>
                    </p>
                </div>
                <div class="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>提醒：</strong>单选框和复选框，如：<code>{|-</code>选项<code>-|}</code>两边边界是防止误删除控件，程序会把它们替换为空，请不要手动删除！
                </div>

            </div>
            <!--end row-->
            <div class="row">
                <script id="myFormDesign" type="text/plain" style="width:100%;">
        <?php echo ($one["content"]); ?>
    </script>
            </div>
            <!--end row-->

        </form>


    </div>
    <!--end container-->


    <block name="footer_js">
        <script type="text/javascript" charset="utf-8" src="/Public/js/ueditor/ueditor.config.js?<?php echo ($_cjv); ?>"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/js/ueditor/ueditor.all.js?<?php echo ($_cjv); ?>"> </script>
        <script type="text/javascript" charset="utf-8" src="/Public/js/ueditor/lang/zh-cn/zh-cn.js?<?php echo ($_cjv); ?>"></script>
        <script type="text/javascript" charset="utf-8" src="/Public/js/ueditor/formdesign/leipi.formdesign.v4.js?<?php echo ($_cjv); ?>"></script>
        <!-- script start-->
        <script type="text/javascript">

            var leipiEditor = UE.getEditor('myFormDesign', {
                toolleipi: true,//是否显示，设计器的 toolbars
                textarea: 'design_content',
                //这里可以选择自己需要的工具按钮名称,此处仅选择如下五个
                toolbars: [[
                    'fullscreen', 'source', '|', 'undo', 'redo', '|', 'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'removeformat', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', '|', 'fontfamily', 'fontsize', '|', 'indent', '|', 'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'link', 'unlink', '|', 'simpleupload', 'horizontal', 'spechars', 'wordimage', '|', 'inserttable', 'deletetable', 'mergecells', 'splittocells', '|', 'template']],
                //focus时自动清空初始化时的内容
                //autoClearinitialContent:true,
                //关闭字数统计
                wordCount: false,
                //关闭elementPath
                elementPathEnabled: false,
                //默认的编辑区域高度
                initialFrameHeight: 300
                //更多其他参数，请参考ueditor.config.js中的配置项
            });

            var leipiFormDesign = {
                exec: function (method) {
                    leipiEditor.execCommand(method);
                },

                fnCheckForm: function (type) {
                    if (leipiEditor.queryCommandState('source'))
                        leipiEditor.execCommand('source');//切换到编辑模式才提交，否则有bug


                    if (leipiEditor.hasContents()) {
                        leipiEditor.sync();       //同步内容

                        var type_value, formid, formeditor;
                        if (typeof type !== 'undefined') {
                            type_value = type;
                        }
                        formeditor = leipiEditor.getContent();

                        $("#button_save").text("submit...");
                        //异步提交数据
                        $.ajax({
                            type: 'POST',
                            url: '<?php echo U("/".$_controller."/formdesign");?>',
                            dataType: 'json',
                            data: { "form_id": <?php echo $one['id']; ?>, "design_content": formeditor },
                            success: function (data) {
                                $("#button_save").text("确定保存");
                                if (data.status == 1) {
                                    alert('保存成功');
                                    location.reload();
                                } else {
                                    alert(data.info);
                                }
                            }
                        });
                    } else {
                        alert('表单内容不能为空！')
                        $('#submitbtn').button('reset');
                        return false;
                    }
                },

                fnReview: function () {
                    if (leipiEditor.queryCommandState('source'))
                        leipiEditor.execCommand('source');//切换到编辑模式才提交，否则有bug

                    if (leipiEditor.hasContents()) {
                        leipiEditor.sync();       //同步内容

                        document.saveform.target = "mywin";
                        window.open('', 'mywin', "menubar=0,toolbar=0,status=0,resizable=1,left=0,top=0,scrollbars=1,width=" + (screen.availWidth - 10) + ",height=" + (screen.availHeight - 50) + "\"");
                        document.saveform.action = "<?php echo U('/demo/temp_preview');?>";
                        document.saveform.submit(); //提交表单
                    } else {
                        alert('表单内容不能为空！');
                        return false;
                    }
                }
            };
        </script>
        <!-- script end -->


    
    
 <div class="bs-footer" role="contentinfo" id="bs-footer">
      <div class="container">
          <p><span class="glyphicon glyphicon-list-alt"></span> 免责声明：本站仅分享开发思路和示例代码并且乐于交流和促进网络良性发展，是非商业工具，如有疑问请加群或邮件告知，积极配合调整。</p>
          <p><span class="glyphicon glyphicon-list-alt"></span> 反馈：payonesmile@qq.com</p>
          <p><span class="glyphicon glyphicon-usd"></span> 支持：捐赠支付宝 payonesmile@qq.com 、<a href="#">捐赠记录</a></p>
          <p><span class="glyphicon glyphicon-bookmark"></span> 鸣谢：<a href="http://ueditor.baidu.com" target="_balnk">UEditor</a>、<a href="https://github.com/twbs/bootstrap/" target="_balnk">Bootstrap</a>、<a href="http://www.leipi.org" target="_balnk">雷劈网</a></p>
          <p><a href="http://www.leipi.org" title="雷劈网"><img src="http://www.leipi.org/wp-content/themes/leipi/images/leipi.png" alt="雷劈认证 icon" height="30"></a> &copy;2014 Ueditor Formdesign v4 leipi.org</p>
      </div>
</div>
    <!--footer js -->
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