<?php
require_once 'core/database.php';
    class InvoicesModel
    {
        public function invoiceModel($data)
        {
            $invoice_id=$data['invoice_id'];
            $customer_id=$data['customer_id'];
            $invoice_date=$data['invoice_date'];
            $user_id=$data['user_id'];

            $conn=(new Database())->connect();

            if($conn)
            {
                try
                {
                    $insert=$conn->prepare("INSERT INTO Invoices(invoice_id, 	customer_id, 	invoice_date, 	user_id) 
                        VALUES (:invoice_id, 	:customer_id, 	:invoice_date, 	:user_id)");
                    $insert->bindParam('invoice_id', $invoice_id);
                    $insert->bindParam('customer_id', $customer_id);
                    $insert->bindParam('invoice_date', $invoice_date);
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