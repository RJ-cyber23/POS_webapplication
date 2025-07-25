<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard-Home</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="Style/bootstrap.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php?page=home">Point Of Sale</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <!--for profile-->
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="index.php?page=home">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard Reports
                                </a>

                            <div class="sb-sidenav-menu-heading ">Add</div>
                            <a class="nav-link collapsed bg-success rounded-4" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAdd" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="bi bi-basket3-fill text-white "></i></div>
                                Basket
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                
                                <div class="collapse" id="collapseAdd" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=Add Product"><i class="bi bi-cart4"></i>Add Products</a>
                                    <a class="nav-link" href="index.php?page=Inventory Status">Inventory Status</a>
                                    <a class="nav-link" href="index.php?page=Invoices Total Sales">Invoice Total Sales</a>
                                    <a class="nav-link" href="index.php?page=Payment Breakdown">Payment Breakdown</a>
                                    <a class="nav-link" href="index.php?page=Profit for Products">Profit For Products</a>
                                    <a class="nav-link" href="index.php?page=Purchase_Orders_Summary">Purchase Order Summary</a>
                                    <a class="nav-link" href="index.php?page=Sales_Summary">Sales Summary</a>
                                </nav>
                                </div>



                            <div class="sb-sidenav-menu-heading">Reports</div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReport" aria-expanded="false" aria-controls="collapseLayouts">
                               <div class="sb-nav-link-icon"><i class="bi bi-graph-up-arrow text-white"></i></div>
                                Summary Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                
                                <div class="collapse" id="collapseReport" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?page=End_of_Day">End of Day Summary</a>
                                    <a class="nav-link" href="index.php?page=Inventory Status">Inventory Status</a>
                                    <a class="nav-link" href="index.php?page=Invoices Total Sales">Invoice Total Sales</a>
                                    <a class="nav-link" href="index.php?page=Payment Breakdown">Payment Breakdown</a>
                                    <a class="nav-link" href="index.php?page=Profit for Products">Profit For Products</a>
                                    <a class="nav-link" href="index.php?page=Purchase_Orders_Summary">Purchase Order Summary</a>
                                    <a class="nav-link" href="index.php?page=Sales_Summary">Sales Summary</a>
                                </nav>
                                </div>

                                
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="index.php?page=Chart">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
<!--Error message-->
                <?php if (isset($success)) : ?>
                <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                <?php endif; ?>

                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                <?php endif; ?>
<!--Error message end here-->

<!--hero section-->
                <div class="container-solid py-2 mb-4  rounded-5 ">
                        <div class="p-5 mb-4 lc-block">
                            <div class="lc-block">
                                <div editable="rich">
                                    <h2 class="fw-bolder display-3">Manage Your Products with Ease</h2>
                                </div>
                            </div>
                            <div class="lc-block col-md-8">
                                <div editable="rich">
                                    <p class="lead">Easily add, update, and track all your products in one place. Streamline your inventory process with our intuitive POS system interface.
                                    </p>
                                </div>
                            </div>
                            <div class="lc-block">
                                <a class="btn btn-primary" href="#formaction" role="button">Add new Product</a>
                            </div>
                        </div>
                    </div>
<!--her section-->


<!--form handling-->
            <div class="container-solid d-flex justify-content-center mt-4">
                <div style="max-width: 800px; width: 100%;">
<!--Request Method as POST-->
                    <form method="POST" id="formaction">
                    <div class="row mb-2">
                        
                        <div class="col">

                            <label for="product_name" class="form-label">Product ID</label>
                            <input type="text" class="form-control form-control-sm" name="product_name" id="product_name">
                            
                        </div>

                        <div class="col">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" class="form-control form-control-sm" name="product_name" id="product_name">
                        </div>

                        <div class="col">
                        <label for="product_code" class="form-label">Product Code</label>
                        <input type="text" class="form-control form-control-sm" name="product_code" id="product_code">
                        </div>
                    </div>

                    <div class="row mb-2">
                         <div class="col">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <label for="category" class="form-label">Category ID</label>
                            <select class="form-select" name="category_id" id="category" required>

                            <option value="" selected disabled>Select Category</option>

                            <?php foreach ($categories as $category): ?>

                            <option value="<?= htmlspecialchars($category['category_id']) ?>">

                            <?= htmlspecialchars($category['category_name']) ?>

                            </option>
                            <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col">
                            <label for="brand" class="form-label">Brand ID</label>
                            <select class="form-select" name="brand_id" id="brand" required>

                            <option value="" selected disabled>Select Brands</option>

                            <?php foreach ($brands as $brand): ?>

                            <option value="<?= htmlspecialchars($brand['brand_id']) ?>">

                            <?= htmlspecialchars($brand['brand_name']) ?>

                            </option>
                            <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col">
                                <label for="supplier" class="form-label">Supplier ID</label>
                                <select class="form-select" name="supplier_id" id="Suppliers" required>

                                <option value="" selected disabled>Select Suppliers</option>

                                <?php foreach($suppliers as $supplier): ?>

                                    <option value="<?=htmlspecialchars($supplier['supplier_id'])?>">
                                        <?=htmlspecialchars($supplier['supplier_name'])?>
                                    </option>

                                <?php endforeach?>
                                

                                </select>
                        </div>
                    </div>
                    <!-- More rows and inputs here -->

                    <button type="submit" name="add_product" class="btn btn-primary btn-md">Add Product</button>
                    </form>
                </div>
            </div>
<!--form handling end here-->

                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SoftDev 2025</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
