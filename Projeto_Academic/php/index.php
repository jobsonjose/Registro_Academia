<?php 
    require 'config.php';
?>
<html>
    <form action="login.php" method="POST" class="login">
        <fieldset>
            <legend>Usuario</legend>
            <input type="text" name="login" placeholde="Login">
            <input type="password" name="senha" placeholde="Senha">
            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</html>