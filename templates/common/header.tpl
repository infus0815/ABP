<!DOCTYPE html>
<html>
<head>
    <title>Fritter</title>
    <meta charset='utf-8'>
    <script
            src="https://code.jquery.com/jquery-2.2.3.js"
            integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
          crossorigin="anonymous">

    <script src="{$BASE_URL}lib/jquery-ui/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="{$BASE_URL}lib/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="{$BASE_URL}css/style.css">
    <script src="{$BASE_URL}javascript/main.js"></script>



</head>
<body>
<header>
    <h1><a href="{$BASE_URL}">ABP</a></h1>
    {if $USERNAME}
        {include file='common/menu_logged_in.tpl'}
    {else}
        {include file='common/menu_logged_out.tpl'}
    {/if}
</header>

<div id="error_messages">
    {foreach $ERROR_MESSAGES as $error}
        <div class="error">{$error}<a class="close" href="#">X</a></div>
    {/foreach}
</div>
<div id="success_messages">
    {foreach $SUCCESS_MESSAGES as $success}
        <div class="success">{$success}<a class="close" href="#">X</a></div>
    {/foreach}
</div>
