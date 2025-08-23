<?php
    require_once 'core/database.php';
    class ReceiveProductsReadModel
    {
        public function receiveProductsRead()
        {
            try
            {
                $conn=(new Database())->connect();
                $read=$conn->query(
                    "SELECT 
                    rp.receive_product_id, 	
                    rp.product_id,
                    p.product_name,
                    rp.Purchase_Orders_id,
                    rp.received_quantity,
                    rp.cost_price,
                    rp.supplier_id,
                    s.supplier_name,
                    rp.received_date,
                    rp.user_id,
                    u.username
                    FROM ReceiveProducts rp
                    LEFT JOIN Products p on rp.product_id = p.product_id
                    LEFT JOIN Suppliers s on rp.supplier_id = s.supplier_id
                    LEFT JOIN Users u on rp.user_id = u.user_id
                    ");
                return $read->fetchAll(PDO::FETCH_ASSOC);

            }catch(PDOException $error){
                return $error->getMessage();
            }   
        }
    }
?>