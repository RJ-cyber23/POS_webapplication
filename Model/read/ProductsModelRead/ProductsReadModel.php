<?php
    require_once 'core/database.php';
    class ProductsReadModel
    {
        public function productsRead()
        {
            $conn=(new Database())->connect();
            $select=$conn->query(
                "SELECT product_id,
                 	product_name,
                    product_code,
                    description,
                    category_id,
                    brand_id,
                    supplier_id FROM Products");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>