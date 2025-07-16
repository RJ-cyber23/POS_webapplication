<?php
class HomeController
{
    public function Index() 
    {
        $product=products::getAll();
        require_once 'view/home.php';
    }
    public function End_of_Day()
    {
        $report=ViewDB::EODS();
        require_once 'view/End_of_Day.php';
    }
}

?>