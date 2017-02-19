<!DOCTYPE html>
<html>
<head>
    <title>ABP</title>
    <meta charset='utf-8'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
    crossorigin="anonymous">
    <link rel="stylesheet" href="{$BASE_URL}lib/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <script
    src="https://code.jquery.com/jquery-2.2.3.js"
    integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
    integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
    crossorigin="anonymous"></script>
    <script src="{$BASE_URL}lib/jquery-ui/jquery-ui.js"></script>    
    <script src="{$BASE_URL}javascript/main.js"></script>
</head>

<body>

    <nav class="navbar navbar-default" >
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="{$BASE_URL}pages/presentation/presentation.php">ABP</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                {if $USERNAME}
                <ul class="nav navbar-nav">
                    
                    {foreach from=$escaloes key=escalao_id item=escalao}
                    <li  class="dropdown" id="escalao_{$escalao_id}">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mini {$escalao}<span class="caret"></span></a>
                         <ul class="dropdown-menu">
                         {foreach $equipaEscaloes as $equipaEscalao}
                         {if $equipaEscalao['escalao_id'] == $escalao_id}
                            <li><a href="{$BASE_URL}pages/calendar/calendar.php?escalao_id={$escalao_id}&equipaescalao_id={$equipaEscalao['equipaescalao_id']}">Mini {$escalao} {$equipaEscalao['equipaescalao_nome']}</a></li>
                            {/if}
                        {/foreach}
                        </ul> 
                    </li>
                    {/foreach}
                    <li class="dropdown" id="nav_profile"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Conta<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            {if $USERNAME != "admin"}
                            <li><a href="{$BASE_URL}pages/conta/gestao_equipas.php">Gestão de Equipas</a></li>
                            {/if}
                            <li><a href="{$BASE_URL}pages/conta/alteracao_password.php">Alteração de Password</a></li>
                        </ul> 
                    </li>
                    {if $USERNAME == "admin"}
                    <li class="dropdown" id="admin"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Administração<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{$BASE_URL}pages/admin/equipas.php">Gestão de Contas</a></li>
                            <li><a href="{$BASE_URL}pages/admin/gestao_meses.php">Bloqueio de Meses</a></li>
                        </ul>
                    </li>
                    {/if}
                    <!-- <li><a id="nav_historico" href="{$BASE_URL}">Histórico</a></li> -->
                </ul>           
                <form action="{$BASE_URL}actions/equipas/logout.php" class="navbar-form navbar-right">
                    {if $USERNAME == "admin"}
                        <label style="color:#ff4d4d; padding-right:10px">Administrador</label>
                    {else}
                        <label style="color:white; padding-right:10px">{$USERNAME}</label>
                    {/if}
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
                </form>
                {else}
                <form action="{$BASE_URL}actions/equipas/login.php" method="post" enctype="multipart/form-data" class="navbar-form navbar-right">
                    <input type="text" placeholder="username" name="username" class="form-control">
                    <input type="password" placeholder="password" name="password" class="form-control">
                    <button type="submit" class="btn"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                </form>        
                {/if}
            </div>
        </div>

        <div id="error_messages">
            {foreach $ERROR_MESSAGES_LOGIN as $error}
                <div class="error">{$error}<a class="close" href="#">X</a></div>
            {/foreach}
        </div>

    </nav>



    <div class="container-fluid">



