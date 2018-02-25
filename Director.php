<?php

	class CocinaPizza {

		var $pizzaBuilder;

		public function setPizzaBuilder($pb){ 
			$this->pizzaBuilder = $pb; 
		}
		
		public function getPizza(){ 
			return $this->pizzaBuilder->getPizza(); 
		}

	}

?>