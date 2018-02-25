<?php

//include('AbstractBuilder.php');

	class CocinaPizza {

		var $pizzaBuilder;

		public function setPizzaBuilder(PizzaBuilder  $pb){ 
			$this->pizzaBuilder = $pb; 
		}
		
		public function getPizza(){ 
			return $this->pizzaBuilder->getPizza(); 
		}
	
		public function PrepararPizza() {
			$this->pizzaBuilder->crearNuevaPizza();
			$this->pizzaBuilder->buildMasa();
			$this->pizzaBuilder->buildSalsa();
			$this->pizzaBuilder->buildRelleno();
			$this->pizzaBuilder->buildSize();
			$this->pizzaBuilder->buildCost();
		}
	}
		
