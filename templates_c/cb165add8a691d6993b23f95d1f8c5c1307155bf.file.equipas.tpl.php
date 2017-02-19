<?php /* Smarty version Smarty-3.1.15, created on 2017-02-19 15:07:15
         compiled from "\XAMPP\htdocs\ABP\templates\admin\equipas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:294495884e0d7401031-32300005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb165add8a691d6993b23f95d1f8c5c1307155bf' => 
    array (
      0 => '\\XAMPP\\htdocs\\ABP\\templates\\admin\\equipas.tpl',
      1 => 1487513234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '294495884e0d7401031-32300005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5884e0d7448315_99921368',
  'variables' => 
  array (
    'equipas' => 0,
    'equipa' => 0,
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
    'error_message' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success_message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5884e0d7448315_99921368')) {function content_5884e0d7448315_99921368($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script>

    $("#admin").addClass("active");

</script>


<div class="modal fade" id="confirm-reset" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Nova password criada para a equipa <span class="equipa_nome"></span></h4>
            </div>

            <div class="modal-body">
                <p>Nova password é: <span class="modal_content"></span>
                </p>
                <p>Guarde esta password</p>
                

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>




<div class="container">
    <div>
        <h3>Lista de Contas</h3>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>Id da Equipa</th>
            <th>Username</th>
            <th>Nome</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['equipa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipa']->key => $_smarty_tpl->tpl_vars['equipa']->value) {
$_smarty_tpl->tpl_vars['equipa']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['equipa']->value['equipa_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['equipa']->value['username'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['equipa']->value['nome'];?>
</td>
            <td>
                <span class="pull-right">
                    <button class="btn btn-xs btn" data-content="<?php echo $_smarty_tpl->tpl_vars['equipa']->value['username'];?>
" data-toggle="modal" data-target="#confirm-reset">Reset password</button>
                </span>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>


<div class="container">
    <div>
        <h3>Criação de Contas</h3>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-8">
            <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/admin/criar_equipa.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="name" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="nome">Nome da Equipa:</label>
                    <input type="name" class="form-control" name="nome" id="nome">
                </div>
                <div class="form-group">
                    <label for="password1">Password:</label>
                    <input type="password" class="form-control" name="password1" id="password1">
                </div>
                <div class="form-group">
                    <label for="password2">Repetir password:</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                </div>
                <button type="submit" class="btn btn-success">Confirmar</button>
            </form>
            <div style="color:red; padding-top:10px">
                <?php  $_smarty_tpl->tpl_vars['error_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error_message']->key => $_smarty_tpl->tpl_vars['error_message']->value) {
$_smarty_tpl->tpl_vars['error_message']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>

                <?php } ?>
            </div>
            <div style="color:green; padding-top:10px">
                <?php  $_smarty_tpl->tpl_vars['success_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success_message']->key => $_smarty_tpl->tpl_vars['success_message']->value) {
$_smarty_tpl->tpl_vars['success_message']->_loop = true;
?>
                    <?php echo $_smarty_tpl->tpl_vars['success_message']->value;?>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    $('#confirm-reset').on('show.bs.modal', function(e) {
        


        $.post(BASE_URL + "api/admin/reset_password.php",
        {
            username: $(e.relatedTarget).data('content'),
            

        },
        function(data){
            new_password = $.parseJSON(data);
            $('.equipa_nome').html('<strong>' +  $(e.relatedTarget).data('content') + '</strong>');
            $('.modal_content').html('<strong>' +  new_password + '</strong>');

        });

        
    });
</script>


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
