<?php
    require_once 'Model/Create/SalesModel/InvoicesModel.php';
    class InvoicesAddController
    {
        public function invoicesAdd()
        {
            session_start();
            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_invoice']))
            {
                $conn=(new InvoicesModel())->invoiceModel($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Invoices Added Successfully! ";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit; 
            }
            $users=$this->users_id();
            $customers=$this->customer_id();
            require_once 'view/Add/SalesViews/InvoicesView.php';
        }

        public function users_id() 
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT user_id, username FROM Users");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        public function	customer_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT customer_id, customer_name FROM Customers");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }

 	
    }
?>