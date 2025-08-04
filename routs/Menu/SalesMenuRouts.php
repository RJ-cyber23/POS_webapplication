<?php
    require_once 'controller/create/SalesController/SalesAddController.php';
    require_once 'controller/create/SalesController/InvoicesAddController.php';
    $sales=new SalesAddController();
    $invoices=new InvoicesAddController();


    switch($page)
    {
        case 'SalesAdd': 
            $sales->salesAdd();
            break;
        case 'InvoiceAdd':
            $invoices->invoicesAdd();
            break;
    }
?>