<?php /* Smarty version Smarty-3.1.15, created on 2017-01-22 19:24:13
         compiled from "\XAMPP\htdocs\ABP\templates\admin\gestao_meses.tpl" */ ?>
<?php /*%%SmartyHeaderCode:268945884e0df158970-93996214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '041d43e825baa26a7e9613f0e83aa527aa827aee' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\admin\\gestao_meses.tpl',
      1 => 1485109271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '268945884e0df158970-93996214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5884e0df197e93_20090076',
  'variables' => 
  array (
    'disabledMonths' => 0,
    'disabledMonth' => 0,
    'listaMeses' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5884e0df197e93_20090076')) {function content_5884e0df197e93_20090076($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

    $("#admin").addClass("active");

    


    $(document).ready(function () {


        var date = new Date();
        var yearslector = $("div #year input:first");
        yearslector.attr("min", date.getFullYear());
        yearslector.attr("value", date.getFullYear());
        yearslector.attr("max", date.getFullYear() + 10);

       





    });


</script>

<div class="container">
    <div>
        <h3>Lista de Meses Bloqueados</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Id da Desactivação</th>
                <th>Mes da Desactivação</th>
                <th>Ano da Desactivação</th>

            </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['disabledMonth'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['disabledMonth']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['disabledMonths']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['disabledMonth']->key => $_smarty_tpl->tpl_vars['disabledMonth']->value) {
$_smarty_tpl->tpl_vars['disabledMonth']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['disabledMonth']->value['disabledmonth_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['listaMeses']->value[$_smarty_tpl->tpl_vars['disabledMonth']->value['month']];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['disabledMonth']->value['year'];?>
</td>
                <td>
                    <span class="pull-right">
                                            <a class="btn btn-xs btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/delete_disablemonth.php?disablemonth_id=<?php echo $_smarty_tpl->tpl_vars['disabledMonth']->value['disabledmonth_id'];?>
">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </a>
                    </span>
                <td>
            </tr>
            <?php } ?>
        </tbody>
    </table>



    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-8 panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">Bloquear Mês</div>
                    <div class="panel-body">

                        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/disableMonth.php" method="get" enctype="multipart/form-data">

                        <div class="row">
                            <div class="form-group col-md-6" >
                              <label for="sel1">Mês:</label>
                                <select class="form-control" id="sel1" name="month">
                                    <option value="0">Janeiro</option>
                                    <option value="1">Fevereiro</option>
                                    <option value="2">Março</option>
                                    <option value="3">Abril</option>
                                    <option value="4">Maio</option>
                                    <option value="5">Junho</option>
                                    <option value="6">Julho</option>
                                    <option value="7">Agosto</option>
                                    <option value="8">Setembro</option>
                                    <option value="9">Outubro</option>
                                    <option value="10">Novembro</option>
                                    <option value="11">Dezembro</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6" id = "year">
                                <label for="sel1">Ano:</label>
                                <input class="form-control" type="number" name="year">
                            </div>

                            </div>

                            <div class="row">

                                <div class="form-group col-md-2">
                                    <button class="btn btn-xs btn-success" type="submit">Confirmar</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</div>







<?php }} ?>
