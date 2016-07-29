<?php /* Smarty version Smarty-3.1.15, created on 2016-07-29 20:00:06
         compiled from "\XAMPP\htdocs\ABP\templates\calendar\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8905579b8842143158-66864369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa15a48a3766d2c4b7633435b4c5efe2b9c609c' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\calendar\\calendar.tpl',
      1 => 1469815200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8905579b8842143158-66864369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b88421dff81_72187371',
  'variables' => 
  array (
    'disponibilidade' => 0,
    'USERNAME' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b88421dff81_72187371')) {function content_579b88421dff81_72187371($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div id="datepicker"></div>

<script>
    var disponibilidade = <?php echo json_encode($_smarty_tpl->tpl_vars['disponibilidade']->value);?>
;
    var username = '<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
';
</script>

<table id="equipas">
    <tbody>
    </tbody>

</table>

<script src="../../javascript/calendar.js"></script>

<div id="buttondiv">

</div>

<div class="checkbox">
  <label class="checkbox-inline"><input checked type="checkbox" value="">Manhã</label>
  <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
</div>

<div class="checkbox">
  <label class="checkbox-inline"><input checked type="checkbox" value="1">Tarde</label>
  <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
</div>


<div>
    <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/pdf/generatePDF.php" class="btn btn-info" role="button"  target="_blank">Link Button</a>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
