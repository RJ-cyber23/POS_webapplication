<?php
    require_once 'core/database.php';
    class ReceiveProductsModel
    {
        private $ReceiveProductsTableColumns;
        
        public function __construct()
        {
            $this->ReceiveProductsTableColumns=['receive_product_id',
            'product_id', 'Purchase_Orders_id', 'received_quantity', 
            'cost_price', 'supplier_id', 'received_date', 'user_id'];
        }
        public function receiveProductsModel($data)
        {
          $conn=(new Database())->connect();
          if($conn)
          {
            try
            {
                $DataInsert=array_intersect_key($data, array_flip($this->ReceiveProductsTableColumns));
                if(!$DataInsert)
                {
                    return "Invalid Data Insert! ";
                }

                $columns=implode(',', array_keys($DataInsert));
                $placeholder=":". implode(", :", array_keys($DataInsert));

                $insert=$conn->prepare("INSERT INTO ReceiveProducts ($columns) VALUES ($placeholder)");
                $insert->execute($DataInsert);
                return true;
            }catch(PDOException $error){
                return $error->getMessage();
            }
          }else{
            echo "Database Connection Error";
          }
        }
    }

?>