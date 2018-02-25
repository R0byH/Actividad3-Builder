<?php
	include('ConcreteBuilder.php');
	include('Director.php')
	
	$cocina = new CocinaPizza();
	$pizza_hawai = new HawaiPizzaBuilder();
	$pizza_hongos = new HongosPizzaBuilder();
	$pizza_picante = new PicantePizzaBuilder();
	
	$cocina -> setPizzaBuilder($pizza_hawai);
	$cocina -> setPizzaBuilder($pizza_hongos);
	$cocina -> setPizzaBuilder($pizza_picante);
	
?>