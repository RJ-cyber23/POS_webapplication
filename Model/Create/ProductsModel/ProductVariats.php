<?php

use Dom\Implementation;
use LDAP\Result;
require_once 'core/database.php';

class AddVariants
{
    private $ProductsVariantsTableColumns=['variant_id', 	'product_id', 	'size', 	'weight', 	'color', 	'unit_id', 	'base_price', 	'cost_price', 	'current_stock_quantity'];
    public function Variants($data)
    {
        
      $conn=(new Database())->connect();
      if(!$conn)
      {
        return "Database Error Connection! ";
      }

      try
      {
        $DataInsert=array_intersect_key($data, array_flip($this->ProductsVariantsTableColumns));

        if(!$DataInsert)
        {
            return "Invalid DataInsert";
        }

        $columns=implode(',', array_keys($DataInsert));
        $placeholder=":". implode(", :", array_keys($DataInsert));

        $insert=$conn->prepare(
            "INSERT INTO ProductVariants ($columns) VALUES ($placeholder)");
        $insert->execute($DataInsert);
        return true;
      }catch(PDOException $error){
        return $error->getMessage();
      }

    }
}
?>
