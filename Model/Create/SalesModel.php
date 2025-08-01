<?php
    require_once 'core/database.php';
    class SalesModel
    {
        public function salesModel($data)
        {
            $sales_id=$data['sales_id'];
            $invoice_id = $data['invoice_id'];
            $product_id = $data['product_id'];
            $variant_id = $data['variant_id'];
            $quantity = $data['quantity'];

            $conn=(new Database())->connect();

            if($conn)
            {
                try
                {
                    $insert=$conn->prepare(
                        " INSERT INTO Sales( sales_id, 	invoice_id, 	product_id, 	variant_id, 	quantity) 
                        VALUES (:sales_id, 	:invoice_id, 	:product_id, 	:variant_id, 	:quantity)");
                    $insert->bindParam('sales_id', $sales_id);
                    $insert->bindParam('invoice_id', $invoice_id);
                    $insert->bindParam('product_id', $product_id);
                    $insert->bindParam('variant_id', $variant_id);
                    $insert->bindParam('quantity', $quantity);

                    $insert->execute();
                    return true;
                }catch(PDOException $error){
                    return $error->getMessage();
                }
            }else{
                echo "Database Connection Error";
            }

        }
    }
?>