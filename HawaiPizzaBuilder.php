<?php

	//include('AbstractBuilder.php');
		
	class HawaiPizzaBuilder extends PizzaBuilder {

		public function buildMasa(){ 
			$this->pizza->setMasa("suave"); 
		}

		public function buildSalsa(){ 
			$this->pizza->setSalsa("dulce"); 
		}

		public function buildRelleno(){ 
			$this->pizza->setRelleno("jamón+piña"); 
		}
		
		public function buildSize(){ 
			$this->pizza->setSize("Familiar"); 
		}

		public function buildCost(){ 
			$this->pizza->setCost("60Bs"); 
		}
	}	
	
