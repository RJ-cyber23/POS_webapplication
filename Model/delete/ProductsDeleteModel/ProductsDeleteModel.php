<?php
    require_once 'core/database.php';
    class ProductsDeleteModel
    {
        public function productsDelete($product_id)
        {
            try
            {
                $conn=(new Database())->connect();
                $delete=$conn->prepare(
                    "DELETE FROM Products WHERE product_id = ?");
                $delete->execute([$product_id]);

                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>