<?php
class HomeController
{
    public function Index() 
    {
        $product=products::getAll();
        require_once 'view/home/home.php';
    }
    public function End_of_Day()
    {
        $report=ViewDB::EODS();
        require_once 'view/Reports/End_of_Day.php';
        return;
    }
    public function Inventory_Status()
    {
        require_once 'view/Reports/Inventory_Status.php';
        return;
    }
    public function Invoice_Status()
    {
        require_once 'view/Reports/Invoices_Total_Sales.php';
        return;
    }
    public function Payment_Breakdown()
    {
        require_once 'view/Reports/Payment_Breakdown.php';
    }
    public function Profit_for_Products()
    {
        require_once 'view/Reports/Profit_for_products.php';
    }
    public function Purchase_Orders_Summary()
    {
        require_once 'view/Reports/Purchase_Orders_Summary.php';
    }
    public function Sales_Summary()
    {
        require_once 'view/Reports/Sales_Summary.php';
    }
    public function Chart()
    {
        require_once 'view/home/charts.php';
    }
}

?>