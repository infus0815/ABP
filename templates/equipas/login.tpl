
{include file='common/header.tpl'}

<div>
    <h1>Login</h1>
<form action="{$BASE_URL}actions/equipas/login.php" method="post" enctype="multipart/form-data">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="password" name="password">
    <input type="submit" value=">">
</form>
</div>

{include file='common/footer.tpl'}