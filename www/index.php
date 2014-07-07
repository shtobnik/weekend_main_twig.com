<?php

	require_once '/Twig-1.16.0/lib/Twig/Autoloader.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('templates');
	
	$twig = new Twig_Environment($loader, array(

  		'cache' => 'cache',

	));

	// $template = $twig->loadTemplate('index.html');
	echo $twig->render('index.html');
?>