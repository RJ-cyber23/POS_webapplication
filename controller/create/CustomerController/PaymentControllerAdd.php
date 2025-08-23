 <?php
    require_once 'Model/delete/PaymentDeleteModel.php';
    require_once 'Model/read/CustomerModelRead/PaymentsReadModel.php';
    require_once 'Model/update/PaymentEditModel.php';
    require_once 'Model/Create/CustomerModel/PaymentModel.php';
    class PaymentControllerAdd
    {
        public function paymentController()
        {
            session_start();
          

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_payments']))
            {
                $conn=(new PaymentModel())->paymentModel($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Customer Added Successfully!";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['add_editPayment']))
            {
                $conn=(new PaymentEditModel())->paymentEdit($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Payment Edited Successfully!";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_payment_id']))
            {
                $payment_id=$_POST['payment_id'] ?? null;
                if($payment_id)
                {
                    $conn=(new PaymentDeleteModel())->paymentDelete($payment_id);
                    if($conn===true)
                    {
                        $_SESSION['success']="Deleted Successfully! ";
                    }else{
                        $_SESSION['error']= $conn;
                    }
                }else{
                    return "Need ID";
                }

                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }

            $users=$this->user_id();
            $banks=$this->bank_id();
            $methods=$this->payment_method_id();
            $invoices=$this->invoice_id();


            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);

            $conn=(new PaymentsReadModel())->paymentRead();//
            require_once 'view/Add/CustomerViews/PaymentView.php';
        }
        public function user_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT user_id, username FROM Users");
                return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        public function bank_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT bank_id, bank_name FROM Banks");
                return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        public function payment_method_id ()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT payment_method_id, method_name FROM PaymentMethods");
                return $select->fetchAll(PDO::FETCH_ASSOC);          
        }

        public function invoice_id()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT invoice_id From Invoices");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>