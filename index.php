<?php

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->get('/', 

function(){
    require_once("view/index.php");
});

$app->get('/OsNoivos.php', 

function(){
    require_once("view/OsNoivos.php");
});

$app->get('/OsNoivos.php', 

function(){
    require_once("view/OsNoivos.php");
});

$app->get('/cerimonia.php', 

function(){
    require_once("view/cerimonia.php");
});

$app->get('/Ospadrinhos.php', 

function(){
    require_once("view/Ospadrinhos.php");
});

$app->get('/ListaPresentes.php', 

function(){
    require_once("view/ListaPresentes.php");
});

$app->get('/Local.php', 

function(){
    require_once("view/Local.php");
});

$app->get('/presente.php', 

function(){
    require_once("view/presente.php");
});


$app->run();

?>