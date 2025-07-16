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

switch ($page) 
{
    case 'Profit for Products';
        $controller->Profit_for_Products();
    break;
    case 'Payment Breakdown':
        $controller->Payment_Breakdown();
        break;
    case 'Invoices Total Sales':
        $controller->Invoice_Status();
        break;
    case 'Inventory Status':
        $controller->Inventory_Status();
        break;

    case 'End_of_Day':
        $controller->End_of_Day();
        break;
    case 'home': 
    default:
        $controller->Index();
        break;
}
?>
