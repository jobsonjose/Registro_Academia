<?php 
    require 'config.php';
    
?>
<html>
    <header>
        <?php include 'header.php' ?>
    </header>
    <body>
        <?php 
            require 'nav.php';
        ?>
   <div class="main">
        <div class="clients">
            <table>
                <tr><th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Pagamento</th>
                <th>Remove</th></tr>
            </table>
        </div>
        <div class="services">
            <form>
                <input type="text" name="" placeholder="Equipamento">
                <select>
                    <option value="">--</option>
                    <?php 

                    ?>
                </select>
                <input type="number"  name="" placeholder="Valor Enviado">
            </form>
        </div>
    </div>
        

    </body>
</html>