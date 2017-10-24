<?php
session_start();
require 'config.php';


spl_autoload_register(function($class){

	// Sempre que um class for estanciada temos que procurar ela em 3 locais diferentes (Controller, Model e Core)

	// Se é do controller
	if(file_exists('controllers/'.$class.'.php')){
		// Chama o controller
		require 'controllers/'.$class.'.php';

	} // se for model
	else if(file_exists('models/'.$class.'.php')){
		// Chama o model
		require 'models/'.$class.'.php';

	}// Se for Core
	else if(file_exists('core/'.$class.'.php')){
		// Chama o Core
		require 'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();