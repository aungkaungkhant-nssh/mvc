<?php
require_once ("../vendor/autoload.php");

use app\controllers\AuthController;
use app\controllers\SiteController;
use app\core\Application;

$app=new Application(dirname(__DIR__));
$app->router->get("/",[SiteController::class,"home"]);
$app->router->get("/about","about");

$app->router->get("/contact","contact");
// $app->router->post("/contact",[SiteController::class,"handleSubmit"]);
$app->router->get("/register","register");
$app->router->post("/register",[AuthController::class,"register"]);
$app->router->get("/login",[AuthController::class,"login"]);
$app->run();