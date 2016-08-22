<?php /* Smarty version Smarty-3.1.15, created on 2016-08-11 23:31:19
         compiled from "\XAMPP\htdocs\ABP\templates\equipas\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1742257a9e0fc5fa125-76758470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd118f851b99325aa35d8e192f10e01f37308e23e' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\equipas\\login.tpl',
      1 => 1470951016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1742257a9e0fc5fa125-76758470',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57a9e0fc63da60_60895289',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a9e0fc63da60_60895289')) {function content_57a9e0fc63da60_60895289($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- <div>
    <h1>Login</h1>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/login.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value=">">
</form>
</div> -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
