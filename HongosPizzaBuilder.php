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
		
		public function buildSize(){ 
			$this->pizza->setSize("Interminable"); 
		}

		public function buildCost(){ 
			$this->pizza->setCost("150Bs"); 
		}
	} 
