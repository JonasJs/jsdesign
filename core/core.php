<?php

// Faz com que o mvc se inicie
class Core {

	public function run(){
		//Pega a url que esta sendo enviada e parti dela identificamos qual controller enviar e dentro desse controller qual é a action

		$url = '/';

		// Se foi enviado algo
		if(isset($_GET['url'])){
			// $url concatena com o que foi enviado
			$url.=$_GET['url'];
		}

		$params = array();

		// $url não ta vazia e $url é diferente de uma /
		if(!empty($url) && $url != '/'){
			$url = explode('/', $url);
			//Remove o primeiro registro do array
			array_shift($url);
			//o controller se torna o 0
			$currentController = $url[0].'Controller';
			// Quando ja pegamos nosso controller
			//Remove novamente o primeiro
			array_shift($url);

			//Se existe e se esta preechido /
			if(isset($url[0]) && !empty($url[0])){
				$currentAction = $url[0];
				//Remove novamente o primeiro
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			// se tiver itens no $url ainda ele se torna o parametro
			if(count($url) > 0){
				$params = $url;
			}

		}else{
			// Define o controller padrão
			$currentController = 'homeController';
			// Define a Action padrão
			$currentAction = 'index';
		}
		//Not Found
		if(!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)){
			$currentController = 'notfoundController';
			$currentAction = 'index';
		}

		//Define o controller.
		//estancia a class controller
		$c = new $currentController();
		// Excuta  Action e paramentros 
		call_user_func_array(array($c, $currentAction), $params);
	}
}