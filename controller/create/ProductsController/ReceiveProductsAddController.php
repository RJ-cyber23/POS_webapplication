<?php
    require_once 'Model/Create/ProductsModel/ReceiveProductsModel.php';
    class ReceiveProductsAddController
    {
        public function receiveProducts()
        {
            session_start();
            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_receive']))
            {
                $conn=(new ReceiveProductsModel())->receiveProductsModel($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Receive Products Added Successfully! ";
                }
                else
                {
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
            }

            $users=$this->user_id();
            $suppliers=$this->supplier_id();
            $purchase=$this->Purchase_Orders_id();
            $products=$this->product_id();
            require_once 'view/Add/ProductsViews/ReceiveProducts.php';
        }
        public function product_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT product_id, product_name FROM Products");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
        public function Purchase_Orders_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT Purchase_Orders_id, Purchase_Orders_Items_id FROM PurchaseOrders ");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
        public function supplier_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT supplier_id, supplier_name FROM Suppliers");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
        public function user_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT    user_id, username  FROM    Users");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
	 	 	    	 	 	
    }
?>