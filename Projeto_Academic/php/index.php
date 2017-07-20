<html>
    <?php 
        require 'header.php';
    ?>
    <form action="login.php" method="POST" class="login">
        <fieldset>
            <legend>Usuario</legend>
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="Entrar">
        </fieldset>
    </form>
</html>