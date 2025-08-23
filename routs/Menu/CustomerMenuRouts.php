<?php
    require_once 'controller/create/CustomerController/PaymentControllerAdd.php';
    require_once 'controller/create/CustomerController/CustomerControllerAdd.php';
    
    $payment=new PaymentControllerAdd();
    $customer=new CustomerControllerAdd();
    
    switch($page)
    {
        case 'PaymentAdd':
            $payment->paymentController();
            break;
        case 'CustomerAdd': 
            $customer-> customerController();
            break;
            
    }
?>