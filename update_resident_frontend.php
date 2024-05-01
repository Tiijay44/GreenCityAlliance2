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

require_once('database.php');
require_once('nav.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Frontend/public/resident.css">
</head>

<body>
    <!--Section for nav bar-->
  
    <main class="container_fluid">
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon'></i></button>
        </div>


        <?php
       $conn = db_connect();

       $resident_id = isset($_GET['Resident_id']);
       
       if (isset($_GET['Resident_id'])) {
       
           $sql = "SELECT * FROM Resident WHERE Resident_id = $resident_id";
           $result = $conn->query($sql);
       
           if ($result->num_rows > 0) {
               $row = $result->fetch_assoc();
               ?>
                <form action="update_resident_backend.php?Resident_id=<?php echo $row['Resident_id']; ?>" method="POST">

                    <!--Section to display Success message-->
                    <p id="success_messagebox" class="success_messagebox"></p>

                    <!-- Hidden attribut: residentId -->
                    <input type="hidden" name="resident_id" value="<?php echo $row['Resident_id']; ?>">

                    <!--First and last name-->
                    
                    <div id="formControl" class="fullname container">
                        <div class="div_mobile_space">
                            <div>
                                <label for="firstname">First Name</label>
                            </div>

                            <input type="text" name="firstname" id="firstname" value="<?php echo $row['FirstName']; ?>">     
                        </div>
                    
                        <div class="div_mobile_space">
                        <div>
                            <label for="lastname">Last Name</label>
                        </div>
                        <input type="text" name="lastname" id="lastname" value="<?php echo $row['LastName']; ?>">
                        </div>
                    </div>

                    <!-- Email and age -->
                    <div id="formControl" class="fullname container">
                        <!--  Email -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="email">Email</label>
                            </div>
                            <input type="text" name="email" id="email" value="<?php echo $row['Email']; ?>">
                        </div>

                        <!-- Age -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="age">Age</label>
                            </div>
                            <input type="number" name="age" id="age" value="<?php echo $row['AGE']; ?>">
                        </div>
                    </div>

                    <!-- Password and gender -->
                    <div id="formControl" class="email container">
                        <!-- Password -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="password">Password</label>
                            </div>
                            <input type="text" name="password" id="password" value="<?php echo $row['Password']; ?>">
                        </div>

                        <!-- Gender -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="gender">Gender</label>
                            </div>
                            <input type="text" name="gender" id="gender" value="<?php echo $row['Gender']; ?>">
                        </div>
                    </div>

                    <!-- Location and environmental interest -->
                    <div id="formControl" class="email container">
                        <!-- Password -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="location">Location</label>
                            </div>
                            <input type="text" name="location" id="location" value="<?php echo $row['Location']; ?>">
                        </div>

                        <!-- Gender -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="environmental_interest">Environmental Interest</label>
                            </div>
                            <input type="text" name="environmental_interest" id="environmental_interest" value="<?php echo $row['Environmental_interests']; ?>">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <center>
                        <div style="text-align: center;" class="btn residentSignupbtn">
                            <button class="button" type="submit" name="Submit">Update</button>
                        </div>
                    </center>
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
                    <a href=""><span><i class='bx bxl-instagram-alt'></i><span></a>
                </div>
            </div>
        </div>
              
    </footer>

</body>

</html>
            
<?php
}
}