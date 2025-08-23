<?php
    require_once 'core/database.php';
    class SalesDeleteModel
    {
        public function salesDelete($sales_id)
        {
            try
            {
                $conn=(new Database())->connect();

                $delete=$conn->prepare(
                    "DELETE FROM Sales  WHERE sales_id=?");
                
                $delete->execute([$sales_id]);

                return $delete->rowCount() > 0 ? true: "No Changes Made! ";
            }catch(PDOException $error)
            {
                return $error->getMessage();
            }
        }
    }
?>