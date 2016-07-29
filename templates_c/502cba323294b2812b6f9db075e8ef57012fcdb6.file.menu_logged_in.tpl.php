<?php /* Smarty version Smarty-3.1.15, created on 2016-07-29 20:05:45
         compiled from "\XAMPP\htdocs\ABP\templates\common\menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12081579b9af9108cc7-13620632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '502cba323294b2812b6f9db075e8ef57012fcdb6' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\common\\menu_logged_in.tpl',
      1 => 1469725342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12081579b9af9108cc7-13620632',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b9af910f676_16906669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b9af910f676_16906669')) {function content_579b9af910f676_16906669($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/equipas/logout.php">Logout</a>
<span class="username"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</span>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar/calendar.php">Calendar</a>
<?php }} ?>
