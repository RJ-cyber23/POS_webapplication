<?php

use LDAP\Result;
require_once 'core/database.php';
    class View1DB
    {
        public static function Profit_For_Product()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM `Profit_For_Product` ");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public static function Purchase_Orders_Summary()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM `Purchase_Orders_Summary` ");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public static function Sales_Summary()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM `Sales_Summary` ");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }
        public function Sales()
        {
            $report=self::Sales_Summary();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>". htmlspecialchars($row['sales_id']). "</td>";
                    echo "<td>". htmlspecialchars($row['invoice_id']). "</td>";
                    echo "<td>". htmlspecialchars($row['invoice_date']). "</td>";
                    echo "<td>". htmlspecialchars($row['product_name']). "</td>";
                    echo "<td>". htmlspecialchars($row['quantity']). "</td>";
                    echo "<td>". htmlspecialchars($row['base_price']). "</td>";
                    echo "<td>". htmlspecialchars($row['Subtotal']). "</td>";
                    echo "<td>". htmlspecialchars($row['username']). "</td>";
                    echo "</tr>"; 
                }
            }
        }

        public function Purchase()
        {
            $report=self::Purchase_Orders_Summary();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>". htmlspecialchars($row['Purchase_Orders_Items_id']). "</td>";
                    echo "<td>". htmlspecialchars($row['supplier_name']). "</td>";
                    echo "<td>". htmlspecialchars($row['product_name']). "</td>";
                    echo "<td>". htmlspecialchars($row['ordered_quantity']). "</td>";
                    echo "<td>". htmlspecialchars($row['cost_price']). "</td>";
                    echo "<td>". htmlspecialchars($row['Subtotal']). "</td>";
                    echo "<td>". htmlspecialchars($row['order_date']). "</td>";
                    echo "<td>". htmlspecialchars($row['status']). "</td>";
                    echo "</tr>";
                }
            }
        }

        public function Profit()
        {
            $report=self::Profit_For_Product();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>". htmlspecialchars($row['product_id']). "</td>";
                    echo "<td>". htmlspecialchars($row['product_name']). "</td>";
                    echo "<td>". htmlspecialchars($row['cost_price']). "</td>";
                    echo "<td>". htmlspecialchars($row['base_price']). "</td>";
                    echo "<td>". htmlspecialchars($row['ordered_quantity']). "</td>";
                    echo "<td>". htmlspecialchars($row['sold_quantity']). "</td>";
                    echo "<td>". htmlspecialchars($row['total_cost']). "</td>";
                    echo "<td>". htmlspecialchars($row['expected_sales']). "</td>";
                    echo "<td>". htmlspecialchars($row['total_profit']). "</td>";
                    echo "</tr>";
                }
            }
        }
        

    }
?>
