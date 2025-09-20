<?php
    require_once 'Model/delete/ProductsDeleteModel/ReceiveProductsDeleteModel.php';
    require_once 'Model/update/ProductsEditModel/ReceivedProductsEditModel.php';
    require_once 'Model/read/ProductsModelRead/ReceiveProductsReadModel.php';
    require_once 'Model/Create/ProductsModel/ReceiveProductsModel.php';
    class ReceiveProductsAddController
    {
        public function receiveProducts()
        {
            session_start();
          

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
                exit;
            }
            elseif(isset($_POST['edit_receive_products']))
            {
                $conn=(new ReceivedProductsEditModel())->receiveProductEdit($_POST);
                if($conn===true)
                {
                  $_SESSION['success']= "Edited Successfully! ";
                }else{
                    $_SESSION['error']= $conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_receive_product_id']))
            {
                $receive_product_id=$_POST['receive_product_id'] ?? null;
                if($receive_product_id)
                {
                    $conn=(new ReceiveProductsDeleteModel())->receiveProductsDelete($receive_product_id);
                    if($conn===true)
                    {
                        $_SESSION['success'] = "Deleted Successfully! ";
                    }else{
                        $_SESSION['error'] = $conn;
                    }
                } 
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
        

            $users=$this->user_id();
            $suppliers=$this->supplier_id();
            $purchase=$this->Purchase_Orders_id();
            $products=$this->product_id();

            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);
            $conn=(new ReceiveProductsReadModel());
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