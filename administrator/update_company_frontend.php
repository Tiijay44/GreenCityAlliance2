<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Extract company ID from URL parameter:**
// - Check if 'Company_id' exists in the URL using isset().
// - If not set, display an error message.
// **Process company update request (if company ID is provided):**
// **Construct SQL select query:**
// **Execute select query:**
// **Handle query result:**
// **Display update form pre-populated with company data:**
//require_once('admin_access_control.php');
require_once('../database.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../public/resident.css">
  </head>
  <body>
    <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="../mainpages/index.html">Home</a></div>
                <div class="services">Services
                    <div class="dropdown_content">
                        <p><a href="../products_services/products_menu.html">View products</a>
                    </div>
                </div>
                <div class="aboutUs"><a href="../mainpages/contactus.html">Contact Us</a></div>
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
                    <div class="services">Services
                        <div class="dropdown_content">
                            <p><a href="../products_services/products_menu.html">View products</a>
                        </div>
                    </div>
                    <div class="aboutUs_html navItems"><a href="../mainpages/contactus.html">Contact Us</a></div>

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

    <main  class="container_fluid">
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>

        require_once('../database.php');
$conn = db_connect();


$company_id = isset($_GET['Company_id']);


if (isset($_GET['Company_id'])) {

    $sql = "SELECT * FROM Company WHERE Company_id = '$company_id'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0) {
        $row = $result->fetch_assoc();
?>

        <form action="update_company_backend.php?Company_id=<?php echo $row['Company_id']; ?>" method="POST">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>
        
            <!--Section to display Success message-->
            <p id="success_messagebox" class="success_messagebox"></p>
        
            <!-- section for Company ID and Company name -->
            <div id="formControl" class="fullname container">
                <!-- Company ID -->
                <div class="div_mobile_space">
                    <div>
                        <label for=""> </label>
                    </div>

                    <input type="hidden" name="Company_id" value="<?php echo $row['Company_id']; ?>">
                </div>
        
                <!--  Name -->
                <div class="div_mobile_space">
                    <div>
                        <label for="company_name">Company Name:</label>
                    </div>
                    <input type="text" name="Company_name" id="company_name" value="<?php echo $row['Company_name']; ?>">
                </div>
            </div>
        
            <!-- Email -->
            <div id="formControl" class="email container">
                <!-- Email Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="email">Email:</label>
                    </div>
                    <input type="text" name="Email" id="email" value="<?php echo $row['Email']; ?>">
                </div>
        
                <!-- Password -->
                <div class="div_mobile_space">
                    <div>
                        <label for="password">Password:</label>
                    </div>
                    <input type="password" name="Password" id="password" value="<?php echo $row['Password']; ?>">
                </div>
            </div>
        
            <!-- Phone Number -->

            <input type="number" name="Phone_number" id="phone_number" value="<?php echo $row['Phone_number']; ?>">

            <div id="formControl" class="password_container container">
                <!-- Password Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password" placeholder="eg Johndoe123!"/>
                    <p id="passworderrorBox" class="errorBox"></p>
                </div>
        
                <!-- Reconfirm Password Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_password" class="Reconfirm_password">Reconfirm Password</label>
                    </div>
                    <input type="password" name="Reconfirm_password" id="Reconfirm_password" placeholder="Reconfirm Password"/>
                    <p id="Reconfirm_passworderrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Location and Age -->
            <div id="formControl" class="location_age container">
                <!-- Location Input -->
                <div class="div_mobile_space">
                    <div>
                        <label for="location" class="location_l">Area</label>
                    </div>
                    <input type="text" name="location" id="location" placeholder="Enter your area">
                    <p id="locationerrorBox" class="errorBox"></p>
                </div>
        
                <!-- Age Input -->
                <div class="age_group div_mobile_space">
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <input type="number" name="age" id="age" placeholder="Enter your age">
                    <p id="ageerrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Environmental Interest and Gender -->
            <div id="formControl" class="environ_gender container">
                <!-- Environmental Interest Section -->
                <div class="environmental_interest_section">
                    <div class="div_mobile_space envflex">
                        <label class="environmental_interest" for="Environmental Interest">Environmental interest</label>
                        <span id="environmental_interest_icon"><i class='bx bx-chevron-down div_mobile_space_cursor' id="environmental_interest_arrowdown"></i></span>
                        <!-- <span id="environmental_interest_arrowup"><i class='bx bx-chevron-up'></i></span> -->
                    </div>
        
                    <div class="environmental_interest_visibility" id="environmental_interest_visibility">
                        <div class="environmental_interest">
                            <span>Renewable Energy <input type="checkbox" name="environmental_interests" id="renewable_energy" value="Renewable Energy"></span>
                            <span>Waste Reduction <input type="checkbox" name="environmental_interests" id="waste_reduction" value="Waste Reduction"></span>
                            <span>Energy Efficiency <input type="checkbox" name="environmental_interests" id="energy_efficiency" value="Energy Efficiency"></span>
                            <span>Transportation <input type="checkbox" name="environmental_interests" id="transportation" value="Transportation"></span>
                            <!-- <span>Transportation <input type="checkbox" name="interest" id="waste_reductiontwo"></span> -->
                        </div>
                    </div>
                    <p id="interesterrorBox" class="errorBox"></p>
                </div>
                
                <!-- Gender Section -->
                <div class="gender_section div_mobile_space">
                    <div>
                        <label for="gender" name="gender" id="gender">Gender</label>
                    </div>
                    <div class="choose_gender">
                        <label for="male">Male</label> <input type="radio" id="male" name="gender" value="male"/>
                        <label for="female">Female</label> <input type="radio" id="female" name="gender" value="female" />
                        <label for="other">Other</label> <input type="radio" id="other" name="gender" value="other" />
                    </div>
                    <p id="gendererrorBox" class="errorBox"></p>
                </div>
            </div>
        
            <!-- Submit Button -->
            <div class="btn residentSignupbtn">
                <button type="submit" name="Submit" class="button">Submit</button>
            </div>
        </form> 

   
        <div class="have_account">
            <p>Already have an account? <span><a href="resident_login.html">Sign in</a></span></p>  
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

  </body>
</html>

<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Extract company ID from URL parameter:**
// - Check if 'Company_id' exists in the URL using isset().
// - If not set, display an error message.
// **Process company update request (if company ID is provided):**
// **Construct SQL select query:**
// **Execute select query:**
// **Handle query result:**
// **Display update form pre-populated with company data:**
//require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();


$company_id = isset($_GET['Company_id']);


if (isset($_GET['Company_id'])) {

    $sql = "SELECT * FROM Company WHERE Company_id = '$company_id'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0) {
        $row = $result->fetch_assoc();
?>
        <h2>Update Company Data</h2>
        <form action="update_company_backend.php?Company_id=<?php echo $row['Company_id']; ?>" method="POST">
            <label for=""> Company ID</label>
            <input type="hidden" name="Company_id" value="<?php echo $row['Company_id']; ?>">
            <label for="company_name">Company Name:</label>
            <input type="text" name="Company_name" id="company_name" value="<?php echo $row['Company_name']; ?>"><br><br>

            <label for="email">Email:</label>
            <input type="text" name="Email" id="email" value="<?php echo $row['Email']; ?>"><br><br>

            <label for="password">Password:</label>
            <input type="password" name="Password" id="password" value="<?php echo $row['Password']; ?>"><br><br>

            <label for="phone_number">Phone Number:</label>
            <input type="number" name="Phone_number" id="phone_number" value="<?php echo $row['Phone_number']; ?>"><br><br>

            <label for="product_services">Product/Service:</label>
            <input type="text" name="Product_Services" id="product_services" value="<?php echo $row['Product_Services']; ?>"><br><br>
            <button type="submit" name="Submit">Update</button>
        </form>
<?php
    } else {
        echo "Company not found!";
    }
} else {
    echo "Missing company ID!";
}