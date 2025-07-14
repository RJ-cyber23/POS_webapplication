<?php
class HomeController
{
    public function Index() 
    {
        $product=products::getAll();
        require_once 'view/home.php';
    }
}

?>