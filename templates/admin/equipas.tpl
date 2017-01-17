{include file='common/header.tpl'}

<script>

    $("#admin").addClass("active");

</script>
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
        </tr>
        </thead>
        <tbody>
        {foreach $equipas as $equipa}
        <tr>
            <td>{$equipa['equipa_id']}</td>
            <td>{$equipa['username']}</td>
            <td>{$equipa['nome']}</td>
        </tr>
        {/foreach}
        </tbody>
    </table>
</div>


<div class="container">
    <div>
        <h3>Criação de Contas</h3>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-8">
            <form action="{$BASE_URL}actions/admin/criar_equipa.php" method="post" enctype="multipart/form-data">
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
                {foreach $ERROR_MESSAGES as $error_message}
                    {$error_message}
                {/foreach}
            </div>
            <div style="color:green; padding-top:10px">
                {foreach $SUCCESS_MESSAGES as $success_message}
                    {$success_message}
                {/foreach}
            </div>
        </div>
    </div>
</div>


{include file='common/footer.tpl'}