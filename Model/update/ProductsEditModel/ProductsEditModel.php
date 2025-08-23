<?php
    require_once 'core/database.php';
    class ProductsEditModel
    {
        public function productsEdit($data)
        {
            $product_id=$data['product_id'] ?? null;
            if(!$product_id)
            {
                return "Invalid ID! ";
            }

            $columns=['product_id',
             	'product_name',
                'product_code',
                'description',
                'category_id',
                'brand_id',
                'supplier_id'];
            $updates=[];
            $params=[':product_id'=>$product_id];

            foreach($columns as $column)
            {
                if(!empty($data[$column]))
                {
                    $updates[]="$column = :$column";
                    $params[":$column"]=$data[$column];
                }
            }

            if(empty($updates))
            {
                return "No Changes Made! ";
            }

            $sql="UPDATE  Products SET ". implode(', ', $updates). " WHERE product_id = :product_id ";

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