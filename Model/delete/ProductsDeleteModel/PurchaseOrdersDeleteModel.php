<?php
    require_once 'core/database.php';
    class PurchaseOrdersDeleteModel
    {
        public function purchaseOrdersDelete($Purchase_Orders_id)
        {
            try
            {
                $conn=(new Database())->connect();
                $delete=$conn->prepare(
                    "DELETE FROM   PurchaseOrders WHERE  Purchase_Orders_id = ?");
                $delete->execute([$Purchase_Orders_id]);
                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>