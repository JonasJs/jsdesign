<?php
require 'environment.php';

$config = array();
//Verifica se o environment esta em developmente ou em production
if(ENVIRONMENT == 'development'){
	define("BASE_URL", "/jsdesign/");
	// Configuração local
	$config['dbname'] = 'jsdesign';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}else{
	define("BASE_URL", "jsdesign/");
	// Configuração do servidor
	$config['dbname'] = 'jsdesign';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
Global $db;
try{
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}