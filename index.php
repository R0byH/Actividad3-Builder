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
	
	echo "\n\n\n\nPizza Hawai: ";
	$cocina -> setPizzaBuilder($pizza_hawai);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	echo "\n\n\n\nPizza con Hongos: ";
	$cocina -> setPizzaBuilder($pizza_hongos);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
	echo "\n\n\n\nPizza Picante: ";
	$cocina -> setPizzaBuilder($pizza_picante);
	$cocina -> PrepararPizza();
	$pizza = $cocina->getPizza();
	$pizza->mostrarComponentes();
	
?>