<?php
    require_once 'Model/delete/ProductsDeleteModel/PurchaseOrdersItemsDeleteModel.php';
    require_once 'Model/update/ProductsEditModel/PurchaseOrdersItemsEditModel.php';
    require_once 'Model/read/ProductsModelRead/PurchaseOrdersItemsReadModel.php';
    require_once 'Model/Create/ProductsModel/PurchaseOrdersItemsCreateModel.php';
    class PurchaseOrdersItemsAddController
    {
        public function purchase_orders_items()
        {
             session_start();
        

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_purchaseorderitems']))
            {
                $conn=(new PurchaseOrdersItemsCreateModel())->purchase_order_items_model($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Purchase Orders Items Added Successfully!";
                }
                else
                {
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['edit_purchaseOrdersItems']))
            {
                $conn=(new PurchaseOrdersItemsEditModel())->purchaseOrdersItemsEdit($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Edited Successfully! ";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_purchaseOrdersItems']))
            {
                $Purchase_Orders_Items_id=$_POST['Purchase_Orders_Items_id'] ?? null;
                if($Purchase_Orders_Items_id)
                {
                    $conn=(new PurchaseOrdersItemsDeleteModel())->purchaseOrdersItemsEdit($Purchase_Orders_Items_id);
                    if($conn===true)
                    {
                        $_SESSION['success']="Deleted Successfully! ID #$Purchase_Orders_Items_id";
                    }else{
                        $_SESSION['error']= $conn;
                    }
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            $suppliers=$this->getAll_Suppliers();
            $products=$this->getAll_product_id();

            $success = $_SESSION['success'] ?? null;
            $error = $_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']); 
            $conn=(new PurchaseOrdersItemsReadModel());
            require_once 'view/Add/ProductsViews/PurchaseOrdersItems.php';

        }

        public function getAll_Suppliers()
        {
            $result=(new Database())->connect();
            if($result)
            {
                $stmt=$result->query("SELECT supplier_id, supplier_name FROM Suppliers ");
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return [];
        }
        
        public function getAll_product_id()
        {
            $conn=(new Database())->connect();
            if($conn)
            {
                $select=$conn->query("SELECT product_id, product_name FROM Products");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return[];
        }

    }

?>