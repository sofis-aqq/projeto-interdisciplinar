<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<?php 
	include 'conecta.php';
	echo "<hr>";
	session_start();
	$nf = $_SESSION['nf'];

	$consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

	echo "Nota Fiscal: ". $nf ."<br>";
	$total = 0;
	foreach ($conex -> query($consulta) as $linhaAtual) {
		echo "Código dos produtos:". $linhaAtual['cod_produto']. "<br>";
		echo "Quantidade:".$linhaAtual['qtde'] ."<br>";
		echo "Subtotal:".$linhaAtual['subtotal'] ."<br>";
		$total = $total + $linhaAtual['subtotal'];
		echo "<hr>";
	}
	echo "Total:".$total."<br>";

	?>
	<p> O que deseja fazer? </p>
	<a href="seleUltimaNF.php">Inserir novo produto</a>
	<a href="finalizar.php?total=<?php echo $total; ?>">Finalizar nota fiscal</a>


</body>
</html>