<?php 
include 'conecta.php';
echo "<br><hr>";

$consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
$consulta = $conex->query($consulta);
$linhaAtual = $consulta->fetch_assoc();
$ultimoRegis = $linhaAtual['ultima'];
echo "Nota Fiscal: ".$ultimoRegis."<br>";
echo "<hr>";


session_start();
$_SESSION['nf'] = $ultimoRegis;
?>


<!DOCTYPE html>
<html>
<head>
	<title>Ultima nota</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<section class="container">
	<form action="insereItem.php?nf='<?php echo $ultimoRegis; ?>'" method="post">
		<h2>Nota fiscal: </h2> <input type="text" name="nf" value="<?php echo $ultimoRegis; ?>">
		<br>
		<p>
			Produto: 
			<select name="produtoOpcao" id="produtoOpcao">
				<?php 
					$consulta = "SELECT * FROM produtos";
					foreach ($conex -> query($consulta) as $linhaAtual) {
					?>
					<option
					value="<?php echo $linhaAtual['id']; ?>">
					<?php echo $linhaAtual['nome'];?>
					</option>
					<?php
					}
					?>
			</select>
		</p>
		<p>
			Qtde: <input type="text" name="qtde">
		</p>
		<hr>
		<input type="submit" name="adicionar">
	</form>

</section>
</body>
</html>