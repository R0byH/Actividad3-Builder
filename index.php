<?php

	require( __DIR__ . '/Producto.php');
	require( __DIR__ . '/AbstractBuilder.php');
	require( __DIR__ . '/HawaiPizzaBuilder.php');
	require( __DIR__ . '/PicantePizzaBuilder.php');
	require( __DIR__ . '/HongosPizzaBuilder.php');
	require( __DIR__ . '/Director.php');
	
	$cocina = new CocinaPizza();
	$pizza_hawai = new HawaiPizzaBuilder();
	$pizza_hongos = new HongosPizzaBuilder();
	$pizza_picante = new PicantePizzaBuilder();
	
	echo "<center><h2>Pizzas e Ingredientes</h2></center>";

	echo "\n\n\n\n<b><h3>Pizza Hawai: </h3></b>";
	$cocina -> setPizzaBuilder($pizza_hawai);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	echo "\n\n\n\n<b><h3>Pizza con Hongos: </h3></b>";
	$cocina -> setPizzaBuilder($pizza_hongos);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	echo "\n\n\n\n<b><h3>Pizza Picante: </h3></b>";
	$cocina -> setPizzaBuilder($pizza_picante);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	echo "<br><br><br><br><br><br><br><br><br>";
	echo "<center><h3>Cesar Roberto Herbas Delgadillo</h3></center>";
?>