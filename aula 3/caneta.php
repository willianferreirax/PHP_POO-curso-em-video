	<?php

	class Caneta{

		 private $modelo, $cor , $carga, $tampada;

		function Tampar(){
			$this->tampada = true;
		}

		function Destampar(){
			$this->tampada = false;
		}

		function Rabiscar(){
			if ($this->tampada == true) {
				echo "A caneta está tampada <br>
				Não é possivel rabiscar<br><br>";
			}
			else{
				echo "Estou rabiscando!";
			}
		}
		
		function setModelo($modelo1){
			$this->modelo = $modelo1;
		}

		function setCor($cor1){
			$this->cor = $cor1;
		}

		function setCarga($carga1){
			$this->carga = $carga1;
		}

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