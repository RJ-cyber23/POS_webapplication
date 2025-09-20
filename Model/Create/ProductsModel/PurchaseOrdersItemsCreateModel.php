<?php
require_once 'core/database.php';
    class PurchaseOrdersItemsCreateModel
    {
        private $PurchaseOrdersItemsTableColumns;
        public function purchase_order_items_model($data)
        {
            $this->PurchaseOrdersItemsTableColumns=['Purchase_Orders_Items_id', 
            'product_id', 'supplier_id', 'ordered_quantity','purchase_cost_price'];

            $conn=(new Database())->connect();
            if(!$conn)
            {
                return "Connection Error!";
            }

            try
            {
                $DataInsert=array_intersect_key($data, 
                array_flip($this->PurchaseOrdersItemsTableColumns));

                if(!$DataInsert)
                {
                    return "Invalid Data Insert! ";
                }

                $columns=implode(', ', array_keys($DataInsert));
                $placeholder=":". implode(", :", array_keys($DataInsert));

                $insert=$conn->prepare(
                    "INSERT INTO PurchaseOrderItems ($columns) VALUES ($placeholder)");
                $insert->execute($DataInsert);
                return true;
            }catch(PDOException $error){
                return $error->getMessage();
            }

        }
    }

?>