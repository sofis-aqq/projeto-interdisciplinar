<?php 
include 'conecta.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data da nota fiscal</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
		<section class="container">
	<form action="geraNF.php" method="post">
		<p>Insira a data da venda</p>
		<h1> Data:<input type="date" name="data"> </h1>
		<input type="submit" name="Continuar">

	</form>
</section>
</body>
</html>