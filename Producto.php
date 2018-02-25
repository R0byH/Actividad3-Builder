<?php

	class Pizza {
		
		var $masa = null;
		var $salsa = null;
		var $relleno = null;
		var $size = null;
		var $cost = null;

		public function setMasa($masa){ 
			$this->masa = $masa; 
		}
			
		public function setSalsa($salsa){ 
			$this->salsa = $salsa;
		}

		public function setRelleno($relleno){ 
			$this->relleno = $relleno; 
		}

		public function setSize($size){ 
			$this->size = $size; 
		}

		public function setCost($cost){ 
			$this->cost = $cost; 
		}

		public function mostrarComponentes(){
			echo "<b>masa: </b>".$this->masa."; <b>salsa: </b>".$this->salsa."; <b>relleno: </b>".$this->relleno."; <b>tamaño: </b>".$this->size."; <b>precio: </b>".$this->cost."<br>";
		}
	}

