	<?php

	class Caneta{

		 var $modelo, $cor , $carga, $tampada;

		function Tampar(){
			$this->tampada = true;
		}

		function Destampar(){
			$this->tampada = false;
		}

		function Rabiscar(){
			echo "Estou rabiscando!<br>";
		}
		/*
		function setModelo($modelo1){
			$modelo = $modelo1;
		}

		function setCor($cor1){
			$cor = $cor1;
		}

		function setCarga($carga1){
			$carga = $carga1;
		}
*/
		function Exibir(){

			if ($this->tampada == true) {
				echo "A caneta está tampada<br>";
			}
			elseif ($this->tampada == false) {
				echo "A caneta está destapada<br>";
			}

			echo "A marca da caneta é ".$this->modelo."<br>";

			echo "A cor da caneta é ".$this->cor."<br>";

			echo "A carga da caneta está em ".$this->carga."%<br>";


		}
		
	}

	?>