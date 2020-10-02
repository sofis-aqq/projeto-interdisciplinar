<?php
	include 'conecta.php';
	session_start();
	$nf = $_SESSION['nf'];
	$total = $_GET['total'];
	echo "Nota Fiscak: ". $nf ."<br>";
	echo "Total:". $total ."<br>";

	$consulta = $conex -> prepare(
		"UPDATE nota_fiscal SET valor_total ='$total' WHERE nf = '$nf'"
	);
	$consulta -> execute();

	header('Location: logout.php');
?>