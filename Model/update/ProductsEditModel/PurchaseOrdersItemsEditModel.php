<?php
    require_once 'core/database.php';
    class PurchaseOrdersItemsEditModel
    {
        public function purchaseOrdersItemsEdit($data)
        {
            $Purchase_Orders_Items_id=$data['Purchase_Orders_Items_id'] ?? null;
            if(!$Purchase_Orders_Items_id)
            {
                return "Invalid ID! ";
            }

            $columns=['product_id',
            'supplier_id',
            'ordered_quantity',
            'purchase_cost_price'];
            $updates=[];
            $params=[':Purchase_Orders_Items_id'=>$Purchase_Orders_Items_id];

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
                return "No Updates Made! ";
            }

            $sql="UPDATE PurchaseOrderItems SET ". implode(', ', $updates). " WHERE Purchase_Orders_Items_id= :Purchase_Orders_Items_id";

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