
<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"/>
    <link rel="stylesheet" href="../Frontend/public/resident.css">
    <link rel="stylesheet" href="../Frontend/public/index.css">
    <link rel="stylesheet" href="../Frontend/public/dashboard.css">

</head>

<body>
  
     <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="../index.html">Home</a></div>
                <div class="services">Services
                    <div class="dropdown_content">
                        <p><a href="../../products_services/products_menu.html">View products</a>
                    </div>
                </div>
                <div class="aboutUs"><a href="../contactus.html">Contact Us</a></div>
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
                    <i class='bx bx-menu' id="menu_icon" style="font-size: 23px;"></i>
                </div>

                <div class="items_mobile" id="items_mobile">
                    <div class="home"><a href="../index.html">Home</a></div>
                    <div class="services">Services
                        <div class="dropdown_content">
                            <p><a href="../../products_services/products_menu.html">View products</a>
                        </div>
                    </div>
                    <div class="aboutUs_html navItems"><a href="../contactus.html">Contact Us</a></div>

                    <div class="search">
                        <form id="mobile_navForm" class="btn" action="search_products.php" method="GET">
                            <input type="text" name="product_search" id="search" placeholder="Search">
                            <button type="submit" id="search" class="button">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav> <!--End of nav bar-->

    </main>
        <!-- Page loader -->
        <!-- <div class="page-loader">
            <div></div>
            <div></div>
            <div></div>
        </div> -->

        <!-- Mini nav bar -->
        <div class="userLogin">
            <div class="logon">
                <p>
                    <i class='bx bx-user'></i><span class="username" id="username"> chile</span>
                    <span><i class='bx bx-chevron-down arrow_down' id="user_icon"></i></span>
                </p>
                <div id="displayUserAdd" class="user_dispay">
                    <p id="business_signup"><a href="../Resident/resident.html"><span class="material-symbols-outlined">add_business</span> User Sign up ?</a></p>
                    <p id="business_login"><a href="../Resident/resident_login.html"><span class="material-symbols-outlined">login</span> User sign in ?</a></p>
                    <p id="admin_login"><a href="../mainpages/admin/admin_login.html"> <span class="material-symbols-outlined">login</span> Admin Login</a></p>
                </div>
            </div>
        </div>

         <!-- Background changer-->
         <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>

        <?php



if (isset($_SESSION['name'])) {
    // Session is active, user is logged in
    echo "Welcome back,  " . $_SESSION['name'];
    // You can access other session variables here (if set)
  } else {
    // Session is not active, user is not logged in
    echo "You are not logged in.";
    // Redirect to login page or display a login form
  }

?>

        <!-- Dashboard -->
        <div style="display: flex; justify-content: space-around; margin-top: 50px; margin-bottom: 50px;">
            <h4><span class="material-icons-sharp dashboard_icon"> grid_view </span> Admin Dashboard</h4>
        </div>

        <div class="container_fluid dashboard_container">
            <div class="side_dashboard_container">   
                <div id="sideNav" class="side_dashboard">
                    <h4><span class="material-icons-sharp dashboard_icon side_dashboard_icon"> grid_view </span> Dashboard</h4>
                </div>

                <div class="dashboard_items">
                    <div id="manage_residents" class="manage_residents dashboard_option" data-table="display_residents"><a href="">Manage Residents</a></div>
                    <div id="manage_company" class="manage_company dashboard_option" data-table="display_company"><a href="">Manage Company</a></div>
                    <div id="manage_products" class="manage_products dashboard_option" data-table="display_products"><a href="">Manage Products</a></div>
                    <div id="manage_areas" class="manage_areas dashboard_option" data-table="display_areas"><a href="">Manage Areas</a></div>
                </div>
            </div>

            <!-- Resident table -->
            <table id="display_residents" class="display_residents dashboard_table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Area</th>
                        <th>Environmental Interest</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                    <tr>
                        <td>Alia</td>
                        <td>Chiemena</td>
                        <td>aliachiemena@gmail</td>
                        <td>18</td>
                        <td>Male</td>
                        <td>Hatfield</td>
                        <td>Any Environmental Interest</td>
                        <td class="table_btn">
                            <div id="btn_update" class="btn_update"><i name="" class='bx bxs-edit-alt'></i></div>
                            <div id="btn_delete"><span class="material-symbols-outlined btn_delete">
                                delete
                                </span></div>
                        </td>
                    </tr>

                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>johnDoe@gmail</td>
                        <td>18</td>
                        <td>Male</td>
                        <td>Hatfield</td>
                        <td>Any Environmental Interest</td>
                        <td class="table_btn">
                            <div id="btn_update" class="btn_update"><i name="" class='bx bxs-edit-alt'></i></div>
                            <div id="btn_delete"><span class="material-symbols-outlined btn_delete">
                                delete
                                </span></div>
                        </td>
                    </tr>
            </table>

            <!-- Company table -->
            <table id="display_company" class="display_company dashboard_table">
                <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Email</th>
                        <th>password</th>
                        <th>Phone Number</th>
                        <th>Product_service</th>
                    </tr>
                </thead>
                
                    <tr>
                        <td>Tesco</td>
                        <td>tesco@gmail</td>
                        <td>18</td>
                        <td>Hatfield</td>
                        <td>Any Environmental Interest</td>
                        <td class="table_btn">
                            <div id="btn_update" class="btn_update"><i name="" class='bx bxs-edit-alt'></i></div>
                            <div id="btn_delete"><span class="material-symbols-outlined btn_delete" name="">
                                delete
                                </span></div>
                        </td>
                    </tr>
            </table>

            <!-- Products table -->
            <table id="display_products" class="display_products dashboard_table">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Size</th>
                        <th>Environmental benefits</th>
                        <th>Price</th>
                    </tr>
                </thead>
                
                    <tr>
                        <td>Electric Bulb</td>
                        <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo ipsa dolor cupiditate aperiam, perferendis consequuntur, quod quam dolorem reprehenderit, voluptates numquam ea animi reiciendis quis at non quo natus repellendus?</td>
                        <td>Medium</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit corrupti, autem totam laboriosam explicabo temporibus quis fugit facere tempore blanditiis dicta eos nobis culpa alias in quaerat dignissimos deleniti reprehenderit?</td>
                        <td>200</td>
                        <td class="table_btn">
                            <div id="btn_update" class="btn_update"><i name="" class='bx bxs-edit-alt'></i></div>
                            <div id="btn_delete"><span class="material-symbols-outlined btn_delete">
                                delete
                                </span></div>
                        </td>
                    </tr>
            </table>

            <!-- Table for Areas -->
            <!-- <table id="display_areas" class="display_areas dashboard_table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Area</th>
                        <th>Environmental Interest</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                    <tr>
                        <td>Alia</td>
                        <td>Chiemena</td>
                        <td>aliachiemena@gmail</td>
                        <td>18</td>
                        <td>Male</td>
                        <td>Hatfield</td>
                        <td>Any Environmental Interest</td>
                        <td class="table_btn">
                            <div id="btn_update" class="btn_update"><i name="" class='bx bxs-edit-alt'></i></div>
                            <div id="btn_delete"><span class="material-symbols-outlined btn_delete">
                                delete
                                </span></div>
                        </td>
                    </tr>
            </table> -->
        </div>
    </main>

     <!--Section for footer-->
     <footer id="footer">
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

    <script src="../Frontend/Resident/resident.js"></script>
    <script src="../Frontend/mainpages/index.js"></script>
    <script src="../Frontend/admin/dashboard.js"></script>
    <script>
        //  $(".page-loader").removeClass("fade-out");
        // $(".page-loader").addClass("loader-fade-in");
    </script>
</body>
</html>