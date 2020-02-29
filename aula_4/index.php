<!DOCTYPE html>
<html>
<head>
	<title>aula 4 poo - curso em video</title>
</head>
<body>

	<?php

	//agora os atributos sao privados
	//agora usamos getters e setters
	//agora usamos construtor na classe caneta
		require_once "caneta.php";

		$caneta = new Caneta();

		$caneta->setModelo("bic");

		$caneta->setCor("Verde");

		$caneta->setCarga(100);

		$caneta->Tampar();
		
		$caneta->Rabiscar();

		$caneta->Exibir();

	?>

</body>
</html>