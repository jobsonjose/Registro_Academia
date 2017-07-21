<?php 
    require 'config.php';
    
    $ret = $pdo->query("SELECT * FROM CLIENTS");
    $result = $ret->fetchall();


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
                <th>Email</th></tr>

                <tr>
                <?php
                    for ($i=0; $i < count($result); $i++) { 
                ?>
                        <td><?php echo $result[0]['CLI_ID']?></td>
                        <td><?php echo $result[0]['CLI_NOME']?></td>
                        <td><?php echo $result[0]['CLI_EMAIL']?></td>
                </tr>
                <?php
                    }
            ?>
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