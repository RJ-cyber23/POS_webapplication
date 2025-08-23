<?php
    require_once 'Model/update/CustomerEditModel.php';
    require_once 'Model/delete/CustomerDeleteModel.php';
    require_once 'Model/read/CustomerModelRead/CustomerReadModel.php';
    require_once 'Model/Create/CustomerModel/CustomerModel.php';
    class CustomerControllerAdd
    {
        public function customerController()
        {
            session_start();
           
//1st if statement is for Create or add
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
//2nd elseif statement is for Update or edit
            elseif (isset($_POST['add_customeredit'])) 
            {
                $result = (new CustomerEditModel())->customerEdit($_POST);

                if ($result === true) {
                    $_SESSION['success'] = "Customer Edited Successfully!";
                } else {
                    $_SESSION['error'] = $result;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
//3rd last elseif statement is for Delete
            elseif (isset($_POST['delete_customer'])) 
            {
                $customer_id = $_POST['customer_id'] ?? null;

                if ($customer_id)
                {
                    $result = (new CustomerDeleteModel())->customerDelete($customer_id);

                    if ($result === true) {
                        $_SESSION['success'] = "Customer deleted successfully!";
                    } else {
                        $_SESSION['error'] = $result; // will store SQL error like #1451
                    }
                } else {
                    $_SESSION['error'] = "No customer ID provided.";
                }
//Last line for if and elseif statement
                header("Location: " .$_SERVER['REQUEST_URI']);
                exit;
            }




            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);
            $conn=new CustomerReadModel();
            require_once 'view/Add/CustomerViews/CustomerView.php';
        }
    }
?>