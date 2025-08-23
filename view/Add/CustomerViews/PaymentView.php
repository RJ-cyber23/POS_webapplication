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
        <link href="Style/bootstrap.css" rel="stylesheet" />    <link rel="stylesheet" href="assets/MyownCSS/css.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
                                    <a class="nav-link" href="index.php?page=Add Product"><i class="bi bi-cart4 me-2"></i>Add Products</a>
                                    <a class="nav-link" href="index.php?page=Purchase"><i class="bi bi-box-seam me-2"></i>Purchase Order</a>
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


<!--Read Customers-->
<form method="POST" id="formaction">
       <div class="container-fluid">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Payments</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addCustomerModal" class="btn btn-primary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Customers</span></a>
					<button type="submit" name="delete_selected" class="btn btn-danger">Delete Selected</button>
					</div>
				</div>
			</div>
            
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>payment_id</th>
						<th>invoice_id</th>
						<th>payment_method_id</th>
                        <th>amount</th>
                        <th>bank_id</th>
                        <th>payment_date</th>
                        <th>user_id</th>
                        <th>Action</th>
					</tr>
				</thead>
                
				<tbody>
                        <?php
                        $conn=(new PaymentsReadModel())->paymentRead();
                        foreach ($conn as $row): ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="<?=htmlspecialchars($row['payment_id']);?>" name="options[]" value="<?=htmlspecialchars($row['payment_id']);?>">
                                        <label for="checkbox1<?=htmlspecialchars($row['payment_id']);?>"></label>
                                    </span>
                                </td>

                                <td><?=htmlspecialchars($row['payment_id']);?></td>
                                <td><?=htmlspecialchars($row['invoice_id']);?></td>
                                <td><?=htmlspecialchars($row['payment_method_id']);?></td>
                                <td><?=htmlspecialchars($row['amount']);?></td>
                                <td><?=htmlspecialchars($row['bank_id']);?></td>
                                <td><?=htmlspecialchars($row['payment_date']);?></td>
                                <td><?=htmlspecialchars($row['user_id']);?></td>


                                <td> 
                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                    <form method="POST" style="display:inline;">
                                        <input type="hidden" name="payment_id" value="<?= htmlspecialchars($row['payment_id']); ?>">
                                        <button type="submit" name="delete_payment_id" class="btn btn-link p-0 m-0" onclick="return confirm('Are you sure you want to delete this customer?');">
                                            <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach;?>
				</tbody>
			</table>
             
            </form>
<!--End fot Read Customers-->

			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Create Modal HTML -->
<div id="addCustomerModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" id="formaction">

				<div class="modal-header">						
					<h4 class="modal-title">Add Payments</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="bi bi-x"></i></button>
				</div>

				<div class="modal-body">					
					<div class="form-group">
						<label>Payments ID</label>
						<input type="text" class="form-control" name="payment_id" id="payment_id" required>
					</div>

					<div class="form-group">
						<label class="form-label">Invoices ID</label>
						<select class="form-select" name="invoice_id" id="invoice_id">
                            <option value="" selected disabled>Select Invoices ID</option>
                            <?php foreach($invoices as $row):?>
                                <option value="<?=htmlspecialchars($row['invoice_id'])?>">
                                    <?=htmlspecialchars($row['invoice_id'])?>
                                </option>
                                <?php endforeach;?>
                        </select>
					</div>

					<div class="form-group">
						<label class="form-label">Payments Method ID</label>
						<select class="form-select" name="payment_method_id" id="payment_method_id">
                            <option value="" selected disabled>Select Payment Method ID</option>
                            <?php foreach ($methods as $row): ?>
                                <option value="<?=htmlspecialchars($row['payment_method_id'])?>">
                                    <?=htmlspecialchars($row['method_name'])?>
                                </option>
                                <?php endforeach;?>
                        </select>
					</div>
					<div class="form-group">
						<label class="form-label">Amount</label>
						<input type="number" class="form-control" name="amount" id="amount" required>
					</div>	

                    <div class="form-group">
						<label class="form-label">Bank ID</label>
						<select class="form-select" name="bank_id" id="bank_id">
                                <option value="" selected disabled>Select Bank ID</option>
                                <?php foreach($banks as $row):?>
                                    <option value="<?=htmlspecialchars($row['bank_id'])?>">
                                        <?=htmlspecialchars($row['bank_name'])?>
                                    </option>
                                    <?php endforeach;?>
                        </select>
					</div>		
                    
                    <div class="form-group">
                                <label class="form-label">Payment Date</label>
                                <input type="date" class="form-control" name="payment_date" id="payment_date">
                    </div>

                    <div class="form-group">
                                    <label class="form-label">Users</label>
                                    <select class="form-select" name="user_id" id="users_id">
                                        <option value="" selected disabled>Select Users</option>
                                        <?php foreach($users as $row):?>
                                            <option value="<?=htmlspecialchars($row['user_id'])?>">
                                               <?=htmlspecialchars($row['username'])?>
                                            </option>
                                            <?php endforeach;?>
                                    </select>
                    </div>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="add_payments" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!--Create Customers Modal-->

<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" id="formaction">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Customers</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
						<div class="modal-body">					
					<div class="form-group">
						<label>Payments ID</label>
						<input type="text" class="form-control" name="payment_id" id="payment_id">
					</div>

					<div class="form-group">
						<label class="form-label">Invoices ID</label>
						<select class="form-select" name="invoice_id" id="invoice_id">
                            <option value="" selected disabled>Select Invoices ID</option>
                            <?php foreach($invoices as $row):?>
                                <option value="<?=htmlspecialchars($row['invoice_id'])?>">
                                    <?=htmlspecialchars($row['invoice_id'])?>
                                </option>
                                <?php endforeach;?>
                        </select>
					</div>

					<div class="form-group">
						<label class="form-label">Payments Method ID</label>
						<select class="form-select" name="payment_method_id" id="payment_method_id">
                            <option value="" selected disabled>Select Payment Method ID</option>
                            <?php foreach ($methods as $row): ?>
                                <option value="<?=htmlspecialchars($row['payment_method_id'])?>">
                                    <?=htmlspecialchars($row['method_name'])?>
                                </option>
                                <?php endforeach;?>
                        </select>
					</div>
					<div class="form-group">
						<label class="form-label">Amount</label>
						<input type="number" class="form-control" name="amount" id="amount">
					</div>	

                    <div class="form-group">
						<label class="form-label">Bank ID</label>
						<select class="form-select" name="bank_id" id="bank_id">
                                <option value="" selected disabled>Select Bank ID</option>
                                <?php foreach($banks as $row):?>
                                    <option value="<?=htmlspecialchars($row['bank_id'])?>">
                                        <?=htmlspecialchars($row['bank_name'])?>
                                    </option>
                                    <?php endforeach;?>
                        </select>
					</div>		
                    
                    <div class="form-group">
                                <label class="form-label">Payment Date</label>
                                <input type="date" class="form-control" name="payment_date" id="payment_date">
                    </div>

                    <div class="form-group">
                                    <label class="form-label">Users</label>
                                    <select class="form-select" name="user_id" id="users_id">
                                        <option value="" selected disabled>Select Users</option>
                                        <?php foreach($users as $row):?>
                                            <option value="<?=htmlspecialchars($row['user_id'])?>">
                                               <?=htmlspecialchars($row['username'])?>
                                            </option>
                                            <?php endforeach;?>
                                    </select>
                    </div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" name="add_editPayment" value="Save">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" id="formaction">
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
                     <input type="hidden" name="payment_id" id="payment_id">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" name="delete_payment_id"  value="Delete">
				</div>
			</form>
		</div>
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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


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
