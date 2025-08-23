;<?php
    require_once 'core/database.php';
    class PaymentEditModel
    {
        public function paymentEdit($data)
        {
            $payment_id = $data['payment_id'] ?? null;

            if (!$payment_id) {
                return "Payment ID is required for editing.";
            }

            $columns = ['invoice_id', 'payment_method_id', 'amount', 'bank_id', 'payment_date', 'user_id'];
            $updates = [];
            $params = ['payment_id' => $payment_id]; // NO colon

            foreach ($columns as $column) {
                if (!empty($data[$column])) {
                    $updates[] = "$column = :$column";
                    $params[$column] = $data[$column]; // NO colon
                }
            }

            if (empty($updates)) {
                return "No fields to update";
            }

            $sql = "UPDATE Payments SET " . implode(', ', $updates) . " WHERE payment_id = :payment_id";

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