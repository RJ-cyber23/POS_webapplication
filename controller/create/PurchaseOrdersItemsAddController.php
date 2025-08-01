<?php
use LDAP\Result;
require_once 'Model/Create/PurchaseModelOrdersItems.php';
    class PurchaseOrdersItemsAddController
    {
        public function purchase_orders_items()
        {
             session_start();
        $success = $_SESSION['success'] ?? null;
        $error = $_SESSION['error'] ?? null;
        unset($_SESSION['success'], $_SESSION['error']); 

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_purchaseorderitems']))
            {
                $conn=(new PurchaseModelOrdersItems())->purchase_order_items_model($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Purchase Orders Items Added Successfully!";
                }
                else
                {
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            $suppliers=$this->getAll_Suppliers();
            $products=$this->getAll_product_id();
            require_once 'view/Add/PurchaseOrdersItems.php';

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
        
        public function getAll_product_id()
        {
            $conn=(new Database())->connect();
            if($conn)
            {
                $select=$conn->query("SELECT product_id, product_name FROM Products");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return[];
        }

    }

?>