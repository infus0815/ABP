<?php /* Smarty version Smarty-3.1.15, created on 2016-08-11 23:43:30
         compiled from "\XAMPP\htdocs\ABP\templates\common\menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12081579b9af9108cc7-13620632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502cba323294b2812b6f9db075e8ef57012fcdb6' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\common\\menu_logged_in.tpl',
      1 => 1470951804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12081579b9af9108cc7-13620632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b9af910f676_16906669',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b9af910f676_16906669')) {function content_579b9af910f676_16906669($_smarty_tpl) {?>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/logout.php"><strong><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</strong> <input type="submit" value="Sair"></form>



<!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar/calendar.php">Calendar</a> -->
<?php }} ?>
