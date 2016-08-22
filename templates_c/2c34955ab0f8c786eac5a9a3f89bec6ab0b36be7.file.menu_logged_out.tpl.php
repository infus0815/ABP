<?php /* Smarty version Smarty-3.1.15, created on 2016-08-11 23:37:56
         compiled from "\XAMPP\htdocs\ABP\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2770857a9e0fc7649b8-33923348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c34955ab0f8c786eac5a9a3f89bec6ab0b36be7' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\common\\menu_logged_out.tpl',
      1 => 1470951265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2770857a9e0fc7649b8-33923348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57a9e0fc76a4b2_06619814',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a9e0fc76a4b2_06619814')) {function content_57a9e0fc76a4b2_06619814($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/equipas/login.php">Login</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar/calendar.php">Calendar</a> -->


	<div>
		<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/login.php" method="post" enctype="multipart/form-data">
			<input type="text" placeholder="username" name="username">
			<input type="password" placeholder="password" name="password">
			<input type="submit" value="Entrar">
		</form>
	</div>

<?php }} ?>
