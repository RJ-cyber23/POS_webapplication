<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'core/database.php';
require_once 'Model/read/products.php';
require_once 'controller/home/HomeController.php';
require_once 'Model/read/viewDB.php';
require_once 'Model/read/view1DB.php';
require_once 'controller/create/AddProductsController.php';
require_once 'controller/create/AddVariantsController.php';


$variants=new AddVariantsController();
// Instantiate the controller BEFORE using it
$controller = new HomeController();
$add=new AddProductsController();


// Get the page parameter (defaults to 'home' if not set)
$page = $_GET['page'] ?? 'home';

switch ($page) 
{
    case 'AddVariants':
        $variants->variants();
        break;
    case 'Add Product':
        $add->ProductsAdd();
        break;
    case 'Chart': 
        $controller->Chart();
        break;
    case 'Sales_Summary':
        $controller->Sales_Summary();
        break;
    case 'Purchase_Orders_Summary':
        $controller->Purchase_Orders_Summary();
        break;
    case 'Profit for Products':
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
