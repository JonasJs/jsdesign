<?php

class homeController extends controller{
	public function __construct(){


	}
	public function index(){
		$dados = array(
			
			
		);
		$this->loadTemplate('front-page/home', $dados);
	}		
}