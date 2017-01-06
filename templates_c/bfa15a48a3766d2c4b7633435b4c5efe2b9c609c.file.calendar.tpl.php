<?php /* Smarty version Smarty-3.1.15, created on 2017-01-06 18:04:36
         compiled from "\XAMPP\htdocs\ABP\templates\calendar\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835957e55b6cdc3f74-14781465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa15a48a3766d2c4b7633435b4c5efe2b9c609c' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\calendar\\calendar.tpl',
      1 => 1483093640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835957e55b6cdc3f74-14781465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_57e55b6d124568_01552218',
  'variables' => 
  array (
    'disponibilidade' => 0,
    'USERNAME' => 0,
    'escalaoSelecionado' => 0,
    'equipaescalao' => 0,
    'equipaEscaloes' => 0,
    'equipaEscalao' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e55b6d124568_01552218')) {function content_57e55b6d124568_01552218($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

  var disponibilidade = <?php echo json_encode($_smarty_tpl->tpl_vars['disponibilidade']->value);?>
;
  var username = '<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
';
  var escalaoSelecionado = '<?php echo $_smarty_tpl->tpl_vars['escalaoSelecionado']->value;?>
';
  var equipaEscalao_id = <?php echo $_smarty_tpl->tpl_vars['equipaescalao']->value;?>
;
  var equipaEscaloes = <?php echo json_encode($_smarty_tpl->tpl_vars['equipaEscaloes']->value);?>
;

  // for(var x in equipaEscaloes) {
    
  //   if(equipaEscaloes[x]['escalao_id'] == escalaoSelecionado){
  //     equipaEscalao_id = equipaEscaloes[x]['equipaescalao_id'];
  //   }

  // }
</script>

<script src="../../javascript/calendar.js"></script>

<div class="container">
  <div class="row">
    <div class="col-sm-12" >
      <h2>Agenda para Mini
        <?php  $_smarty_tpl->tpl_vars['equipaEscalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipaEscalao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipaEscaloes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipaEscalao']->key => $_smarty_tpl->tpl_vars['equipaEscalao']->value) {
$_smarty_tpl->tpl_vars['equipaEscalao']->_loop = true;
?>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['equipaescalao']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_id']==$_tmp1) {?>

        <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['equipaescalao_nome'];?>


        <?php }?>
        <?php } ?>
      </h2>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
<!--       <div class="row">
        <h3>Agenda</h3>
      </div> -->
      <div class="row" style="padding-top:20px">
        <div id="datepicker"></div>
      </div>
    </div>
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-12">
          <h3 id="data_evento"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 panel">
          <h4>Manhã (09h00 - 12h30)</h4>
          <ul id="equipas_manha" class="list-group">
          </ul>
          <form role="form" id="disp_manha">
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>
            <div id="buttondiv_manha"></div>  
          </form>
        </div>
        <div class="col-sm-6 panel">
          <h4>Tarde (14h30 - 17h30)</h4>
          <ul id="equipas_tarde" class="list-group">
          </ul>
          <form role="form" id="disp_tarde">
            <div class="checkbox">
              <label><input type="checkbox" value="">Participar</label>
              <label><input type="checkbox" value="">Organizar</label>
            </div>
            <div id="buttondiv_tarde"></div> 
          </form>
        </div>
      </div>
    </div>
  </div>
</div>





<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
