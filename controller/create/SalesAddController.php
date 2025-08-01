<?php
    require_once 'Model/Create/SalesModel.php';
    class SalesAddController
    {
        public function salesAdd()
        {
            session_start();
            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_sales']))
            {
                $conn=(new SalesModel())->salesModel($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Sales Added Successfully! ";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
            }

            $variants=$this->variant_id();
            $products=$this->product_id();
            $invoices=$this->invoice_id();
            require_once 'view/Add/SalesView.php';
        }
        public function invoice_id()
        {
            $con=(new Database())->connect();
            $select=$con->query(
                "SELECT invoice_id FROM Invoices");
                return $select->fetchAll(PDO::FETCH_ASSOC);
        }
        public function product_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT product_id, product_name FROM Products");
                return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        public function variant_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT variant_id FROM ProductVariants");
                return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        

    }
?>