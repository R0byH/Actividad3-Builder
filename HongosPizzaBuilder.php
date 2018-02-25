<?php	
	
	//include('AbstractBuilder.php');
	
	class hongosPizzaBuilder extends PizzaBuilder {

		public function buildMasa(){ 
			$this->pizza->setMasa("suave"); 
		}
		public function buildSalsa(){ 
			$this->pizza->setSalsa("dulce+picante"); 
		}
		public function buildRelleno(){ 
			$this->pizza->setRelleno("jamón+hongos+tocino"); 
		}
	} 
