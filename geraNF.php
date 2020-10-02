<?php 
	include 'conecta.php';
	$dataAtual = $_POST['data'];
	$consulta = $conex -> prepare("INSERT INTO nota_fiscal (data) VALUES ('$dataAtual')");
	$consulta -> execute();
	header('Location: seleUltimaNF.php');
?>