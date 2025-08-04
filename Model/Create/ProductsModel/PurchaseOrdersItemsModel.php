<?php
require_once 'core/database.php';
    class PurchaseOrdersItemsModel
    {
        public function purchase_order_items_model($data)
        {
            $Purchase_Orders_Items_id=$data['Purchase_Orders_Items_id'];
            $product_id=$data['product_id'];
            $supplier_id=$data['supplier_id'];
            $ordered_quantity=$data['ordered_quantity'];
            $purchase_cost_price=$data['purchase_cost_price'];

            $conn=new Database();
            $result=$conn->connect();

            if($result)
            {
                try
                {
                    $insert=$result->prepare(
                        "INSERT INTO PurchaseOrderItems ( Purchase_Orders_Items_id, 	product_id, 	supplier_id, 	ordered_quantity, 	purchase_cost_price)
                         VALUES (:Purchase_Orders_Items_id, 	:product_id, 	:supplier_id, 	:ordered_quantity, 	:purchase_cost_price)");

                    $insert->bindParam('Purchase_Orders_Items_id', $Purchase_Orders_Items_id);
                    $insert->bindParam('product_id', $product_id);
                    $insert->bindParam('supplier_id', $supplier_id);
                    $insert->bindParam('ordered_quantity', $ordered_quantity);
                    $insert->bindParam('purchase_cost_price', $purchase_cost_price);

                    $insert->execute();
                    return true;
                }
                catch (PDOException $e) 
                {
                    return $e->getMessage();
                }
            }
            else 
            {
                echo "Database Connection Error";
            }

        }
    }

?>