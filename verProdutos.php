<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<title>Produtos</title>
</head>
<body>

	
	<div class="background">
		<div class='centro'>
			<div class='card'>
			<div class="card-body">
				<h4 style="margin-bottom: 8%">Produtos</h4>
				<?php 
					include 'conecta.php';


					$consulta = "SELECT * FROM produtos";
				
					
					foreach ($conex -> query($consulta) as $linhaAtual) {
						echo "<div class='card-header'>";
						echo "Produto: ". $linhaAtual['nome'] ."<br>";
						echo "Preço:".$linhaAtual['preco']."<br>";
							
							echo "</div>";
						
						echo "<hr>";

					}
					echo "</div";
					echo "<br>";

				?>
				<a href="index.php" class="btn btn-secondary btn-lg btn-warning">Voltar</a>
			</div>
		</div>

</body>
</html>