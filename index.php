<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'core/database.php';
require_once 'Model/products.php';
require_once 'controller/HomeController.php';
require_once 'Model/viewDB.php';
require_once 'Model/view1DB.php';

// Instantiate the controller BEFORE using it
$controller = new HomeController();

// Get the page parameter (defaults to 'home' if not set)
$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'End_of_Day':
        $controller->End_of_Day();
        break;
    case 'home':
    default:
        $controller->Index();
        break;
}
?>
