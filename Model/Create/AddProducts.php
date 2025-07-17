<?php
require_once 'core/database.php';

class AddProducts
{
    public function addProduct($data)
    {
        $product_name = $data['product_name'];
        $product_code = $data['product_code'];
        $description = $data['description'];
        $category_id = $data['category_id'];
        $brand_id = $data['brand_id'];
        $supplier_id = $data['supplier_id'];

        $db = new Database();
        $conn = $db->connect();

        

        if ($conn) {
            try {
                $stmt = $conn->prepare("INSERT INTO Products (product_name, product_code, description, category_id, brand_id, supplier_id)
                                        VALUES (:product_name, :product_code, :description, :category_id, :brand_id, :supplier_id)");

                $stmt->bindParam(':product_name', $product_name);
                $stmt->bindParam(':product_code', $product_code);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':category_id', $category_id);
                $stmt->bindParam(':brand_id', $brand_id);
                $stmt->bindParam(':supplier_id', $supplier_id);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                return $e->getMessage();
            }
        } else {
            return "Database connection failed.";
        }
    }
}

?>