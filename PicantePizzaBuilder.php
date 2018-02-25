<?php

	//require_once('AbstractBuilder.php');

	class PicantePizzaBuilder extends PizzaBuilder {

		public function buildMasa(){ 
			$this->pizza->setMasa("cocida"); 
		}
		
		public function buildSalsa(){ 
			$this->pizza->setSalsa("picante"); 
		}

		public function buildRelleno(){
			$this->pizza->setRelleno("pimienta+salchicha");
		}
	}
