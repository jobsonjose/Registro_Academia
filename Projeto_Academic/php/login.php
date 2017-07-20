<?php
    require_once 'config.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM USER WHERE USER_LOGIN = ? and USER_PASSWORD = ?");
    $stmt = $pdo->query("SELECT * FROM USER WHERE USER_LOGIN = '$login' and USER_PASSWORD = '$senha'");
     $res = $stmt->fetchAll();

     if(count($res) > 0){
         header("location: home.php");
        $_SESSION['user'] = $res[0]['USER_NOME'];
     }else{
         alert("Erro ao tentar se conectar");
         header("location: login_error.php");
     }

?>