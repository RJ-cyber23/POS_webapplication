<?php
    require_once 'core/database.php';
    class InvoicesDeleteModel
    {
        public function invoiceDelete($invoice_id)
        {
            try
            {
                $conn=(new Database())->connect();

                $delete=$conn->prepare(
                    "DELETE FROM Invoices WHERE invoice_id = ?");
                $delete->execute([$invoice_id]);

                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>