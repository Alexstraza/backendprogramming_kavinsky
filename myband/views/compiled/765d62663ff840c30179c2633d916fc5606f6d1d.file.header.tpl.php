<?php /* Smarty version Smarty-3.1.18, created on 2015-10-07 12:16:00
         compiled from "views\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242355f940cc146997-19708089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '765d62663ff840c30179c2633d916fc5606f6d1d' => 
    array (
      0 => 'views\\header.tpl',
      1 => 1444212959,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242355f940cc146997-19708089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55f940cc333ff5_36590604',
  'variables' => 
  array (
    'currentPage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f940cc333ff5_36590604')) {function content_55f940cc333ff5_36590604($_smarty_tpl) {?><body>

<header>
    <h2>Kavinsky</h2>


<nav>
    <ul>
        <li<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="news") {?> class="selected" <?php }?>><a href="index.php?page=news">Home</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="albums") {?> class="selected" <?php }?>><a href="index.php?page=albums">Albums</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="tours") {?> class="selected" <?php }?>><a href="index.php?page=tours">Tours</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="about") {?> class="selected" <?php }?>><a href="index.php?page=about">About Kavinsky</a></li>
        <li<?php if ($_smarty_tpl->tpl_vars['currentPage']->value=="contact") {?> class="selected" <?php }?>><a href="index.php?page=contact">Contact</a></li>
    </ul>
</nav>
</header>



<?php }} ?>
