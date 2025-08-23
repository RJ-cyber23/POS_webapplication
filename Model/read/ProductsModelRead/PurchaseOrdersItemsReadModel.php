<?php
  require_once 'core/database.php';
  class PurchaseOrdersItemsReadModel
  {
    public function purchaseOrdersItemsRead()
    {
      try
      {
        $conn=(new Database())->connect();
        $read=$conn->query(
          "SELECT 
          
          poi.Purchase_Orders_Items_id,
          poi.product_id, 	
          p.product_name,
          poi.supplier_id,
          s.supplier_name,
          poi.ordered_quantity,
          poi.purchase_cost_price 
          FROM PurchaseOrderItems poi
          LEFT JOIN Products p on poi.product_id = p.product_id
          LEFT JOIN  Suppliers s on poi.supplier_id = s.supplier_id
          ");

        return $read->fetchAll(PDO::FETCH_ASSOC);
      }catch(PDOException $error){
        return $error->getMessage();
      }
    }
  }
?>