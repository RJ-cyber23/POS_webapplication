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
                    echo "<td>" . htmlspecialchars($row['payment_method_id']?? '0'). "</td>";
                    echo "<td>" . htmlspecialchars($row['amount_paid']?? '0'). "</td>";
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
                    echo "<td>". htmlspecialchars($row['sales_id']). "</td>";
                    echo "<td>". htmlspecialchars($row['invoice_id' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['invoice_date']). "</td>";
                    echo "<td>". htmlspecialchars($row['customer_name' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['username']). "</td>";
                    echo "<td>". htmlspecialchars($row['calculated_total_amount']). "</td>";
                    echo "<td>". htmlspecialchars($row['total_paid' ]). "</td>";
                    echo "<td>". htmlspecialchars($row['balance' ]). "</td>";
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