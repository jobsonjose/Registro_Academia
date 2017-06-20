<?php
	session_start();
	$_SESSION['rg']=$_POST['rg'];
	$_SESSION['profissao']=$_POST['profissao'];
	$_SESSION['orgao']=$_POST['orgao'];
	$_SESSION['email']=$_POST['email'];
	$_SESSION['data']=$_POST['data'];
	$_SESSION['cpf']=$_POST['cpf'];
	$_SESSION['nome']=$_POST['nome'];
	$_SESSION['idade']= $_POST['idade'];

	if ($_SESSION['idade'] <18) {

	header('Location:menores.php');

	}else {
	echo "<h1>SEJA BEM-VINDO</h1>";

	}
?>