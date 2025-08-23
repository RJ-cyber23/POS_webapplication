<?php
    require_once 'Model/delete/InvoicesDeleteModel/SalesDeleteModel.php';
    require_once 'Model/update/InvoicesEditModel/SalesEditModel.php';
    require_once 'Model/read/SalesModelRead/SalesReadModel.php';
    require_once 'Model/Create/SalesModel/SalesModel.php';
    class SalesAddController
    {
        public function salesAdd()
        {
            session_start();
         

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
                exit;
            }
            elseif(isset($_POST['edit_sales']))
            {
                $conn=(new SalesEditModel())->salesEdit($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Edited Successfully! ";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_sales']))
            {
                $sales_id=$_POST['sales_id'] ?? null;
                if($sales_id)
                {  
                    $conn=(new SalesDeleteModel())->salesDelete($sales_id);
                    if($conn===true)
                    {
                        $_SESSION['success']="Deleted Successfully! ";
                    }else{
                        $_SESSION['error']=$conn;
                    }
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }

            $variants=$this->variant_id();
            $products=$this->product_id();
            $invoices=$this->invoice_id();

            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);
            $read=new SalesReadModel();
            require_once 'view/Add/SalesViews/SalesView.php';
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