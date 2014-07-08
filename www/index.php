<?php

  include 'templates/scripts/scripts.php';

	include 'Twig/Autoloader.php';
	Twig_Autoloader::register();

	try {
	  $loader = new Twig_Loader_Filesystem('templates');
	  
	  $twig = new Twig_Environment($loader);


		// echo $twig->render('main.tmpl');

		$template = $twig->loadTemplate('main.tmpl');
		
		echo $template->render(array (
 			'main_menu' => $main_menu,
 			'cities' => $cities
 		));

	  
	} catch (Exception $e) {
	  die ('ERROR: ' . $e->getMessage());
	}
?>