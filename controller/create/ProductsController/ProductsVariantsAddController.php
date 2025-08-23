<?php  
    require_once 'Model/delete/ProductsDeleteModel/ProductsVariantsDeleteModel.php';
    require_once 'Model/update/ProductsEditModel/ProductsVariantsEditModel.php';
    require_once 'Model/read/ProductsModelRead/ProductsVariantsReadModel.php';
    require_once 'Model/Create/ProductsModel/ProductVariats.php';
    class ProductsVariantsAddController
    {
        public function variants()
        {
           session_start();

            if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['add_variants']))
            {
                $variants=(new AddVariants())->Variants($_POST);
                if($variants===true)
                {
                    $_SESSION['success']="Products Variants added successfully";
                   
                }
                else {
                $_SESSION['error'] = $variants;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['edit_variants']))
            {
                $conn=(new ProductsVariantsEditModel())->productsVariantsEdit($_POST);
                if($conn===true)
                {
                    $_SESSION['success']="Edited Products Variants Successfully! ";
                }else{
                    $_SESSION['error']=$conn;
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }
            elseif(isset($_POST['delete_variants']))
            {
                $variant_id=$_POST['variant_id'] ?? null;
                if($variant_id)
                {
                    $conn=(new ProductsVariantsDeleteModel())->productsVariantsDelete($variant_id);
                    if($conn===true)
                    {
                        $_SESSION['success']= "Deleted Successfully! ";
                    }else{
                        $_SESSION['error']= $conn;
                    }
                }
                header("Location: ". $_SERVER['REQUEST_URI']);
                exit;
            }

            $units=$this->getAll_Unit_ID();
            $products = $this->getAll_Product_ID();

            $success = $_SESSION['success'] ?? null;
            $error = $_SESSION['error'] ?? null;
            unset($_SESSION['success'], $_SESSION['error']); 
            $conn=new ProductsVariantsReadModel();
            require 'view/Add/ProductsViews/ProductVariants.php';

        }

        public function getAll_Product_ID()
        {
            $connect=(new Database())->connect();

            if($connect)
            {
                $select=$connect->query("SELECT product_id, product_name FROM Products");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return[];
        }

        public function getAll_Unit_ID()
        {
            $connect=(new Database())->connect();
            if($connect)
            {
                $select=$connect->query("SELECT unit_id, unit_name FROM Units");
                return $select->fetchAll(PDO::FETCH_ASSOC);
            }
            return [];
        }
    }
?>