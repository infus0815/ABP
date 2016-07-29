<?php /* Smarty version Smarty-3.1.15, created on 2016-07-29 18:38:04
         compiled from "\XAMPP\htdocs\ABP\templates\equipas\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26317579b866cc4add6-66557975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd118f851b99325aa35d8e192f10e01f37308e23e' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\equipas\\login.tpl',
      1 => 1469725342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26317579b866cc4add6-66557975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b866d261dc0_70598836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b866d261dc0_70598836')) {function content_579b866d261dc0_70598836($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div>
    <h1>Login</h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/login.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value=">">
</form>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
