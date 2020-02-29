<!DOCTYPE html>
<html>
<head>
	<title>aula 3 poo - curso em video</title>
</head>
<body>

	<?php

	//agora os atributos sao privados
	//agora usamos getters e setters
		require_once "caneta.php";

		$caneta = new Caneta();

		$caneta->setModelo("bic");

		$caneta->Tampar();
		
		$caneta->Rabiscar();

		$caneta->Exibir();

	?>

</body>
</html>