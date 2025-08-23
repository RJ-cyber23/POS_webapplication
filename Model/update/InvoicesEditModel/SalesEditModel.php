<?php
    require_once 'core/database.php';
    class SalesEditModel
    {
        public function salesEdit($data)
        {
            $sales_id=$data['sales_id'] ?? null;
            if(!$sales_id)
            {
                echo "Invalid ID Need Valid ID!";
            }

            $columns=[  'sales_id',
             	        'invoice_id',
                 	    'product_id',
                    	'variant_id',
                        'quantity'];
            $updates=[];
            $params=[':sales_id' => $sales_id];

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

            $sql="UPDATE Sales SET ". implode( ', ', $updates). "WHERE sales_id = :sales_id";

            try
            {
                $conn=(new Database())->connect();
                $edit=$conn->prepare($sql);

                $edit->execute($params);
                return $edit->rowCount() > 0 ? true: "No Changes Made";
            }catch(PDOException $error)
            {
                return $error->getMessage();
            }
        }
    }
?>