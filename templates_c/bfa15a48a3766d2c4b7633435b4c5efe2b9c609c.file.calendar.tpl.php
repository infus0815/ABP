<?php /* Smarty version Smarty-3.1.15, created on 2016-08-25 18:11:49
         compiled from "\XAMPP\htdocs\ABP\templates\calendar\calendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7867579b9af8eced39-97698206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfa15a48a3766d2c4b7633435b4c5efe2b9c609c' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\calendar\\calendar.tpl',
      1 => 1472141506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7867579b9af8eced39-97698206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_579b9af8f066e3_30647643',
  'variables' => 
  array (
    'disponibilidade' => 0,
    'USERNAME' => 0,
    'escalaoSelecionado' => 0,
    'equipaEscaloes' => 0,
    'equipaSelecionada' => 0,
    'equipaEscalao' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579b9af8f066e3_30647643')) {function content_579b9af8f066e3_30647643($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>




<script>

  var disponibilidade = <?php echo json_encode($_smarty_tpl->tpl_vars['disponibilidade']->value);?>
;
  var username = '<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
';
  var escalaoSelecionado = '<?php echo $_smarty_tpl->tpl_vars['escalaoSelecionado']->value;?>
';
  var equipaEscalao_id;
  var equipaEscaloes = <?php echo json_encode($_smarty_tpl->tpl_vars['equipaEscaloes']->value);?>
;

  for(var x in equipaEscaloes) {
    
    if(equipaEscaloes[x]['escalao_id'] == escalaoSelecionado){
      equipaEscalao_id = equipaEscaloes[x]['equipaescalao_id'];
    }

  }
</script>

<script src="../../javascript/calendar.js"></script>

<script>

  $(document).ready(function(){

   /* function dispEvent(disp_selector) {
      if($("input:first", disp_selector).prop("checked")) {
        $("input:last", disp_selector).prop("disabled", false);
        $("div.submitbutton button", disp_selector).prop("disabled", false);
      }
      else {
        $("input:last", disp_selector).prop("disabled", true);
        $("div.submitbutton button", disp_selector).prop("disabled", true);
      }
    }

    $("#disp_manha input:first").click(function() {

      dispEvent($("#disp_manha"));
    });

    $("#disp_tarde input:first").click(function() {

      dispEvent($("#disp_tarde"));
    });

    dispEvent($("#disp_manha"));
    dispEvent($("#disp_tarde"));
  */
    $("#nav_calendar").addClass("active");
    $("#escalao_<?php echo $_smarty_tpl->tpl_vars['equipaSelecionada']->value;?>
").addClass("active");

  });


</script>

<div class="panel panel-default">
  <div class="panel-heading">
    <ul class="nav nav-pills">
      <?php  $_smarty_tpl->tpl_vars['equipaEscalao'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipaEscalao']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipaEscaloes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipaEscalao']->key => $_smarty_tpl->tpl_vars['equipaEscalao']->value) {
$_smarty_tpl->tpl_vars['equipaEscalao']->_loop = true;
?>
      <li id="escalao_<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['escalao_id'];?>
">
        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/calendar/calendar.php?escalao_id=<?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value['escalao_id'];?>
">Mini <?php echo $_smarty_tpl->tpl_vars['equipaEscalao']->value["nome"];?>
</a>
      </li>
      <?php } ?>
    </ul>
  </div>
  <div class="panel-body">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div id="datepicker"></div>
        </div>

        <!-- <div>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/pdf/generatePDF.php" class="btn btn-info" role="button"  target="_blank">Link Button</a>
        </div>
      -->

<!--         <table id="equipas">
          <tbody>
          </tbody>
        </table> -->

        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-12">
              <h3>Data do torneio</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 panel">
              <h4>Manhã (xxhxx - xxhxx)</h4>
              <div>Equipa1</div>
              <div>Equipa2</div>
              <form role="form" id="disp_manha">
                <div class="checkbox">
                  <label><input type="checkbox" value="">Participar</label>
                  <label><input type="checkbox" value="">Organizar</label>
                </div>
                <div id="buttondiv_manha"></div>  
              </form>
            </div>
            <div class="col-sm-6 panel">
              <h4>Tarde (xxhxx - xxhxx)</h4>
              <div>Equipa3</div>
              <div>Equipa4</div>
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

        <!-- <div class="col-sm-3">
          <div class="checkbox">
            <label class="checkbox-inline"><input checked type="checkbox" value="">Manhã</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
          </div>

          <div class="checkbox">
            <label class="checkbox-inline"><input checked type="checkbox" value="">Tarde</label>
            <label class="checkbox-inline"><input type="checkbox" value="">Organizador</label>
          </div>

          <div id="buttondiv"></div>
        </div> -->

      </div>
    </div>
  </div>
</div>




<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
