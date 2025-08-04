<?php

use LDAP\Result;

    require_once 'Model/Create/ProductsModel/PurchaseOrderModel.php';
    class PurchaseAdd
    {
        public function purchase()
        {
            session_start();
            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_purchase']))
            {
                $connect=(new PurchaseOrderModel())->purchase_order_model($_POST);
                if($connect===true)
                {
                    $_SESSION['success']="Purchase Added Successfully!";
                }
                else
                {
                    $_SESSION['error']=$connect;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            $status=$this->getAll_status_id();
            $suppliers=$this->getAll_supplier_id();
            $products=$this->getAll_product_id();
            require_once 'view/Add/ProductsViews/purchaseOrder.php';
        }

        public function getAll_status_id()
        {
            $select=(new Database())->connect();
            if($select)
            {
                $result=$select->query("SELECT status_id, status_name FROM PurhcaseOrderStatus");
                return $result->fetchAll(PDO::FETCH_ASSOC);
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

        public function getAll_supplier_id()
        {
            $conn=(new Database())->connect();
            if($conn)
            {
                $select=$conn->query("SELECT supplier_id, supplier_name FROM Suppliers");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return[];
        }
    }

?>