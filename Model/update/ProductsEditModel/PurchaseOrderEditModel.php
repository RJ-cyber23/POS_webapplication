<?php
    require_once 'core/database.php';
    class PurchaseOrderEditModel
    {
        public function purchaseOrderEdit($data)
        {
            $Purchase_Orders_id=$data['Purchase_Orders_id'] ?? null;
            if(!$Purchase_Orders_id)
            {
                return "Invalid ID! ";
            }

            $columns=['Purchase_Orders_Items_id',
             	'supplier_id',
                'order_date',
                'status_id'];
            $updates=[];
            $params=[':Purchase_Orders_id'=> $Purchase_Orders_id];

            foreach($columns as $column)
            {
                if(!empty($data[$column]))
                {
                    $updates[] = "$column = :$column";
                    $params[":$column"]=$data[$column];
                }
            }

            if(empty($updates))
            {
                return "No Changes! ";
            }

            $sql= "UPDATE PurchaseOrders SET ". implode(', ', $updates). " WHERE  Purchase_Orders_id = :Purchase_Orders_id";

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