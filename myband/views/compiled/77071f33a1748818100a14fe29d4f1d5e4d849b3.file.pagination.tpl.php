<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 15:47:59
         compiled from "views\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9225609034f1f1bc1-82035049%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77071f33a1748818100a14fe29d4f1d5e4d849b3' => 
    array (
      0 => 'views\\pagination.tpl',
      1 => 1444225669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9225609034f1f1bc1-82035049',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5609034f1f2d13_37310914',
  'variables' => 
  array (
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5609034f1f2d13_37310914')) {function content_5609034f1f2d13_37310914($_smarty_tpl) {?><div id="content">
<div id="pageBar">
<ul>
    <li><?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="1") {?> class="selected" <?php }?><a href="?page=news&page_nr=1">1</a> </li>
    <li><?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="2") {?> class="selected" <?php }?><a href="?page=news&page_nr=2">2</a> </li>
    <li><?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="3") {?> class="selected" <?php }?><a href="?page=news&page_nr=3">3</a> </li>

</ul>
</div><?php }} ?>
