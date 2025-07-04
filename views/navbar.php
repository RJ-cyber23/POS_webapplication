<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style/offcanvas.css">
    <link rel="stylesheet" href="Style/design.css">
    <title>active</title>
</head>
<body>

    <!--This is a navbar icon and its contents-->
    <nav class="navbar navbar-expand-xxl">

  <div class="container-fluid">
    <div class="row">
     
        <div class="col-auto-2 bg-info p-2 rounded-4 ">
            <a class="navbar-brand text-white text-center " href="#">Point Of Sale</a>
        </div>
        
    </div>
   

    <button class="navbar-toggler bg-info" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse" id="navbarNav">


      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>

  </div>
</nav>
</div>

<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar Panel -->
    <div class="col-sm-2 rounded-4 bg-light min-vh-100 p-3">
      <div class="mb-3">🏷️ Product</div>
      <div class="mb-3">📊 Reports</div>
      <div class="mb-3">🧾 Transactions</div>
      <div class="mb-3">👤 Users</div>
    </div>

        <div class="col-sm-7 p-4">
      <h2>Welcome to POS</h2>
      <p>This is your main dashboard area.</p>
    </div>
  </div>
</div>



<div class="container-fluid text-center"></div>

         <!--This is the equal column ratio-->
        <div class="row">
            <div class="col-sm-2 bg-warning p-5">

            </div>
            <div class="col-sm-8 bg-danger p-5">
                column right
            </div>
            <div class="col-sm-2 bg-primary p-5">
                column right
            </div>
        </div>

        

         <!--This is the 1/2 column ratio-->
        <div class="row"> 
            <div class="col-md-4 bg-success p-3">
                column left
            </div>

            

            <div class="col-md-4 bg-secondary p-3">
                column right
            </div>
            <div class="col-md-4 bg-success p-3">
                column right
            </div>
        </div>

        <!--This is a 1/3-->
        <div class="row">
            <div class="col-md-3 bg-dark text-white p-1">
                column left
            </div>
            <div class="col-md-6 bg-info p-1">
                column left
            </div>
            <div class="col-md-3 bg-dark text-white p-1">
                column left
             </div>
        </div>
            
    </div>


   <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>