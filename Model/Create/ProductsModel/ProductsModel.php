<?php
require_once 'core/database.php';

class AddProducts
{
    private $ProductsTableColumns=['product_id', 
    'product_name',
    'product_code',
    'description',
    'category_id', 
    'brand_id',
    'supplier_id'];
    public function addProduct($data)
    {
        
        $conn=(new Database())->connect();
        if(!$conn)
        {
            return "Database Connection Error!";
        }

        try
        {
            $DataInsert=array_intersect_key($data, array_flip($this->ProductsTableColumns));
            if(!$DataInsert)
            {
                return "Invalid Input";
            }

            $columns=implode(', ', array_keys($DataInsert));
            $placeholder=":". implode(", :", array_keys($DataInsert));

            $insert=$conn->prepare("INSERT INTO Products ($columns) VALUES ($placeholder)");
            $insert->execute($DataInsert);
            return true;
        }catch(PDOException $error){
            return $error->getMessage();
        }

        
    }
}

?>