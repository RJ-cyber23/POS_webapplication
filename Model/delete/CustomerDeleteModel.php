<?php
    require_once 'core/database.php';
    class CustomerDeleteModel
    {
        public function customerDelete($customer_id)
        {
            $conn=(new Database())->connect();

            if($conn)
            {
                try
                {
                    $delete=$conn->prepare(
                        "DELETE FROM Customers WHERE customer_id=?");
                    $delete->execute([$customer_id]);
                    return $delete->rowCount() > 0 ? true: "Invalid ID";
                }catch(PDOException $error){

                    return $error->getMessage();
                }
            }else{
                echo "Database Connection Error";
            }
            
        }
    }
?>
