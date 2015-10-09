<?php /* Smarty version Smarty-3.1.18, created on 2015-10-08 12:03:06
         compiled from "views\searchresult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26088560bb780650d89-31060572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464581a0b97064700ce76ada77efdc014a3ca149' => 
    array (
      0 => 'views\\searchresult.tpl',
      1 => 1444298581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26088560bb780650d89-31060572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_560bb78067fd46_64572750',
  'variables' => 
  array (
    'data' => 0,
    'newsitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560bb78067fd46_64572750')) {function content_560bb78067fd46_64572750($_smarty_tpl) {?><h1>Your search resulted in the following:</h1>
<section>
    <?php  $_smarty_tpl->tpl_vars['newsitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsitem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsitem']->key => $_smarty_tpl->tpl_vars['newsitem']->value) {
$_smarty_tpl->tpl_vars['newsitem']->_loop = true;
?>
        <article>

            <p><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['title'];?>
</p>
            <content><?php echo $_smarty_tpl->tpl_vars['newsitem']->value['content'];?>
</content>
        </article>
    <?php } ?>
</section>
<br>
<a href="index.php?page=news">Press here to go back.</a><?php }} ?>
