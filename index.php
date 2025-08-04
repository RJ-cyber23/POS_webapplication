<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'core/database.php';

$page = $_GET['page'] ?? 'home';

// Define which router handles which pages
$routerMap = [
    //Customer Menu Routs
    'CustomerAdd'       =>'routs/Menu/CustomerMenuRouts.php',
    'PaymentAdd'        =>'routs/Menu/CustomerMenuRouts.php',
    //Customer Menu end here!
    //Sales Menu routs
    'InvoiceAdd'        =>'routs/Menu/SalesMenuRouts.php',
    'SalesAdd'          =>'routs/Menu/SalesMenuRouts.php'
    //Sales Menu End here!
];

// If the page exists in the map, load its router; otherwise, load web.php
if (array_key_exists($page, $routerMap)) {
    require_once $routerMap[$page];
}else {
    require_once 'routs/Menu/ProductsMenuRouts.php';
}
