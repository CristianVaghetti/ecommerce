<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    $page = new Page(); // abre a pagina -> adiciona o header e o body
	$page -> setTpl("index"); // carrega o conteudo dentro do body
	// fecha o header e o body e coloca o footer
});

$app->get('/admin', function() {
    $page = new PageAdmin(); // abre a pagina -> adiciona o header e o body
	$page -> setTpl("index"); // carrega o conteudo dentro do body
	// fecha o header e o body e coloca o footer
});

$app->run();

 ?>