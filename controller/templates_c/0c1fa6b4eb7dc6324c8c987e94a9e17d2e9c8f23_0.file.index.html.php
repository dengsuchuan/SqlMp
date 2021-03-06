<?php
/* Smarty version 3.1.30, created on 2018-04-05 23:10:26
  from "D:\WebServer\www\project\SqlMp\view\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac63c62780434_06067026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1fa6b4eb7dc6324c8c987e94a9e17d2e9c8f23' => 
    array (
      0 => 'D:\\WebServer\\www\\project\\SqlMp\\view\\index.html',
      1 => 1522228757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac63c62780434_06067026 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'css.conf', null, 0);
?>

    <?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'js.conf', null, 0);
?>

    <title>SqlMp -- 1.连接MySql</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Bootstrap_css_url');?>
bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Bootstrap_js_url');?>
jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'Bootstrap_js_url');?>
bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'dialog_js_url');?>
dialog.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'dialog_layer_js_url');?>
layer.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h1 style="color:rgb(55,173,217)">MySql命令量产工具
                    <small>
                        <span class="glyphicon glyphicon-oil"></span>
                        帮助开发者快速生成测试数据~~
                    </small>
                </h1>
            </div>
        </div>
        <div class="col-md-12 thumbnail">
            <form action="" role="form">
                <fieldset>
                    <legend class="text-center">1.连接MySql</legend>
                    <div class="form-group">
                        <label for="name">地址:</label>
                        <input type="text" class="form-control" id="hosts" placeholder="SqlHosts" value="localhost">
                        <p class="help-block">数据库地址,本地为:<code>localhost</code></p>
                    </div>
                    <div class="form-group">
                        <label for="name">端口:</label>
                        <input type="text" class="form-control" id="port" placeholder="SqlPort" value="3306">
                        <p class="help-block">数据库地址,默认为:<code>3306</code></p>
                    </div>
                    <div class="form-group">
                        <label for="name">用户名:</label>
                        <input type="text" class="form-control" id="name" placeholder="SqlName" value="root">
                        <p class="help-block">数据库连接用户名,一般为<code>root</code></p>
                    </div>
                    <div class="form-group">
                        <label for="password">密码:</label>
                        <input type="text" class="form-control" id="password" placeholder="SqlPassWord" value="www.geekln.cn">
                        <p class="help-block">数据库连接密码</p>
                    </div>
                </fieldset>
                <button type="button" name="submit" id="submit" class="btn btn-info btn-block">连接</button>
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
>
    $("#submit").click(function () {
        var hosts = $('#hosts').val();
        var name = $('#name').val();
        var paw = $('#password').val();
        var port = $('#port').val();

        if(hosts == ""){
            dialog.error("地址不能为空");
        }else if(name == "" || paw == ""){
            dialog.error("用户名和密码不能为空");
        }else {
            dialog.toconfirm("正在连接...","")
            $.post(
                "controller.php",
                {
                    "ac":"ConnDb",
                    "hosts":hosts,
                    "port":port,
                    "name":name,
                    "paw":paw
                },
                function (data){
                    //alert('获取到的data是:'+data);
                    switch(data){
                        case "1":
                            dialog.success("连接成功，请在下一个页面选择数据库","?ac=selectDb");
                        break;
                        default:
                            dialog.error("连接失败，请检查相关信息");
                    }
                }
            );
        }
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
