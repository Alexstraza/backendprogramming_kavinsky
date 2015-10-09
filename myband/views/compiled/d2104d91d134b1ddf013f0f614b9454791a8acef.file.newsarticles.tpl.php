<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 23:03:29
         compiled from "views\newsarticles.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2938455ffc7c672b682-51292360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2104d91d134b1ddf013f0f614b9454791a8acef' => 
    array (
      0 => 'views\\newsarticles.tpl',
      1 => 1444338207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2938455ffc7c672b682-51292360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55ffc7c6a71ad8_14860037',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ffc7c6a71ad8_14860037')) {function content_55ffc7c6a71ad8_14860037($_smarty_tpl) {?>
    <div id="newsArticles">
<?php echo $_smarty_tpl->getSubTemplate ("form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<section>
<?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>


		<h1><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</h1>
		<p><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['date_created'];?>
</p><br>
		<content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content><br>
    <?php if ($_smarty_tpl->tpl_vars['newsitem']->value['image']) {?>
        <img src="images/<?php echo $_smarty_tpl->tpl_vars['newsitem']->value['image'];?>
">
    <?php }?>

<?php } ?>
</section>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
