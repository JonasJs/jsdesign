<?php

class cpanelController extends controller{
	public function index(){
		$dados = array(
			
		);

		$this->loadTemplate('admin/cpanel', $dados);
	}

	public function sobre(){
		$dados = array();
		$textAreaSobre = addslashes($_POST['textAreaSobre']);

		$cpanel = new cpanel();
		$dados['erro'] = $cpanel->sobre($textAreaSobre);

		$this->loadTemplate('admin/cpanel', $dados);
	}		
}