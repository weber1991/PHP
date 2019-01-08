<?php if (!defined('THINK_PATH')) exit();?>
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-网站邮件配置</title>
    <link href="/lichengmi/Public/Default/css/bootstrap.min.css" rel="stylesheet">
    <link href="/lichengmi/Public/Default/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/lichengmi/Public/Default/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/lichengmi/Public/Default/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/lichengmi/Public/Default/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/lichengmi/Public/Default/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/lichengmi/Public/Default/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/lichengmi/Public/Default/css/animate.css" rel="stylesheet">
    <link href="/lichengmi/Public/Default/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
    td{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

<!-- start left -->

      <nav class="navbar-default navbar-static-side" role="navigation" id = "navs">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="text-align:center;">
                        <div class="dropdown profile-element"> <span>
                        </span>
                        <span class="clear"> <span class="block m-t-xs" style = "color:#fff;"> <strong class="font-bold">管理员您好</strong>
                        </span> <span class="text-muted text-xs block">欢迎回来~~   </span> </span>
                    </div>
                    <div class="logo-element">
                        里程密
                    </div>
                </li>
                    <li class="active">
                <a href="<?php echo U('Index/index');?>"><i class="fa fa-diamond"></i> <span class="nav-label">后台首页</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
                    <li>
                        <a href="index.html"><i class="fa fa-gear"></i> <span class="nav-label">网站设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="<?php echo U('Site/index');?>">网站管理</a></li>
                            <li ><a href="<?php echo U('Email/index');?>">网站邮件设置</a></li>
                            <li ><a href="<?php echo U('Adminer/index');?>">管理员修改</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Category/index');?>">查看分类</a></li>
                            <li ><a href="<?php echo U('Category/add');?>">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-file-image-o"></i> <span class="nav-label">幻灯片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Slides/index');?>">查看幻灯片</a></li>
                            <li ><a href="<?php echo U('Slides/add');?>">添加幻灯片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-sitemap"></i> <span class="nav-label">邀请码管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="<?php echo U('Yaoqing/index');?>">查看邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/add');?>">添加邀请码</a></li>
                            <li ><a href="<?php echo U('Yaoqing/production');?>">生成邀请码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-clipboard"></i> <span class="nav-label">文章管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Article/add');?>">添加文章</a></li>
                            <li><a href="<?php echo U('Article/index');?>">查看文章</a></li>
                            <li><a href="<?php echo U('Article/recovery');?>">文章回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-users"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('User/index');?>">会员查看</a></li>
                            <li><a href="<?php echo U('User/recovery');?>">会员回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bank"></i> <span class="nav-label">主题管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Theme/index');?>">主题查看</a></li>
                            <li><a href="<?php echo U('Theme/down');?>" onclick="alert('静静等待 暂未开放');return false;">主题下载</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bug"></i> <span class="nav-label">插件管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Plugs/index');?>" onclick="alert('静静等待 暂未开放');return false;">插件浏览</a></li>
                            <li><a href="<?php echo U('Plugs/recovery');?>" onclick="alert('静静等待 暂未开放');return false;">插件下载</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-key"></i> <span class="nav-label">网站维护</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Maintain/index');?>">缓存清理</a></li>
                            <li><a href="<?php echo U('Maintain/databackups');?>">备份还原数据库</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-bookmark"></i> <span class="nav-label">友情链接</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="<?php echo U('Friendlink/index');?>">查看友链</a></li>
                            <li><a href="<?php echo U('Friendlink/add');?>">添加友链</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="<?php echo U('Login/logout');?>">
                        <i class="fa fa-sign-out"></i>退出登录
                    </a>
                </li>
            </ul>
        </nav>
        </div>
        <div id="page-wrapper" class="gray-bg" style="overflow: hidden;">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                            <form role="search" class="navbar-form-custom" method="post">
                                <div class="form-group">
                                    <input type="text" placeholder="人痛苦的本质都是对自己无能的愤怒" class="form-control" style="width: 500px;" disabled="">
                                </div>
                            </form>
                        </div>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <span class="m-r-sm text-muted welcome-message">每一个你不满意的现在,都有一个你不努力的曾经.</span>
                            </li>
                        <li>欢迎你，<?php echo (session('username')); ?></li>
                            <li>
                                <a data-toggle="modal" href="#myModal6">Good Luck</a>
                            </li>
                        </ul>

                    </nav>
                </div>

<!-- end left -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>网站邮件配置</h2>
        </div>
        <div class="col-lg-2">

        </div>
    </div>
    <div class="row">
         <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <!-- <h5>All form elements <small>With custom checbox and radion elements.</small></h5> -->
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="panel blank-panel">

                        <div class="panel-heading">
                            <div class="panel-title m-b-md" style="text-align:center;"><h2>网站邮件设置</h2></div>
                            <div class="panel-options" >

                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab-4"><i class="fa fa-laptop"></i>邮件配置</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-5"><i class="fa fa-desktop"></i>注册-用户模板</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-6"><i class="fa fa-signal"></i>注册-管理员模板</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-7"><i class="fa fa-bar-chart-o"></i>发表-管理员模板</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-8"><i class="fa fa-bar-chart-o"></i>评论-管理员模板</a></li>
                                    <li class=""><a data-toggle="tab" href="#tab-9"><i class="fa fa-bar-chart-o"></i>留言-用户模板</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="panel-body">

                            <div class="tab-content">
                                <div id="tab-4" class="tab-pane active">
                                    <form method="post" class="form-horizontal" action="<?php echo U('Email/changeSet');?>" enctype="multipart/form-data">
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">SMTP服务器</label>

                                            <div class="col-sm-8"><input type="text" class="form-control" name="smtpserver" required value = "<?php echo ($arr["smtpserver"]); ?>"></div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">SMTP服务器端口</label>

                                            <div class="col-sm-8"><input type="text" class="form-control" name="smtpserverport" required value = "<?php echo ($arr["smtpserverport"]); ?>"></div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label"> SMTP服务器的用户邮箱</label>

                                            <div class="col-sm-8"><input type="text" class="form-control" name="smtpusermail" required value = "<?php echo ($arr["smtpusermail"]); ?>"></div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">SMTP服务器的用户帐号</label>

                                            <div class="col-sm-8"><input type="text" class="form-control" name="smtpuser" required value = "<?php echo ($arr["smtpuser"]); ?>"></div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">SMTP服务器的用户密码</label>

                                            <div class="col-sm-8"><input type="text" class="form-control" name="smtppass" required value = "<?php echo ($arr["smtppass"]); ?>"></div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">用户注册 管理员是否收到邮件</label>
                                        <div class="col-sm-3">
                                                <select name="reg_set_admin">
                                                    <option value="0" <?php if($arr["reg_set_admin"] == 0): ?>selected<?php endif; ?>>是</option>
                                                    <option value="1" <?php if($arr["reg_set_admin"] == 1): ?>selected<?php endif; ?>>不是</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">用户发表文章 管理员是否收到邮件</label>
                                        <div class="col-sm-3">
                                                <select name="send_article_set">
                                                    <option value="0" <?php if($arr["send_article_set"] == 0): ?>selected<?php endif; ?>>是</option>
                                                    <option value="1" <?php if($arr["send_article_set"] == 1): ?>selected<?php endif; ?>>不是</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group has-success"><label class="col-sm-4 control-label">用户回复 管理员是否收到邮件</label>
                                        <div class="col-sm-3">
                                                <select name="comment_set">
                                                    <option value="0" <?php if($arr["comment_set"] == 0): ?>selected<?php endif; ?>>是</option>
                                                    <option value="1" <?php if($arr["comment_set"] == 1): ?>selected<?php endif; ?>>不是</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                    </form>
                                </div>
                                <link href="/lichengmi/Public/Default/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
                                <div id="tab-5" class="tab-pane">
                                <form method="post" class="form-horizontal" action="<?php echo U('Email/saveEmail');?>" enctype="multipart/form-data">
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户注册用户收到邮件的标题</label>

                                        <div class="col-sm-8"><input type="text" class="form-control" name="reg_user_title" required value = "<?php echo ($email["reg_user_title"]); ?>"></div>
                                    </div>
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户注册用户收到邮件的内容 </label>
                                     <div class="col-sm-8">
                                    <script type="text/plain" name="reg_user_content" id="myEditor" style="height:510px;">
                                    <p><?php echo ($email["reg_user_content"]); ?></p>
                                    </script>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                </form>
                                </div>
                                <div id="tab-6" class="tab-pane">
                                    <form method="post" class="form-horizontal" action="<?php echo U('Email/saveEmail');?>" enctype="multipart/form-data">
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户注册管理员收到邮件的标题</label>

                                        <div class="col-sm-8"><input type="text" class="form-control" name="reg_admin_title" required value = "<?php echo ($email["reg_admin_title"]); ?>"></div>
                                    </div>
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户注册管理员收到邮件的标题 </label>
                                     <div class="col-sm-8">
                                    <script type="text/plain" name="reg_admin_content" id="myEditor1" style="height:510px;">
                                    <p><?php echo ($email["reg_admin_content"]); ?></p>
                                    </script>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                </form>
                                </div>
                                <div id="tab-7" class="tab-pane">
                                    <form method="post" class="form-horizontal" action="<?php echo U('Email/saveEmail');?>" enctype="multipart/form-data">
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户发文章管理员收到邮件的标题</label>

                                        <div class="col-sm-8"><input type="text" class="form-control" name="send_article_title" required value = "<?php echo ($email["send_article_title"]); ?>"></div>
                                    </div>
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户发文章管理员收到邮件的内容 </label>
                                     <div class="col-sm-8">
                                    <script type="text/plain" name="send_article_content" id="myEditor2" style="height:510px;">
                                    <p><?php echo ($email["send_article_content"]); ?></p>
                                    </script>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                </form>
                                </div>
                                <div id="tab-8" class="tab-pane">
                                    <form method="post" class="form-horizontal" action="<?php echo U('Email/saveEmail');?>" enctype="multipart/form-data">
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户评论管理员收到邮件的标题</label>

                                        <div class="col-sm-8"><input type="text" class="form-control" name="send_comment_title" required value = "<?php echo ($email["send_comment_title"]); ?>"></div>
                                    </div>
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户评论管理员收到邮件的内容 </label>
                                     <div class="col-sm-8">
                                    <script type="text/plain" name="send_comment_content" id="myEditor3" style="height:510px;">
                                    <p><?php echo ($email["send_comment_content"]); ?></p>
                                    </script>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                </form>
                                </div>
                                <div id="tab-9" class="tab-pane">
                                    <form method="post" class="form-horizontal" action="<?php echo U('Email/saveEmail');?>" enctype="multipart/form-data">
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户收到留言用户邮件的标题</label>

                                        <div class="col-sm-8"><input type="text" class="form-control" name="send_message_title" required value = "<?php echo ($email["send_message_title"]); ?>"></div>
                                    </div>
                                    <div class="form-group has-success"><label class="col-sm-4 control-label"> 用户收到留言用户邮件内容 </label>
                                     <div class="col-sm-8">
                                    <script type="text/plain" name="send_message_content" id="myEditor4" style="height:510px;">
                                    <p><?php echo ($email["send_message_content"]); ?></p>
                                    </script>
                                    </div>
                                    </div>
                                    <div class="hr-line-dashed"></div>
                                        <div class="text-center">
                                            <input type="submit" value="保存" class="btn btn-primary" data-toggle="modal">
                                        </div>
                                </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

    </div>
    <!-- start footer -->
    <!-- <script type="text/javascript" src="/lichengmi/Public/Default/umeditor/third-party/jquery.min.js"></script> -->
<script src="/lichengmi/Public/Default/js/inspinia.js"></script>
    
<div class="footer">
    <div class="pull-right">
        <a href="http://www.lcm.wang/">里程密开源博客系统</a>
    </div>
    <div>
        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/lichengmi/Public/Default/js/jquery-2.1.1.js"></script>
    <script src="/lichengmi/Public/Default/js/jquery.cookie.js"></script>
    <script src="/lichengmi/Public/Default/js/inspinia.js"></script>
    <script src="/lichengmi/Public/Default/js/bootstrap.min.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/lichengmi/Public/Default/js/plugins/flot/jquery.flot.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/lichengmi/Public/Default/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/lichengmi/Public/Default/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/lichengmi/Public/Default/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- 消息通知 -->
    <script src="/lichengmi/Public/Default/js/plugins/gritter/jquery.gritter.min.js"></script>

<script>
    $(function(){
        $("#navs a").click(function(){
            $.cookie('click_url',$(this).attr('href'));
        })
        if($.cookie('click_url') != undefined){
            var s_url=$.cookie('click_url');
            var now_url = '';
            for(var i = 0;i<$("#side-menu li").length;i++){
                now_url=$("#side-menu li a").eq(i).attr("href");
                if(now_url == s_url){
                    $("#side-menu a").eq(i).parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().addClass("in");
                }else{
                    $("#side-menu a").eq(i).parent().removeClass("active");
                }
            }
        }
    })


        </script>
    <!-- Toastr -->

    <script type="text/javascript" charset="utf-8" src="/lichengmi/Public/Default/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/lichengmi/Public/Default/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/lichengmi/Public/Default/umeditor/lang/zh-cn/zh-cn.js"></script>
    <!-- end footer -->
</div>
<script>
    $(function(){
        var um = UM.getEditor('myEditor');
        var um1 = UM.getEditor('myEditor1');
        var um2 = UM.getEditor('myEditor2');
        var um3 = UM.getEditor('myEditor3');
        var um4 = UM.getEditor('myEditor4');
    })
</script>