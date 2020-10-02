<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="bootstrap.bundle.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-widht, initial-scale=1, shrink-to-fit=no">
	<title>Cadastrar produtos</title>
</head>
<body>
	<?php 
		include 'verificador.php';
		include 'cabecalho.php'
	?>
	<div class="background">
		<div class="card centro">
			<form action="cadastrarProdNF.php" method="POST"  class="form-group centro">
				<div class="card-body">
					<h4>Nome:</h4>
						
					<input type="text" name="nome">
				</div>
				<hr>
				<div class="card-body">
					<h4>Preço:</h4>
						
					<input type="int" name="preco">
				</div>
				<hr>
				<input type="submit" name="Enviar" value="Cadastrar" class="btn btn-primary">
			</form>
		</div>
	</div>

</body>
</html>