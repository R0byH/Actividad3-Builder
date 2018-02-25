<?php
	include('PicantePizzaBuilder.php');
	include('HawaiPizzaBuilder.php');
	include('HongosPizzaBuilder.php');
	include('Director.php');
	
	$cocina = new CocinaPizza();
	$pizza_hawai = new HawaiPizzaBuilder();
	$pizza_hongos = new HongosPizzaBuilder();
	$pizza_picante = new PicantePizzaBuilder();
	
	$cocina -> setPizzaBuilder($pizza_hawai);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	$cocina -> setPizzaBuilder($pizza_hongos);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	$cocina -> setPizzaBuilder($pizza_picante);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
?>