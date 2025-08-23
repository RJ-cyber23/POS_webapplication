<?php
    require_once 'core/database.php';
    class PurchaseOrdersItemsDeleteModel
    {
        public function purchaseOrdersItemsEdit($Purchase_Orders_Items_id)
        {
            try
            {
                $conn=(new Database())->connect();
                $delete=$conn->prepare(
                    "DELETE FROM PurchaseOrderItems WHERE Purchase_Orders_Items_id=? ");
                $delete->execute([$Purchase_Orders_Items_id]);

                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>