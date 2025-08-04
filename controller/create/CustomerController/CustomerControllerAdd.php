<?php
    require_once 'Model/Create/CustomerModel/CustomerModel.php';
    class CustomerControllerAdd
    {
        public function customerController()
        {
            session_start();
            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_customer']))
            {
                $conn=(new CustomerModel())->customerModel($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Customer Added Successfully!";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            require_once 'view/Add/CustomerViews/CustomerView.php';
        }
    }
?>