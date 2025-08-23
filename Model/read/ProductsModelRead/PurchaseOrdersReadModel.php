<?php
    require_once 'core/database.php';
    class PurchaseOrdersReadModel
    {
        public function purchaseOrdersRead()
        {
            try
            {
                $conn=(new Database())->connect();
                $read=$conn->query(
                    "SELECT 
                        po.Purchase_Orders_id,
                     	po.Purchase_Orders_Items_id,
                        po.supplier_id,
                        s.supplier_name,
                        po.order_date,
                        pos.status_id,
                        pos.status_name 
                        FROM PurchaseOrders po
                        LEFT JOIN  PurhcaseOrderStatus pos on po.status_id=pos.status_id
                        LEFT JOIN  Suppliers s on po.supplier_id = s.supplier_id
                        ");
                return $read->fetchAll(PDO::FETCH_ASSOC);
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>