<?php

use Dom\CDATASection;
    require_once 'core/database.php';
    class ProductsVariantsDeleteModel
    {
        public function productsVariantsDelete($variant_id)
        {
            try
            {
                $conn=(new Database())->connect();
                $delete=$conn->prepare(
                    "DELETE FROM ProductVariants WHERE variant_id = ?");
                $delete->execute([$variant_id]);

                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error){
                return $error->getMessage();
            }
        }
    }
?>