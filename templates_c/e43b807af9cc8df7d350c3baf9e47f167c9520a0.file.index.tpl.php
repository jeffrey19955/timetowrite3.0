<?php /* Smarty version Smarty-3.1.15, created on 2013-10-09 15:11:42
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284525555a77ee758-57075436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1381324296,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284525555a77ee758-57075436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_525555a78f3746_54497372',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525555a78f3746_54497372')) {function content_525555a78f3746_54497372($_smarty_tpl) {?><?php $_smarty_tpl->_capture_stack[0][] = array('default', 'content', null); ob_start(); ?>
<form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
" method="post">
<p>Username: <input type="text" name="username" value="" /></p>
<p>Password: <input type="password" name="password" value="" /></p>
<input type="submit" name="login" value="Log in" />
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }} ?>
