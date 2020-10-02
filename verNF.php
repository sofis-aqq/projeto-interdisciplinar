<?php 
include 'conecta.php';

$consulta = "SELECT * FROM nota_fiscal";

foreach ($conex -> query($consulta) as $linhaAtual) {
	echo "Nota Fiscal:".$linhaAtual['nf']."<br>";
	echo "Data:".$linhaAtual['data']."<br>";
	echo "Valor total:".$linhaAtual['valor_total']."<br>";

	$nota = $linhaAtual['nf'];
	$consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
	foreach ($conex -> query($consulta2) as $linhaAtual2) {
		echo "ID: ". $linhaAtual2['id'] ."-=-";
		echo "Código produto:".$linhaAtual2['cod_produto']."-=-";
		$codigo =$linhaAtual2['cod_produto'];
		$consulta3 = "SELECT * FROM produtos WHERE id='$codigo'";
		foreach ($conex -> query($consulta3) as $linhaAtual3) {
			echo "Produto: ".$linhaAtual3['nome']."-=-";
			echo "Valor unitário: ".$linhaAtual3['preco']."-=-";
		}

		echo "Quantidade: ".$linhaAtual2['qtde']."-=-";
		echo "Sub total: ".$linhaAtual2['subtotal']."<br>";
	}
	echo "<hr>";

}
echo "<br>";

?>
<a href="index.php" type="submit" class="btn btn-warning" role="button">Voltar</a>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

