<?php 
    require 'config.php';

?>
<div class="nav">
    <li><?= $_SESSION['user'] ?></li>
    <li><a href="logout.php">Sair</a></li>
</div>