<?php
/* Smarty version 3.1.30, created on 2018-04-05 23:10:31
  from "D:\WebServer\www\project\SqlMp\view\opendb.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac63c6775a653_89679000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21a550158078f4a97689f112ebebb3023e862fc4' => 
    array (
      0 => 'D:\\WebServer\\www\\project\\SqlMp\\view\\opendb.html',
      1 => 1522510484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac63c6775a653_89679000 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>SqlMp -- 3.表操作</title>
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
                    <legend class="text-center">3.表操作</legend>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered text-center">
                            <tr class="active">
                                <th class="text-center">表名</th>
                                <th class="text-center">排序规则</th>
                                <th class="text-center">创建日期</th>
                                <th class="text-center">数据长度</th>
                                <th class="text-center">操作</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Collation'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Create_time'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['Data_length'];?>
</td>
                                <td>
                                    <a class="btn btn-danger" onclick="DelTable('<?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
')">删除</a>
                                    <a class="btn btn-info" onclick="OpenTable('<?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
')">打开</a>
                                    <a class="btn btn-success" onclick="MpTable('<?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
')">量产</a>
                                </td>
                            </tr>
                            <?php
}
} else {
?>

                            <tr>
                                <td>没有数据</td>
                                <td>没有数据</td>
                                <td>没有数据</td>
                                <td>没有数据</td>
                                <td>无法操作</td>
                            </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </table>
                    </div>
                </fieldset>
            </form>
        </div>
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
        dialog.confirm("提示:是否要对 <code>"+Table+"</code> 表进行测试数据量产？","?ac=MpTable&TableName="+Table);
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
