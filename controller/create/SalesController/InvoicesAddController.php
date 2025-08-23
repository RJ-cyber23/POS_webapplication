<?php
    require_once 'Model/update/InvoicesEditModel/InvoicesEditModel.php';
    require_once 'Model/delete/InvoicesDeleteModel/InvoicesDeleteModel.php';
    require_once 'Model/read/SalesModelRead/InvoicesReadModel.php';
    require_once 'Model/Create/SalesModel/InvoicesModel.php';
    class InvoicesAddController
    {
        public function invoicesAdd()
        {
            session_start();
           

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
            elseif(isset($_POST['edit_invoices']))
            {
                $edit=(new InvoicesEditModel())->invoiceEdit($_POST);
                if($edit===true)
                {
                    $_SESSION['success']="Edited Successfully";
                }else{
                    $_SESSION['error']=$edit;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_invoice']))
            {
                $invoice_id=$_POST['invoice_id'] ?? null;
                if($invoice_id)
                {
                    $conn=(new InvoicesDeleteModel())->invoiceDelete($invoice_id);
                    if($conn===true)
                    {
                        $_SESSION['success']="Deleted Successfully! ";
                    }
                    else{
                        $_SESSION['error']=$conn;
                    }
                }else{
                    return "Invalid Cannot Proceed";
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            $users=$this->users_id();
            $customers=$this->customer_id();

            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);
            $conn=new InvoicesReadModel(); $conn->invoicesRead();
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