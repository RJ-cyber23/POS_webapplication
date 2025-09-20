<?php
    require_once 'core/database.php';
    class ReceivedProductsEditModel
    {
        public function receiveProductEdit($data)
        {
           $receive_product_id=$data['receive_product_id'] ?? null;
           if(!$receive_product_id)
           {
             return "Invalid ID";
           }

           $columns=['receive_product_id',
            	'product_id',
                'Purchase_Orders_id',
                'received_quantity',
                'cost_price',
                'supplier_id',
                'received_date',
                'user_id'];
            $updates=[];
            $params=[':receive_product_id'=> $receive_product_id];

            foreach($columns as $column)
            {
              $updates[]="$column= :$column";
              $params[":$column"]=$data[$column];
            }

            if(empty($updates))
            {
             return "No Changes Made";
            }

            $sql="UPDATE ReceiveProducts SET ". implode(',', $updates). " WHERE receive_product_id=:receive_product_id";

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