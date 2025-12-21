<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Vault- Gaming Store</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <link rel="stylesheet" href="../lab#5/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <script src="../lab#5/bootstrap/js/bootstrap.bundle.min.js"> </script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Montreal', sans-serif;">

    <div style="background-color: #020003; ">
        <nav class="navbar">

            <button class="btn btn-link text-white form-text" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
                <i class="fa-solid fa-bars fw-bold fs-4"></i>
            </button>
            <a class="navbar-brand ms-2 text-white fw-bold fst-italic form-text ms-3 fs-4" href="#">
                GAMEVAULT
            </a>
            <form class="d-flex mx-xl-auto" style="width: 500px;">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search entire store here...">
                    <button class="btn btn-danger" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
            <ul class="navbar-nav d-flex flex-row gap-5 me-5">
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-5 fw-semibold" href="#">Home</a>
                </li>
                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-5 fw-semibold" href="#">Product</a>
                </li>
                <li class="nav-item form-text ">
                    <a class="nav-link text-white fs-5 fw-semibold" href="#">Contact</a>
                </li>

                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-5 fw-semibold" href="#"><i class="fa-solid fa-user"></i></a>
                </li>



                <li class="nav-item form-text">
                    <a class="nav-link text-white fs-5 fw-semibold" href="#" data-bs-toggle="offcanvas"
                        data-bs-target="#sidebarcart"><i class="fa-solid fa-cart-shopping"></i>(0) </a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Sidebar Offcanvas left side -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar"
        style="width: 300px; background-color: rgb(255, 255, 255);">
        <div class="offcanvas-header text-white" style="background-color: #08010e;">
            <h5 class="offcanvas-title">Categories</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="accordion accordion-flush" id="sidebarAccordion">
                <!-- PlayStation 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#ps5Menu">
                            <i class="bi bi-controller me-2"></i> PlayStation 5

                        </button>
                    </h2>
                    <div id="ps5Menu" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Action</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Strategy</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Simulation</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Sports</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Sports</a>


                            </div>
                        </div>
                    </div>
                </div>

                <!-- PlayStation 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#ps4Menu">
                            <i class="bi bi-controller me-2"></i> PlayStation 4
                        </button>
                    </h2>
                    <div id="ps4Menu" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Action</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Strategy</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Simulation</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Sports</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Shooter</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Xbox -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#xboxMenu">
                            <i class="fa-brands fa-xbox"></i> Xbox
                        </button>
                    </h2>
                    <div id="xboxMenu" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Action</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Strategy</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Simulation</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Sports</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Shooter</a>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nintendo Switch -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#nintendoMenu">
                            <i class="bi bi-nintendo-switch me-2"></i> Nintendo Switch
                        </button>
                    </h2>
                    <div id="nintendoMenu" class="accordion-collapse collapse" data-bs-parent="#sidebarAccordion">
                        <div class="accordion-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Action</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Strategy</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Simulation</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Sports</a>
                                <a href="#" class="list-group-item list-group-item-action ps-4 ">Shooter</a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-right-to-bracket me-2"></i> Sign In
                </a>

                <a href="#" class="list-group-item list-group-item-action ps-4">
                    <i class="fa-solid fa-user-plus me-2"></i> Create Account
                </a>
            </div>
        </div>
    </div>
   
    <!--cart right side-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarcart"
        style="width: 400px; background-color: rgb(255, 255, 255);">
        <div class="offcanvas-header text-white" style="background-color: #0d0117;">
            <h5 class="offcanvas-title">Cart</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
        </div>
    </div>

    <!-- Hero Carousel -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner w-100">

            <div class="carousel-item active">
                <img src="images/60bd647d-0f8f-49f6-b53c-90370462d209.jpg" class="w-100" alt="sale"
                    style="height: 620px; ">
            </div>

            <div class="carousel-item">
                <img src="images/1.jpg" class="w-100" alt="xbox" style="height: 620px; ">
            </div>

            <div class="carousel-item">
                <img src="images/cb44e938bef3d877aa115fdba8968b18.jpg" class="w-100" alt="ps5" style="height: 620px;">
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>


    <!-- 11.11 Sale Section -->
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">NEW ARRIVAL</h2>
            <a href="#" class="btn border-black">View All</a>
        </div>

        <div id="newarrival" class="carousel slide" data-bs-ride="false">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-4">
                            <div class="card border shadow-sm h-100">
                             <a class="text-decoration-none text-dark" href="">   <img src="images/images (2).jpg"
                                    class="card-img-top" alt="Product" style="height: 300px; ">
                                <div class="card-body d-flex flex-column  ">
                                    <div class="card-title">Red Dead Redemption 2 PS4</div>
                                    </a>
                                    <p class="text-danger fw-bold mb-3">$56.00</p>
                                    <button class="btn btn-danger w-100 mt-auto" type="submit" 
                                           >
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 ">
                            <div class="card border shadow-sm h-100">
                              <a class="text-decoration-none text-dark" href="">    <img src="images/images (3).jpg"
                                    class="card-img-top" alt="Product" style="height: 300px; ;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">Forza Horizon 5</h6> </a>
                                    <p class="text-danger fw-bold mb-3">$49.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="card border shadow-sm h-100">
                 <a class="text-decoration-none text-dark" href="">   <img src="images/mario kart.jpg"
                                    class="card-img-top" alt="Product" style="height: 300px; ;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">Mario Kart World SWITCH 2</h6> </a>
                                    <p class="text-danger fw-bold mb-3">Rs.17,500.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="card border shadow-sm h-100">
                              <a class="text-decoration-none text-dark" href="">    <img src="images/pokemon legends z-a .jpg"
                                    class="card-img-top" alt="Product" style="height: 300px; ">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">POKEMON LEGENDS Z-A Switch 2</h6> </a>
                                    <p class="text-danger fw-bold mb-3">Rs.17,000.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="row g-4">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border shadow-sm h-100">
                                <img src="https://via.placeholder.com/300x250/f38181/ffffff?text=Elden+Ring"
                                    class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">Elden Ring Shadow of the Erdtree PS5</h6>
                                    <p class="text-danger fw-bold mb-3">Rs.9,500.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border shadow-sm h-100">
                                <img src="https://via.placeholder.com/300x250/aa96da/ffffff?text=Resident+Evil"
                                    class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">Resident Evil 4 Remake PS5</h6>
                                    <p class="text-danger fw-bold mb-3">Rs.7,800.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border shadow-sm h-100">
                                <img src="https://via.placeholder.com/300x250/fcbad3/ffffff?text=Animal+Crossing"
                                    class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title form-text">Animal Crossing: New Horizons Switch</h6>
                                    <p class="text-danger fw-bold mb-3">Rs.14,000.00</p>

                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card border shadow-sm h-100">
                                <img src="https://via.placeholder.com/300x250/a8e6cf/ffffff?text=Spider-Man"
                                    class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                                <div class="card-body d-flex flex-column">
                                    <h6 class="card-title">Marvel's Spider-Man 2 PS5</h6>
                                    <p class="text-danger fw-bold mb-3">Rs.10,500.00</p>
                                    <button class="btn btn-danger w-100 mt-auto">
                                        <i class="bi bi-cart-plus"></i> Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#newarrival" data-bs-slide="prev"
                style="width: 0px;">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#newarrival" data-bs-slide="next"
                style="width: 0px ;">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>



        </div>


    </div>


    <!-- Hot Selling Items -->
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0 border-bottom border-danger border-3 pb-2">Hot Selling Items</h2>
            <a href="#" class="btn btn-outline-dark btn-sm">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/300x250/43e97b/ffffff?text=PS4+Controller"
                            class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">-43%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">PlayStation 4 Copy Controller - Black</h6>
                        <p class="mb-1">
                            <span class="text-danger fw-bold">Rs.2,300.00</span>
                            <span class="text-muted text-decoration-line-through ms-2 text-sm">Rs.4,000.00</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x250/38f9d7/ffffff?text=GTA+V" class="card-img-top"
                        alt="Product" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">Grand Theft Auto V (GTA V) (PS5)</h6>
                        <p class="text-danger fw-bold mb-0">Rs.6,000.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100">
                    <img src="https://via.placeholder.com/300x250/667eea/ffffff?text=Gift+Card" class="card-img-top"
                        alt="Product" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h6 class="card-title">PlayStation Gift Card - 10$ US (DIGITAL CODE)</h6>
                        <p class="text-danger fw-bold mb-0">Rs.2,900.00</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card border shadow-sm h-100">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/300x250/764ba2/ffffff?text=Battlefield+1"
                            class="card-img-top" alt="Product" style="height: 250px; object-fit: cover;">
                        <span class="badge bg-danger position-absolute top-0 end-0 m-2">-25%</span>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">Battlefield 1 (PS4) (Used Game)</h6>
                        <p class="mb-1">
                            <span class="text-danger fw-bold">Rs.1,500.00</span>
                            <small class="text-muted text-decoration-line-through ms-2">Rs.2,000.00</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop by Category -->
    <div class="container my-5">
        <h2 class="fw-bold mb-4 border-bottom border-danger border-3 pb-2">Shop by Category</h2>
        <div class="row g-4 text-center">
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-gift fs-1 text-danger mb-3 d-block"></i>
                            <h6 class="card-title">Gift Cards</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-xbox fs-1 text-success mb-3 d-block"></i>
                            <h6 class="card-title">Xbox</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-controller fs-1 text-primary mb-3 d-block"></i>
                            <h6 class="card-title">PS4 & PS5</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-nintendo-switch fs-1 text-danger mb-3 d-block"></i>
                            <h6 class="card-title">Nintendo Switch</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-laptop fs-1 text-info mb-3 d-block"></i>
                            <h6 class="card-title">Gadgets</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <a href="#" class="text-decoration-none text-dark">
                    <div class="card border shadow-sm h-100">
                        <div class="card-body">
                            <i class="bi bi-arrow-repeat fs-1 text-warning mb-3 d-block"></i>
                            <h6 class="card-title">Used Games</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-danger">About Us</h5>
                    <p>Deals in all kind of games, consoles, accessories and gadgets.</p>
                    <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i> +923312088713</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> khananistore@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-danger">PlayStation 5</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Accessories</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">New Games</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Console</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-danger">Xbox</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Action</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Simulation</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Sports</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="text-danger">Follow Us</h5>
                    <div class="d-flex gap-3 fs-3 mb-4">
                        <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
                    </div>
                    <div class="mt-4">
                        <h5 class="text-danger">For GameVault Updates</h5>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Your email">
                            <button class="btn btn-danger" type="button">
                                <i class="bi bi-send-fill"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="text-center">
                <p class="mb-0"> 2025 Game Vault. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


</body>

</html>