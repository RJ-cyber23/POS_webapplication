<?php
    require_once 'core/database.php';
    class PurchaseOrderModel
    {
        public function purchase_order_model($data)
        {

            $Purchase_Orders_id=$data['Purchase_Orders_id'];
            $Purchase_Orders_Items_id=$data['Purchase_Orders_Items_id'];
            $supplier_id=$data['supplier_id'];
            $order_date=$data['order_date'];
            $status_id=$data['status_id'];

            $conn=new Database();
            $result=$conn->connect();

            if($result)
            {
                try
                {
                    $insert=$result->prepare(
                        "INSERT INTO PurchaseOrders	( Purchase_Orders_id,	Purchase_Orders_Items_id, 	supplier_id, 	order_date, 	status_id ) 
                        VALUES (:Purchase_Orders_id,	:Purchase_Orders_Items_id, 	:supplier_id, 	:order_date, 	:status_id)");
                        
                    $insert->bindParam('Purchase_Orders_id', $Purchase_Orders_id);
                    $insert->bindParam('Purchase_Orders_Items_id', $Purchase_Orders_Items_id);
                    $insert->bindParam('supplier_id', $supplier_id);
                    $insert->bindParam('order_date', $order_date);
                    $insert->bindParam('status_id', $status_id);

                    $insert->execute();
                    return true;
                }
                catch(PDOException $error)
                {
                    return $error->getMessage();
                }
            }
            else
            {
                echo "Database Connection Error";
            }

        }
    }
?>