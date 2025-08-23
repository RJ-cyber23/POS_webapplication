<?php
    require_once 'core/database.php';
    class InvoicesReadModel
    {
        public function invoicesRead()
        {
            $conn=(new Database())->connect();
            $read=$conn->query(
                "SELECT invoice_id,
                 	        customer_id,
                     	    invoice_date,
                         	user_id 
                            FROM Invoices");
            return $read->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>