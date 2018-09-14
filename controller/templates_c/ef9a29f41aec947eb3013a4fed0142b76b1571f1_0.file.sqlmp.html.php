<?php
/* Smarty version 3.1.30, created on 2018-04-05 23:10:34
  from "D:\WebServer\www\project\SqlMp\view\sqlmp.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac63c6a143249_32211918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef9a29f41aec947eb3013a4fed0142b76b1571f1' => 
    array (
      0 => 'D:\\WebServer\\www\\project\\SqlMp\\view\\sqlmp.html',
      1 => 1522926107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac63c6a143249_32211918 (Smarty_Internal_Template $_smarty_tpl) {
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

  <title>SqlMp -- SQL量产</title>
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
          <legend class="text-center"><code><?php echo $_smarty_tpl->tpl_vars['TableName']->value;?>
</code>表 : SQL量产</legend>
          <div class="table-responsive">
            <table class="table table-hover table-bordered text-center">
              <tr class="active">
                <th class="text-center">字段名</th>
                <th class="text-center">字段类型</th>
                <th class="text-center">量产类型</th>
              </tr>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <tr>
                  <td class="text-center"><?php echo $_smarty_tpl->tpl_vars['v']->value['Field'];?>
</td>
                  <td class="text-center"><code><?php echo $_smarty_tpl->tpl_vars['v']->value['Type'];?>
</code></td>
                  <td class="text-center">
                    <select class="selectpicker show-tick form-control " id="<?php echo $_smarty_tpl->tpl_vars['v']->value['Field'];?>
_select">
                      <option value="0">为空 NULL</option>
                      <option value="1">中文姓名</option>
                      <option value="2">年月日时</option>
                      <option value="3">年龄</option>
                      <option value="4">随机密码</option>
                      <option value="5">任意商品</option>
                      <option value="6">省</option>
                      <option value="7">市</option>
                    </select>
                  </td>
                </tr>
              <?php
}
} else {
?>

              <tr>
                <td>没有字段</td>
                <td>没有数据</td>
                <td>无法选择</td>
              </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>
            <div class="col-md-8 col-md-offset-2">
              <form action="" role="form">
                <fieldset>
                  <div class="form-group">
                    <label for="number">量产行数:</label>
                    <input type="number" class="form-control" id="number" placeholder="number" value="100">
                    <p class="help-block">输入你要量产多少条测试数据.</p>
                  </div>
                </fieldset>
                <div class="col-md-4 col-md-offset-5">
                  <button class="btn btn-primary btn-lg" id="button" type="button" data-toggle="modal" data-target="#modal1" onclick="">
                    开始量产
                  </button>
                  <div class="modal fade" id="modal1">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <!----------------------------------------------------->
                        <div class="modal-header"><!--模态框头部-->
                          <button class="close" type="button" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><!--关闭图标的叹号-->
                          </button>
                          <h4 class="modal-title">对 <code><?php echo $_smarty_tpl->tpl_vars['TableName']->value;?>
</code> 表开始量产</h4>
                        </div>
                        <!----------------------------------------------------->
                        <!--开始内容-->
                        <div class="modal-body">
                          <pre class="pre-scrollable">

                          </pre>
                        </div>
                        <!----------------------------------------------------->
                        <div class="modal-footer"><!--模态框尾部-->
                          <button type="button" class="btn btn-default" data-dismiss="modal">完成</button>
                        </div>
                        <!----------------------------------------------------->
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<?php echo '<script'; ?>
>
  $(function () {
    var select = [] ;
    $('#button').click(function () {
      if ($('#number').val() > 0){
        $("select").find("option:selected").each(function(){
          if($(this).val()){
            select.push($(this).val());
          }
        });
        //console.log(select);//调试获取到的参数
        var sqlValue = "'"+select.join("','")+"'";
        var number = $('#number').val();
        $('pre').text(sqlValue);
        $.ajax({
          type:"GET",  //默认值: "GET")。请求方式 ("POST" 或 "GET")， 默认为 "GET"
          url:"controller.php",  //当前页地址。发送请求的地址
          data:{
            ac:"goMp",
            selects:sqlValue,
            number:number
          },
          success:function(data){
            if(data){
              //alert(data);
              $('pre').html(data);
            }
          },
          async:true,   //true为异步请求，false为同步请求
        });
        select = [];

      } else{
        dialog.error('请输入有效的量产行数！');
        $('pre').text('请输入有效的量产行数!');
      }
    });
  });


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
