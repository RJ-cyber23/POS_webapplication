<?php

use LDAP\Result;
require_once 'core/database.php';

class AddVariants
{
    public function Variants($data)
    {
        
        $variant_id = $data['variant_id'];
        $product_id = $data['product_id'];
        $size = $data['size'];
        $weight = $data['weight'];
        $color = $data['color'];
        $unit_id = $data['unit_id'];
        $base_price = $data['base_price'];
        $cost_price = $data['cost_price'];
        $current_stock_quantity = $data['current_stock_quantity'];

        $connect = new Database();
        $result=$connect->connect();

        if ($result) {
            try {
                $insert = $result->prepare(
                    "INSERT INTO ProductVariants (
                        variant_id, product_id, size, weight, color, unit_id, base_price, cost_price, current_stock_quantity
                    ) VALUES (
                        :variant_id, :product_id, :size, :weight, :color, :unit_id, :base_price, :cost_price, :current_stock_quantity
                    )"
                );

                $insert->bindParam(':variant_id', $variant_id);
                $insert->bindParam(':product_id', $product_id);
                $insert->bindParam(':size', $size);
                $insert->bindParam(':weight', $weight);
                $insert->bindParam(':color', $color);
                $insert->bindParam(':unit_id', $unit_id);
                $insert->bindParam(':base_price', $base_price);
                $insert->bindParam(':cost_price', $cost_price);
                $insert->bindParam(':current_stock_quantity', $current_stock_quantity);

                $insert->execute();
                return true;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            echo "error 101"; // Connection failed
        }
    }
}
?>
