<?php
    require_once 'controller/create/ProductsController/ReceiveProductsAddController.php';
    require_once 'controller/create/ProductsController/PurchaseOrdersItemsAddController.php';
    require_once 'controller/create/ProductsController/PurchaseOrdersAddController.php';
    require_once 'controller/create/ProductsController/ProductsVariantsAddController.php';
    require_once 'controller/create/ProductsController/ProductsAddController.php';
    require_once 'controller/home/HomeController.php';
    $receiveProducts=new ReceiveProductsAddController();
    $poi=new PurchaseOrdersItemsAddController();
    $purchaseOrders=new PurchaseAdd();
    $productsVariants=new ProductsVariantsAddController();
    $product=new ProductsAddController();
    $home=new HomeController();
    
    switch($page)
    {
        case 'ReceiveProducts': 
            $receiveProducts->receiveProducts();
            break;
        case 'PurchaseOrdersItems':
            $poi->purchase_orders_items();
            break;
        case 'PurchaseOrders':
            $purchaseOrders->purchase();
            break;
        case 'ProductsVariants':
            $productsVariants->variants();
            break;       
        case 'ProductsAdd':
            $product->ProductsAdd();
            break;
        default:
        $home->Index();
        return; 
    }
?>