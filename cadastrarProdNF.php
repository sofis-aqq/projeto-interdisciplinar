<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	include 'conecta.php';
	session_start();
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$consulta = "SELECT * FROM produtos";
	foreach ($conex -> query($consulta) as $linhaAtual) {
		if ($linhaAtual['nome'] == $nome) {
			
			header('Location: cadastrarProd.php');
		}
	}
	$consulta = $conex->prepare(
	"INSERT INTO produtos (nome, preco)
	VALUES ('$nome', '$preco')");
	$consulta -> execute();
	header('Location: verProdutos.php');
		
	
	?>

</body>
</html>