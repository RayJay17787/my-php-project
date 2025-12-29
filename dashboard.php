<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '', 'gaming_store');

if (!isset($_SESSION['admin'])) {
    header("Location: signin.php");
    exit();
}

$admin = $_SESSION['admin'];

include 'adminheader.php';
?>
<body class="bg-light">
    <div class="bg-danger text-white text-center p-4 mb-4 shadow-sm">
        <div class="container-fluid">
            <h2>Dashboard</h2>
        </div>
    </div>

    <div class="container-fluid px-4 pt-2">
        <div class="row g-4 mb-4">
     <div class="col-12 col-sm-6 col-lg-3">
       <div class="card shadow-sm h-100">
         <div class="card-body">
            <div class="bg-primary shadow text-white rounded p-3 d-inline-block mb-3">
                 <i class="fa-solid fa-user fs-2"></i>
          </div>
   <p class="text-uppercase text-muted small mb-2 mt-2">Users</p>
   <h2 class="fw-bold mt-3">22</h2>
    
       </div>
   </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
   <div class="card shadow-sm h-100">
       <div class="card-body">
           <div class="bg-danger shadow text-white rounded p-3 d-inline-block mb-3">
  <i class="fa-solid fa-user-shield fs-2"></i>
           </div>
             <p class="text-uppercase text-muted small mb-2 mt-2">Admin</p>
   <h2 class="fw-bold mt-3">22</h2>
          
       </div>
   </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
   <div class="card shadow-sm h-100">
       <div class="card-body">
           <div class="bg-success shadow text-white rounded p-3 d-inline-block mb-3">
  <i class="fa-solid fa-cart-shopping fs-2"></i>
           </div>
         <p class="text-uppercase text-muted small mb-2 mt-2">Orders</p>
   <h2 class="fw-bold mt-3">222</h2>
          
       </div>
   </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
   <div class="card shadow-sm h-100">
       <div class="card-body">
           <div class="bg-primary shadow text-white rounded p-3 d-inline-block mb-4">
  <i class="fa-brands fa-playstation fs-2" style="color: rgb(255, 255, 255);"></i>
           </div>
           <p class="text-uppercase text-muted small mb-2">PlayStation 4</p>
           <h2 class="fw-bold mb-2">20</h2>
           <p class="text-muted small mb-0">
In stock
           </p>
       </div>
   </div>
            </div>
        </div>

      
        <div class="row g-4">
            <div class="col-12 col-sm-6 col-lg-3">
   <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="bg-dark shadow text-white rounded p-3 d-inline-block mb-3">
       <i class="fa-brands fa-playstation fs-2"></i>
   </div>
   <p class="text-uppercase  text-muted small mb-2">PlayStation 5</p>
   <h2 class="fw-bold mb-2">30</h2>
   <p class="text-muted small mb-0">
In stock
   </p>
      </div>
  </div>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
  <div class="card shadow-sm h-100">
      <div class="card-body">
   <div class="bg-success text-white shadow rounded p-3 d-inline-block mb-3">
<i class="fa-brands fa-xbox fs-2"></i>
   </div>
   <p class="text-uppercase text-muted small mb-2">Xbox</p>
   <h2 class="fw-bold mb-2">40</h2>
   <p class="text-muted small mb-0">
In stock
   </p>
      </div>
  </div>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
  <div class="card shadow-sm h-100">
      <div class="card-body">
   <div class="bg-danger text-white rounded-3 shadow d-inline-flex justify-content-center align-items-center mb-3" style="width: 75px; height: 68px;">
    <i class="bi bi-nintendo-switch fs-2"></i>
</div>
   <p class="text-uppercase text-muted small mb-2">Nintendo</p>
   <h2 class="fw-bold mb-2">10</h2>
   <p class="text-muted small mb-0">
 In stock
   </p>
      </div>
  </div>
     </div>

     <div class="col-12 col-sm-6 col-lg-3">
  <div class="card shadow-sm h-100">
      <div class="card-body">
   <div class="bg-warning shadow text-white rounded p-3 d-inline-block mb-3">
<i class="fa-solid fa-dollar-sign fs-2"></i>
   </div>
   <p class="text-uppercase text-muted small mb-2">Revenue</p>
   <h2 class="fw-bold mb-2">$45.00</h2>
   <p class="text-muted small mb-0"> Total
   </p>
      </div>
  </div>
     </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>