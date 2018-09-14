<?php
/* Smarty version 3.1.30, created on 2018-04-05 23:10:59
  from "D:\WebServer\www\project\SqlMp\view\opentable.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac63c83da2e54_52289839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d8908669f9039f2a8d49e338873bbd6d5405a9e' => 
    array (
      0 => 'D:\\WebServer\\www\\project\\SqlMp\\view\\opentable.html',
      1 => 1522431023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac63c83da2e54_52289839 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>SqlMp -- 查看表</title>
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
    <style>
        .col-center-block {
            float: none;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
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
        `<div class="col-md-12 thumbnail" >
            <form action="" role="form">
                <fieldset>
                    <legend class="text-center"><code><?php echo $_smarty_tpl->tpl_vars['TableName']->value;?>
</code>表</legend>
                    <div class="table-responsive pre-scrollable">
                        <table class="table table-hover table-bordered text-center">
                            <tr class="active">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                <th class="text-center"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <?php break 1;?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'contact');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
?>
                                <tr class="active">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                                      <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</td>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </table>
                    </div>
                </fieldset>
            </form>
        </div>
        <nav class="col-xs-6 col-md-4 col-center-block">
            <ul class="pager">
                <li><a href="#">上一页</a></li>
                <li><a href="#"> 第 <cite>1</cite> 页 @ 共 <cite>10</cite> 页 </a></li>
                <li><a href="#">下一页</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php echo '<script'; ?>
>
    function DelTable(Table) {
        dialog.confirm("危险:你正在试图删除 <code>"+Table+"</code> 表，是否删除？","?ac=DelTable&TableName="+Table);
    }

    function OpenTable(Table) {
        dialog.confirm("提示:你需要打开 <code>"+Table+"</code> 表吗？","?ac=OpenTable&TableName="+Table);
    }

    function MpTable(Table) {
        dialog.confirm("提示:是否要对 <code>"+Table+"</code> 表进行测试数据量产？","");
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
