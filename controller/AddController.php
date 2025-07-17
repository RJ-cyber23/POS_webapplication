<?php

use LDAP\Result;
require_once 'Model/Create/AddProducts.php';

class AddController
{
    public function ProductsAdd()
    {
        $success = null;
        $error = null;

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
            $productModel = new AddProducts();
            $result = $productModel->addProduct($_POST);

            if ($result === true) {
                $success = "Product added successfully!";
            } else {
                $error = $result; // Error message returned by the model
            }
        }
       $categories = $this->getAll_Categories();

        // Make $success and $error available in the view
        require 'view/Add/Products.php';
    }

    public function getAll_Categories()
    {
        $conn=new Database();
        $reult=$conn->connect();

        if($reult)
        {
            $stmt=$reult->query("SELECT category_id, category_name from Categories");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}
?>
