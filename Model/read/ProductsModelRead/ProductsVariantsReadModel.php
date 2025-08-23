<?php
    require_once 'core/database.php';
    class ProductsVariantsReadModel
    {
        public function productsVariantsRead()
        {
            $conn=(new Database())->connect();
            $read=$conn->query(
                "SELECT variant_id,
                 	product_id,
                    size,
                    weight,
                    color,
                    unit_id,
                    base_price,
                    cost_price,
                    current_stock_quantity FROM ProductVariants");
            return $read->fetchAll(PDO::FETCH_ASSOC);

        }
    }
?>