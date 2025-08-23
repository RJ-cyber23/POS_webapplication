<?php

use Dom\CDATASection;
require_once 'core/database.php';
class ProductsVariantsEditModel
{
    public function productsVariantsEdit($data)
    {
        $variant_id=$data['variant_id'] ?? null;

        if(!$variant_id)
        {
            return "Invalid ID! ";
        }

        $columns=['product_id',
        'size', 	
        'weight',
        'color',
        'unit_id',
        'base_price',
        'cost_price',
        'current_stock_quantity'];
        $updates=[];
        $params=[':variant_id' => $variant_id];

        foreach($columns as $column)
        {
            if(!empty($data[$column]))
            {
                $updates[]= "$column = :$column";
                $params[":$column"]= $data[$column];
            }
        }

        if(empty($updates))
        {
            return "No Changes Made! ";
        }

        $sql= "UPDATE ProductVariants SET ". implode(', ', $updates). " WHERE variant_id = :variant_id";

        try
        {
            $conn=(new Database())->connect();
            $edit=$conn->prepare($sql);

            $edit->execute($params);
            return $edit->rowCount() > 0 ? true: "No Changes Made! ";
        }catch(PDOException $error){
            return $error->getMessage();
        }

    }
}
?>