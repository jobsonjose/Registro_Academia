<?php 
    session_start();
        $user = 'root';
        $pass = '123456';

        $dsn = "mysql:host=localhost;dbname=bd-wta";

        $pdo = new PDO($dsn, $user);
    if(isset($_SESSION['user'])){
        header("location: home.php");
    }

?>

