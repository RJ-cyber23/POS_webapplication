<?php
    require_once 'core/database.php';

class InvoicesEditModel
{
    public function invoiceEdit($data)
    {
        $invoice_id = $data['invoice_id'] ?? null;

        if (!$invoice_id) {
            return "Invalid ID";
        }

        $columns = ['customer_id', 'invoice_date', 'user_id'];
        $updates = [];
        $params = [':invoice_id' => $invoice_id];

        foreach ($columns as $row) {
            if (!empty($data[$row])) {
                $updates[] = "$row = :$row";
                $params[":$row"] = $data[$row]; // ✅ fix
            }
        }

        if (empty($updates)) {
            return "No Fields To Update!";
        }

        $sql = "UPDATE Invoices SET " . implode(', ', $updates) . " WHERE invoice_id = :invoice_id";

        try {
            $conn = (new Database())->connect();
            $edit = $conn->prepare($sql);
            $edit->execute($params);

            return $edit->rowCount() > 0 ? true : "No Changes Made!";
        } catch (PDOException $error) {
            return $error->getMessage();
        }
    }
}

?>