<?php /* Smarty version Smarty-3.1.15, created on 2013-10-09 15:35:53
         compiled from "index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12284525555a77ee758-57075436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e43b807af9cc8df7d350c3baf9e47f167c9520a0' => 
    array (
      0 => 'index.tpl',
      1 => 1381325749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12284525555a77ee758-57075436',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_525555a78f3746_54497372',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525555a78f3746_54497372')) {function content_525555a78f3746_54497372($_smarty_tpl) {?>
<form method="post">
<p>Username: <input type="text" name="username" value="" /></p>
<p>Password: <input type="password" name="password" value="" /></p>
<input type="submit" name="login" value="Log in" />
</form>

<?php }} ?>
