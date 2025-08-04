<?php
    require_once 'core/database.php';
    class PaymentModel
    {
        public function paymentModel($data)
        {   
            $conn=(new Database())->connect();

            $payment_id =$data['payment_id'];	
            $invoice_id 	=$data['invoice_id'];
            $payment_method_id =	$data['payment_method_id'];
            $amount 	=$data['amount'];
            $bank_id 	=$data['bank_id'];
            $payment_date= 	$data['payment_date'];
            $user_id 	=$data['user_id'];

            if($conn)
            {
                try
                {
                    $insert=$conn->prepare(
                        "INSERT INTO Payments(payment_id, 	invoice_id, 	payment_method_id, 	amount, 	bank_id, 	payment_date, 	user_id) 
                        VALUES (:payment_id, 	:invoice_id, 	:payment_method_id, 	:amount, 	:bank_id, 	:payment_date, 	:user_id )");
                    $insert->bindParam('payment_id', $payment_id);
                    $insert->bindParam('invoice_id', $invoice_id);
                    $insert->bindParam('payment_method_id', $payment_method_id);
                    $insert->bindParam('amount', $amount);
                    $insert->bindParam('bank_id', $bank_id);
                    $insert->bindParam('payment_date', $payment_date);
                    $insert->bindParam('user_id', $user_id);

                    $insert->execute();
                    return true;
                }catch(PDOException $error){
                    return $error->getMessage();
                }
            }else{
                echo "Database Connection Error! ";
            }
        }
    }
?>