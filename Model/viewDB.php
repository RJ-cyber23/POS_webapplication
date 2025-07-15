<?php
require_once 'core/database.php';
    class ViewDB
    {
        public static function EODS()
        {
            $conn=Database::connect();
            $result=$conn->query("SELECT * FROM End_Of_Day_Summary ");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public static function Inventories_Status()
        {
            $conn=Database::connect();
            $result=$conn->query("SELECT * FROM Inventory_Status");
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public  function Summary()
        {
            $report=self::EODS();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['invoice_date']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['total_sales']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['total_transaction']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['total_items_sold']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['total_cash']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['total_profit']) . "</td>";
                    echo "</tr>";
                }
            }
        }

        public function inventories()
        {
            $inventories=self::Inventories_Status();
            if(!empty($inventories))
            {   
                foreach($inventories as $row)
                {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['product_id']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['product_name']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['size']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['color']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['quantity_stock_in']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['sales_stock_out'] ?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['quantity_on_hand'] ?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['last_restock_date'] ?? 'null'). "</td>";
                    echo "</tr>";
                }
            }
        }
    }

?>