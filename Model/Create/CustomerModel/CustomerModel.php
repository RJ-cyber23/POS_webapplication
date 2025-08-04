<?php
    require_once 'core/database.php';
    class CustomerModel
    {
        public function customerModel($data)
        {   
            $customer_id=$data['customer_id'];
            $customer_name=$data['customer_name'];
            $customer_code=$data['customer_code'];
            $contact=$data['contact'];
            $address=$data['address'];

            $conn=(new Database())->connect();

            if($conn)
            {
                try
                {
                    $insert=$conn->prepare(
                        "INSERT INTO Customers(customer_id, customer_name, customer_code, contact, address) 
                        VALUES (:customer_id, :customer_name, :customer_code, :contact, :address)");
                    $insert->bindParam('customer_id', $customer_id);
                    $insert->bindParam('customer_name', $customer_name);
                    $insert->bindParam('customer_code', $customer_code);
                    $insert->bindParam('contact', $contact);
                    $insert->bindParam('address', $address);

                    $insert->execute();
                    return true;

                }catch(PDOException $error)
                {
                    return $error->getMessage();
                }
            }else{
                echo "Database Connection Error! ";
            }
        }
    }
?>