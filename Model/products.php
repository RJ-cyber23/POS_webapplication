<?php
require_once 'core/database.php';

class products{
    public static function getAll()
    {
        $conn=Database::connect();
        $result=$conn->query("SELECT * FROM Products");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function data_products()
    {
        $products = self::getAll();

        if (!empty($products)) {
            foreach ($products as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['product_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['product_name']) . "</td>";
                echo "<td>" . htmlspecialchars($row['product_code']) . "</td>";
                echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                echo "<td>" . htmlspecialchars($row['category_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['brand_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['supplier_id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['create_at']) . "</td>";
                echo "<td>" . htmlspecialchars($row['update_at']) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9' class='text-center'>No products found.</td></tr>";
        }
    }

}
?>
    
