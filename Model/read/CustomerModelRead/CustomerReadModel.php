<?php
    require_once 'core/database.php';

    class CustomerReadModel
    {
        public function getAll()
        {
            $conn=(new Database())->connect();
            $read=$conn->query(
            "SELECT customer_id,  customer_name, 	customer_code, 	contact, 	address FROM `Customers` ");
            return $read->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>