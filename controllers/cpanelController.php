<?php

class cpanelController extends controller{
	public function index(){
		$dados = array(
			
		);

		$this->loadView('admin/cpanel', $dados);
	}		
}