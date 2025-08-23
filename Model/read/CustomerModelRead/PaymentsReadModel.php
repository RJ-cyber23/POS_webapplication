<?php
    require_once 'core/database.php';
    class PaymentsReadModel
    {
        public function paymentRead()
        {
            $connect=(new Database())->connect();
            $read=$connect->query(
                "SELECT 
                    payment_id,
                 	invoice_id, 	
                    payment_method_id, 	
                    amount,
                    bank_id, 	
                    payment_date, 	
                    user_id
                    FROM Payments");
            return $read->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>