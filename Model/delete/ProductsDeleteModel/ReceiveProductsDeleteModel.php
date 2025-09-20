<?php
    require_once 'core/database.php';
    class ReceiveProductsDeleteModel
    {
        public function receiveProductsDelete($receive_product_id)
        {
            try
            {
                $conn=(new Database())->connect();
                $delete=$conn->prepare("DELETE FROM ReceiveProducts WHERE receive_product_id = ?");
                $delete->execute([$receive_product_id]);
                
                return $delete->rowCount() > 0 ? true: "No Changes Made!";
            }catch(PDOException $error){
                return $error->getMessage(); 
            }
        }
    }
?>