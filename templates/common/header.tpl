<!DOCTYPE html>
<html>
<head>
    <title>Fritter</title>
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
    <script src="{$BASE_URL}lib/jquery-ui/jquery-ui.min.js"></script>    
    <script src="{$BASE_URL}javascript/main.js"></script>
</head>
<body>

    <nav class="navbar navbar-default">
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
                    <li id="nav_calendar"><a href="{$BASE_URL}pages/calendar/calendar.php">Calendário</a></li>
                    <li id="nav_profile"><a href="{$BASE_URL}pages/perfil/perfil.php">Perfil</a></li>
                    <!-- <li><a id="nav_historico" href="{$BASE_URL}">Histórico</a></li> -->
                </ul>           
                <form action="{$BASE_URL}actions/equipas/logout.php" class="navbar-form navbar-right">
                    <label style="color:white; padding-right:10px">{$USERNAME}</label>
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
    </nav>

    <div class="container-fluid">



   <!--  <div class="container">
        <div class="page-header">

            <h1><a href="{$BASE_URL}">ABP</a></h1>

            {if $USERNAME}
            <form action="{$BASE_URL}actions/equipas/logout.php">
                <strong>{$USERNAME}</strong>
                <button type="submit">Logout</button>
            </form>
            {else}
            <form action="{$BASE_URL}actions/equipas/login.php" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="username" name="username">
                <input type="password" placeholder="password" name="password">
                <button type="submit">Login</button>
            </form>
            {/if}

            <div class="row">
                <div class="col-sm-2">
                    {foreach $ERROR_MESSAGES as $error}
                    <div style="color:red">{$error}<div class="close">X</div></div>
                    {/foreach}
            
                    {foreach $SUCCESS_MESSAGES as $success}
                    <div style="color:green">{$success}<div class="close">X</div></div>
                    {/foreach}
                </div>
            </div>

        </div> -->



