
<?php
require_once('../../GreenCityAlliance/database.php');
$conn = db_connect();

// SQL query to fetch areas
$sql = "SELECT Council_id, Council_name FROM Local_councils";
$result = $conn->query($sql);

// Check query execution
if (!$result) {
  die("Error: " . $conn->error);
}

// Generate options for dropdown
$area_options = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $area_options .= "<option value='" . $row["Council_name"] . "'>" . $row["Council_name"] . "</option>";
  }
} else {
  $area_options = "<option value=''>No areas found</option>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>products</title>
    <link rel="stylesheet" href="../Resident/resident.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../Frontend/public/products.css" />
    <link rel="stylesheet" href="../Frontend/public/resident.css">
    <link rel="stylesheet" href="../Frontend/public/products_menu.css">
    <style>
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            align-content: center;
            justify-items: center;
            justify-self: center;
        }
    </style>
  </head>
  <body>
    <!--Section for nav bar-->
    <nav class="desktop_nav">
      <!--Navbar for Destok view-->
      <div class="navbar">
        <div class="logo">LOGO</div>

        <div class="items">
          <div class="home"><a href="../mainpages/index.html">Home</a></div>
          <div class="services">Services
            <div class="dropdown_content">
                <p><a href="../products_services/products_menu.html">View products</a>
            </div>
        </div>
          <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact Us</a></div>
        </div>

        <div class="search">
          <form id="desktop_navForm" class="btn" action="search_products.php" method="GET">
              <input type="text" name="product_search" id="search" placeholder="Search">
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
          <div id="items_menu">
            <i class="bx bx-menu" id="menu_icon" style="font-size: 23px"></i>
          </div>

          <div class="items_mobile" id="items_mobile">
            <div class="home"><a href="../mainpages/index.html">Home</a></div>
            <div class="services">Services
              <div class="dropdown_content">
                  <p><a href="../products_services/products_menu.html">View products</a>
              </div>
          </div>
            <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact Us</a></div>

            <div class="search">
              <form id="mobile_navForm" class="btn" action="search_products.php" method="GET">
                  <input type="text" name="product_search" id="search" placeholder="Search">
                  <button type="submit" id="search" class="button">Search</button>
              </form>
          </div>
          </div>
        </div>
      </div>
    </nav>
    <!--End of nav bar-->

    <main>
      <!-- Background changer-->
      <div class="container-fluid backgroundChanger">
        <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
      </div>

      <form class="areaform" id="myForm" action="add_new_area.php" method="POST">
        <div id="formControl" class="fullname container">
          <div class="div_mobile_space product_name">
            <div>
              <label for="product_name" class="first_name product_name">
               Area</label>
          
            </div>
            <input
              type="text"
              name="area_name"
              id="area_name"
              placeholder="Enter area name">
          </div>

          <div class="div_mobile_space product_name">
            <div>
            <label for="council" class="council">Local Council</label>       
            </div>
            <select name="council_name" id="council">
  <?php echo $area_options; ?> </select>

          </div>
        </div>

        <center>
        <div class="btn">
            <button type="submit" name="Submit" id="submit" class="button">Submit</button>
        </div>
        </center>
      </form>
    </main>
    <!--Section for footer-->
    <footer>
      <div class="container footerFlex">
        <div class="services_footer">
          <h5>Services</h5>
          <p><a href="index.html">Home</a></p>
          <p><a href="menu.html">Menu</a></p>
          <p><a href="">About Us</a></p>
          <p><a href="contactUs.html">Contact Us</a></p>
          <p><a href="">Become a Vendor</a></p>
        </div>
        <div class="support">
          <h5>Support</h5>
          <p><a href="">How to Order</a></p>
          <p><a href="">Where we deliver</a></p>
          <p><a href="">FAQs</a></p>
          <p><a href="">Contact</a></p>
          <p><a href="">Terms and Conditions</a></p>
          <p><a href="">Privacy Policy</a></p>
        </div>
        <div class="propertyManagement">
          <h5>Property Management</h5>
          <p><span><i class='bx bx-map'></i></span> Flat no B-5, plot 06 Block SW(H)-California</p>
          <p><span><i class='bx bx-phone'></i></span> +2348034956084</p>
          <p><span><i class='bx bx-envelope'></i></span> aliachiemena@gmail.com</p>
          <p><span><i class='bx bxs-time'></i></span> Mon - Sat: 7am - 5pm, Sun: 10am - 4pm</p>
          <div class="socialHandles">
            <a href=""><span><i class='bx bxl-youtube'></i></span></a>
            <a href=""><span><i class='bx bxl-facebook-circle'></i></span></a>
            <a href=""><span><i class='bx bxl-twitter'></i></span>
            </a>
            <a href=""><span><i class='bx bxl-instagram-alt' ></i><span></a>
          </div>
        </div>
      </div>
      </footer>

    <script src="../Resident/resident.js"></script>
    <script src="product.js"></script>
  </body>
</html>

