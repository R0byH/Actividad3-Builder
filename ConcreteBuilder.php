<?php
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
	}	
	
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
?>