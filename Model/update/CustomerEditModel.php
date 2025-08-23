<?php
require_once 'core/database.php';
class CustomerEditModel
{
    public function customerEdit($data)
    {
        $customer_id = $data['customer_id'] ?? null;
        if (!$customer_id) {
            return "Customer ID is required for editing.";
        }

        // Columns that can be updated
        $columns = ['customer_name', 'customer_code', 'contact', 'address'];
        $updates = [];
        $params = [':customer_id' => $customer_id];

        foreach ($columns as $column) 
        {
            if (!empty($data[$column])) {
                $updates[] = "$column = :$column";
                $params[":$column"] = $data[$column];
            }
        }

        // If no columns to update, stop
        if (empty($updates)) {
            return "No fields to update.";
        }

        $sql = "UPDATE Customers SET " . implode(', ', $updates) . " WHERE customer_id = :customer_id";

        try {
            $conn = (new Database())->connect();
            $stmt = $conn->prepare($sql);
            $stmt->execute($params);

            return $stmt->rowCount() > 0 ? true : "No changes made.";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }
}

?>
