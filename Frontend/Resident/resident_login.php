<?php
session_start();

$_SESSION['name'] = isset($_GET['Product_name']);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../public/index.css">
    <link rel="stylesheet" href="../public/resident_login.css">
    <link rel="stylesheet" href="../Resident/resident.css">
    <link rel="stylesheet" href="../public/business_login.css">

</head>
<body>

    <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="../mainpages/index.html">Home</a></div>
                <div class="services"><a href="../products_services/products_menu.html">Services</a></div>
                <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact</a></div>
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
                    <div class="home"><a href="../mainpages/index.html">Home</a></div>
                    <div class="services"><a href="../products_services/products_menu.html">Services</a></div>
                    <div class="aboutUs.html"><a href="../mainpages/contactus.html">Contact</a></div>

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

    <main>
         <!-- Mini nav bar -->
         <div class="userLogin">
            <div class="logon">
                <p>
                    <i class='bx bx-user'></i>
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
        
        <form class="form" action="../../../GreenCityAlliance/vote_login.php?$_SESSION['name']" method="POST" onsubmit="return validateForm()">
            <div class="create-account">
                <p>Sign to  &nbsp;<b>Green Alliance</b></p>
            </div>

            <!--Email and Password section-->
            <div class="email_password">
                <div class="emailAddress">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                </div>
    
                <div class="password">
                    <input type="password" name="password" id="password" placeholder="Enter Password" placeholder="Johndoe123!">
                </div>
            </div>

            <div class="btn-b">
                <button type="submit" id="submit_btn" name="Submit" class="button button_login"><span><i class='bx bx-log-in'></i></span> &nbsp;Login</button>
            </div>

            <div class="or">
                <p>or</p>
            </div>

            <!--Sign in either with facebook or twitter-->
            <div class="btn-b">
                <button type="submit" id="facebook_btn" class="facebook_btn"><i class='bx bxl-facebook'></i></button>

                <button type="submit" id="twitter_btn" class="twitter_btn"><i class='bx bxl-twitter'></i></button>
            </div> <br>

            <div class="signupContainer">
                <p>Don't have an account? <span><a href="business_signup.html"> Sign up</a></span></p>
            </div>
        </form>
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
    <!-- <script src="../Frontend/admin/dashboard.js"></script> -->
    <script>
        //  $(".page-loader").removeClass("fade-out");
        // $(".page-loader").addClass("loader-fade-in");
    </script>
</body>
</html>

