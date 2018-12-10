<?php
include "../lib/mysql.php"; // Create MySQL PDO Connection to be used as $db
include "../lib/pages.php";
include "../vendor/autoload.php";

$app = new \Slim\Slim();
$app->get('/', function () use ($app) {
    $page = new home;
    $app->render($page->Template(),$page->Data());
});
$app->run();




?>