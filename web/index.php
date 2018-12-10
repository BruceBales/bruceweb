<?php

include "../lib/mysql.php"; // Create MySQL PDO Connection to be used as $db
include "../lib/pages.php";
include "../vendor/autoload.php";

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$app->get('/', function () use ($app) {
    $page = new \Blog\Pages\home;
    $app->render($page->Template(),$page->Data());
});
$app->run();


?>