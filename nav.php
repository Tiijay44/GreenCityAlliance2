<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href=" Frontend/public/resident.css">
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="navbar/navbar.css">
</head>
<body>
    <!-- Section for nav bar-->
        <nav class="desktop_nav"> <!--Deskop navbar-->
        <div class="navba">
          <div class="log">LOGO</div>
          <div class="nav-items">
            <div><a href="index.php">Home</a></div>
            <div class="dropdown">
              <div class="services" href="#">Services</div>
              <div class="dropdown-content">
                <div><a href="view_products.php">View All Products</a></div>
                <div><a href="view_votes.php">View Product Votes</a></div>
              </div>
            </div>
            <div><a href="contactus.php">Contact</a></div>
            <div class="dropdown registration">
              <a href="#">Register</a>
              <div class="dropdown-content">
                <div><a href="resident.php">Resident Registration</a></div>
                <div><a href="company_frontend.php">Business Registration</a></div>
                <div><a href="products.php">Product Registration</a></div>
              </div>
            </div>
        </div>
          <div class="search-bar">
            <form id="desktop_navForm" class="btn" action="search_products.php" method="GET">
              <input type="text" name="product_search" id="search" placeholder="Products-Services">
              <button type="submit" id="search" class="button">Search</button>
          </form>
          </div>
        </div>
      </nav>
    


    <!-- Nav bar fof mobile view-->
    <nav class="mobile_nav">
        <div class="navbar_mobile">
            <div class="logo">LOGO</div>

            <div>
                <div id="items_menu" class="items_menu">
                    <i class='bx bx-menu' id="menu_icon" style="font-size: 23px;"></i>
                </div>

                <div class="nav-items items_mobile" id="items_mobile">
                    <div class="navitems_align_left">
                        <div><a href="index.php">Home</a></div>
                        <div class="dropdown">
                            <div class="services" href="#">Services</div>
                            <div class="dropdown-content">
                                <div><a href="view_products.php">View Products</a></div>
                                <div><a href="view_votes.php">View Product Votes</a></div>
                            </div>
                        </div>
                         <div><a href="contactus.php">Contact</a></div>
                        <div class="dropdown registration">
                            <a href="#">Register</a>
                            <div class="dropdown-content">
                                <div><a href="resident.php">Resident Registration</a></div>
                                <div><a href="company_frontend.php">Business Registration</a></div>
                                <div><a href="products.php">Product Registration</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="search-bar search">
                      <div class="search-bar">
                        <form id="desktop_navForm" class="btn" action="search_products.php" method="GET">
                          <input type="text" name="product_search" id="search" placeholder="Products-Services">
                          <button type="submit" id="search" class="button">Search</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </nav> <!--End of nav bar-->
      

    <script src="Frontend/Resident/resident.js"></script>
    <script src="/Frontend/mainpages/index.js"></script>
    <script src="/navbar/navbar.js"></script>
</body>
</html>

