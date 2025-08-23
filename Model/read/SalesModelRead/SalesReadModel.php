<?php
    require_once 'core/database.php';
    class SalesReadModel
    {
        public function salesRead()
        {
            $conn=(new Database())->connect();
            $read=$conn->query(
                "SELECT sales_id,
                 	invoice_id,
                    product_id,
                    variant_id,
                    quantity
                    FROM Sales");
            return $read->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>