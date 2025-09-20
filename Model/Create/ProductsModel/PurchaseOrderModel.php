<?php
    require_once 'core/database.php';
    class PurchaseOrderModel
    {
        private $PurchaseOrderTableColumn=['Purchase_Orders_id', 
        'Purchase_Orders_Items_id',
        'supplier_id',
        'order_date',
        'status_id'];

        public function purchase_order_model($data)
        {

           $conn=(new Database())->connect();
           if(!$conn)
           {
                return "Database Connection Error! ";
           }

           try
           {
                $DataInsert=array_intersect_key($data, 
                array_flip($this->PurchaseOrderTableColumn));

                if(!$DataInsert)
                {
                    return "Invalid Data Insert";
                }

                $columns=implode(', ', array_keys($DataInsert));
                $placeholder=":". implode(", :", array_keys($DataInsert));

                $insert=$conn->prepare(
                    "INSERT INTO PurchaseOrders ($columns) VALUES ($placeholder)");
                $insert->execute($DataInsert);
                return true;
           }catch(PDOException $error){
                return $error->getMessage();
           }

        }
    }
?>