<?php
    require_once 'core/database.php';
    class ReceiveProductsModel
    {
        public function receiveProductsModel($data)
        {
            $receive_product_id=$data['receive_product_id']; 	
            $product_id=$data['product_id']; 	
            $Purchase_Orders_id=$data['Purchase_Orders_id']; 	
            $received_quantity=$data['received_quantity']; 	
            $cost_price=$data['cost_price'];
            $supplier_id=$data['supplier_id']; 	
            $received_date=$data['received_date'];
            $user_id=$data['user_id']; 	

            $conn=(new Database())->connect();

            if($conn)
            {
                try
                {
                    $insert=$conn->prepare(
                        "INSERT INTO ReceiveProducts( receive_product_id, 	product_id, 	Purchase_Orders_id, 	received_quantity, 	cost_price, 	supplier_id,
                         	received_date, 	user_id) VALUES( :receive_product_id, 	:product_id, 	:Purchase_Orders_id, 	:received_quantity, 	:cost_price, 	:supplier_id,
                            :received_date, 	:user_id) ");
                    $insert->bindParam('receive_product_id', $receive_product_id);
                    $insert->bindParam('product_id', $product_id);
                    $insert->bindParam('Purchase_Orders_id', $Purchase_Orders_id);
                    $insert->bindParam('received_quantity', $received_quantity);
                    $insert->bindParam('cost_price', $cost_price);
                    $insert->bindParam('supplier_id', $supplier_id);
                    $insert->bindParam('received_date', $received_date);
                    $insert->bindParam('user_id', $user_id);

                    $insert->execute();
                    return true;
                }catch(PDOException $error){
                    return $error->getMessage();
                }
            }else{
                echo "Database Connections Error! ";
            }
        }
    }

?>