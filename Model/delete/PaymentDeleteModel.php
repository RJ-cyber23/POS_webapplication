<?php
    require_once 'core/database.php';
    class PaymentDeleteModel
    {
        public function paymentDelete($payment_id)
        {
            try {
                $conn = (new Database())->connect();

                $delete = $conn->prepare("DELETE FROM Payments WHERE payment_id = ?");
                $delete->execute([$payment_id]);

                return $delete->rowCount() > 0 ? true : "No changes made.";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }

?>