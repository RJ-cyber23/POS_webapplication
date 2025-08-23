<?php
    require_once 'Model/read/ProductsModelRead/PurchaseOrdersReadModel.php';
    require_once 'Model/delete/ProductsDeleteModel/PurchaseOrdersDeleteModel.php';
    require_once 'Model/update/ProductsEditModel/PurchaseOrderEditModel.php';
    require_once 'Model/Create/ProductsModel/PurchaseOrderModel.php';
    class PurchaseAdd
    {
        public function purchase()
        {
            session_start();
            

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_purchase']))
            {
                $connect=(new PurchaseOrderModel())->purchase_order_model($_POST);
                if($connect===true)
                {
                    $_SESSION['success']="Purchase Added Successfully!";
                }
                else
                {
                    $_SESSION['error']=$connect;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['edit_purchaseOrders']))
            {
               $conn=(new PurchaseOrderEditModel())->purchaseOrderEdit($_POST);
               if($conn)
               {
                    $_SESSION['success']="Edited Successfully! ";
               }else{
                $_SESSION['error'];
               }
               header("Location: ". $_SERVER['REQUEST_URI']);
               exit;
            }
            elseif(isset($_POST['delete_purchaseOrders']))
            {
                $Purchase_Orders_id=$_POST['Purchase_Orders_id'] ?? null;
                if($Purchase_Orders_id)
                {
                    $conn=(new PurchaseOrdersDeleteModel())->purchaseOrdersDelete($Purchase_Orders_id);
                    if($conn===true)
                    {
                        $_SESSION['success']= "Successfully Deleted! Purchase Orders ID #$Purchase_Orders_id";
                    }else{
                        $_SESSION['error']= $conn;
                    }
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }

            $poi=$this->purchase_orders_items();
            $status=$this->getAll_status_id();
            $suppliers=$this->getAll_supplier_id();
            $products=$this->getAll_product_id();

            $success=$_SESSION['success'] ?? null;
            $error=$_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']);
            require_once 'view/Add/ProductsViews/purchaseOrder.php';
        }

        public function purchase_orders_items()
        {
            $conn=(new Database())->connect();
            $select=$conn->query("SELECT Purchase_Orders_Items_id FROM PurchaseOrders ");
            return $select->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getAll_status_id()
        {
            $select=(new Database())->connect();
            if($select)
            {
                $result=$select->query("SELECT status_id, status_name FROM PurhcaseOrderStatus");
                return $result->fetchAll(PDO::FETCH_ASSOC);
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

        public function getAll_supplier_id()
        {
            $conn=(new Database())->connect();
            if($conn)
            {
                $select=$conn->query("SELECT supplier_id, supplier_name FROM Suppliers");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return[];
        }
    }

?>