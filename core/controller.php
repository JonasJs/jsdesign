<?php

//Ajudador dos controllers

class controller{

	// Carrega um View
	public function loadView($viewName, $viewData = array()){
		// Tranforma as chaves do array em variaveis 
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	// Carrega um Template
	public function loadTemplate($viewName, $viewData = array()){
		require 'views/template.php';
	}

	// Carrega o View dentro do template
	public function loadViewInTemplate($viewName, $viewData = array()){
		// Tranforma as chaves do array em variaveis 
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}