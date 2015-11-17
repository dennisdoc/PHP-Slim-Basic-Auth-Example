<?php
require '../php/Slim/Slim.php';
require '../php/Slim/Middleware.php';
require '../php/Slim/Middleware/HttpBasicAuth.php';


\Slim\Slim::registerAutoloader ();

$app = new \Slim\Slim ();
$app->add(new \Slim\Middleware\HttpBasicAuth( "USUARIO","SENHA" ));

$app->get ( '/servico/lista', function ()use($app) {
	echo json_encode("{'id':'123','nome':'teste'}");
});

$app->post ( '/servico', function () use($app) {
	$id=$app->request()->post('id');
	$result="[{'id':".$id."}]";
	echo json_encode($result);
});
$app->run ();

?>