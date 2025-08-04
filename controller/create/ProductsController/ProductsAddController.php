<?php

use LDAP\Result;
require_once 'Model/Create/ProductsModel/ProductsModel.php';

class ProductsAddController
{
    public function ProductsAdd()
    {
        session_start();
        $success = $_SESSION['success'] ?? null;
        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['success'], $_SESSION['error']); 

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) 
        {
            $result = (new AddProducts())->addProduct($_POST);

            if ($result === true) {
                $_SESSION['success'] = "Product added successfully!";
            } else {
                $_SESSION['error'] = $result;
            }
            header("Location: " . $_SERVER['REQUEST_URI']);
            exit;
        }

        $categories = $this->getAll_Categories();
        $brands=$this->getAll_Brands();
        $suppliers=$this->getAll_Suppliers();
        require 'view/Add/ProductsViews/Products.php';
    }

    
    public function getAll_Suppliers()
    {
        $result=(new Database())->connect();
        if($result)
        {
            $stmt=$result->query("SELECT supplier_id, supplier_name FROM Suppliers ");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function getAll_Brands()
    {
        $result=(new Database())->connect();
        if($result)
        {
            $stmt=$result->query("SELECT brand_id, brand_name from Brand");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function getAll_Categories()
    {
        $result = (new Database())->connect();

        if ($result) {
            $stmt = $result->query("SELECT category_id, category_name FROM Categories");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }

 
}
?>
