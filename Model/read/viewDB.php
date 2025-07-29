<?php
require_once 'core/database.php';
    class ViewDB
    {
        public static function EODS()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM End_Of_Day_Summary ");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function Inventories_Status()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM Inventory_Status");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public static function Invoices_Total_Sales()
        {
            try
            {
                $conn=(new Database())->connect();
                $result=$conn->query("SELECT * FROM Invoices_Total_Sales ");
                return $result->fetchAll(PDO::FETCH_ASSOC);
            }
            catch(PDOException $e)
            {
                error_log("Database Connection Error: ". $e->getMessage());
            }
        }

        public static function Payment_Breakdown()
        {
            $conn=(new Database())->connect();
            $result=$conn->query("SELECT * FROM `Payment_Breakdown` ");
            return $result->fetchAll(PDO::FETCH_ASSOC);
        }

        public function Payment()
        {
            $report=self::Payment_Breakdown();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['invoice_id']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['customer_name']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['method_name']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['amount']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['payment_date']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['username']?? '0'). "</td>";
                    echo "</tr>";
                }
            }

        }

        public function Invoice()
        {
            $report=self::Invoices_Total_Sales();
            if(!empty($report))
            {
                foreach($report as $row)
                {
                    echo "<tr>";
                    echo "<td>". htmlspecialchars($row['invoice_id' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['invoice_date']). "</td>";
                    echo "<td>". htmlspecialchars($row['customer_name' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['username']). "</td>";
                    echo "<td>". htmlspecialchars($row['Calculated_Total_Amount']). "</td>";
                    echo "<td>". htmlspecialchars($row['Total_Paid' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['Balance' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['Payment_Status' ]). "</td>";
                    echo "</tr>";
                }
            }
            else
            {
                echo "error";
            }
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
                    echo "<td>" . htmlspecialchars($row['Total_Sales']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Total_Transactions']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Total_Items_Sold']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Total_Cash']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['Total_Profit']) . "</td>";
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
                    echo "<td>" . htmlspecialchars($row['current_stock_quantity']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['quantity_stock_out']?? 'null'). "</td>";
                    echo "<td>" . htmlspecialchars($row['restock_level'] ?? 'null'). "</td>";
                    echo "</tr>";
                }
            }
        }
    }

?>