<!DOCTYPE html>
<html>
<head>
	<title>aula 2 poo - curso em video</title>
</head>
<body>

	<?php
		require_once "caneta.php";

		$caneta = new Caneta();

		$caneta->modelo="bic";

		$caneta->cor="azul";

		$caneta->carga=10;

		$caneta->Rabiscar();

		$caneta->tampada=false;

		$caneta->Exibir();


	?>

</body>
</html>