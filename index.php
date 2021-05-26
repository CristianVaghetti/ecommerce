<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

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

$app->get('/admin/login', function() {
    $page = new PageAdmin(["header" => false, "footer" => false]); // abre a pagina -> adiciona o header e o body
	$page -> setTpl("login"); // carrega o conteudo dentro do body
	// fecha o header e o body e coloca o footer
});

$app->post('/admin/login', function() {
	User::login($_POST["login"], $_POST["password"]);
	header("Location: /admin");
	exit;
});

$app->run();

 ?>