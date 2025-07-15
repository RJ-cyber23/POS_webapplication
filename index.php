<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


require_once 'core/database.php';
require_once 'Model/products.php';
require_once 'controller/HomeController.php';
require_once 'Model/viewDB.php';
require_once 'Model/view1DB.php';


 


$controller= new HomeController();
$controller->Index();

?>