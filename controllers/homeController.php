<?php

class homeController extends controller{
	public function __construct(){
		// Estancia a class
		$u = new Usuarios();
		$u->islogged();

	}
	public function index(){
		$dados = array(
			
			
		);
		$this->loadTemplate('front-page/home', $dados);
	}		
}