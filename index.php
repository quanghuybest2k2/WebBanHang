<?php
require "./Core/Database.php";
require "./Models/BaseModel.php";
require "./Controllers/BaseController.php";

$ControllerName = ucfirst((strtolower($_REQUEST["controller"]) ?? "Welcome") . "Controller");
$actionName = strtolower($_REQUEST["action"] ?? "index");

// echo $ControllerName . "<br/>";
require "./Controllers/${ControllerName}.php";

$ObjectController = new $ControllerName;
// var_dump($ObjectController);
$ObjectController->$actionName();
