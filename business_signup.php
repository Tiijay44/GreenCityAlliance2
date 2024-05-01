<?php
require_once('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>business</title>
    <link rel="stylesheet" href="businesses_signup.css">
    <link rel="stylesheet" href="../Resident/resident.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
</head>
<body>
    <!--Section for nav bar-->
   

    <main>
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>
        
        <form class="form" id="myForm" action="company_form.php" method="POST" onsubmit="return validateForm()">
            <div class="create-account">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>

            <!--Section to display Success message-->
            <p id="success_messagebox" class="success_messagebox"></p>

            <!-- section for company name and contact details -->
            <div id="formControl" class="fullname container">
                <div class="div_mobile_space company_name">
                    <div>
                        <label for="company_name" class="first_name company_name"> Name</label>
                    </div>
                    <input type="text" name="company_name" id="company_name" placeholder="Enter Company Name" required/>
                    <p id="company_nameerrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space phone_no">
                    <div>
                        <label for="phone_no" class="last_name phone_no">Mobile No</label>
                    </div>
                    <input type="tel" name="phone_number" id="phone_no" placeholder="Enter Mobile" required/>
                    <p id="phone_noerrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for company email-->
            <div id="formControl" class="email container">
                <div class="div_mobile_space">
                    <div>
                        <label for="email" class="email">Email</label>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required/>
                    <p id="emailerrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_email" class="Reconfirm_email">Reconfirm Email</label>
                    </div>
                    <input type="email" name="Reconfirm_email" id="Reconfirm_email" placeholder="Reconfirm Email" required/>
                    <p id="Reconfirm_emailerrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for company password-->
            <div id="formControl" class="password_container container">
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password"/>
                    <p id="passworderrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_password" class="Reconfirm_password">Reconfirm Password</label>
                    </div>
                    <input type="password" name="Reconfirm_password" id="Reconfirm_password" placeholder="Reconfirm Password" required/>
                    <p id="Reconfirm_passworderrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for product Services-->
            <div class="formControl container product_service">
                <div class="div_mobile_space product_service div_mobile_space">
                    <div>
                        <label for="product_service">Product/Services</label>
                    </div>
                    <input type="text" name="product_services" id="product_service" placeholder="Product Services" required>
                    <p id="product_serviceerrorBox" class="errorBox"></p>
                </div>
            </div>

            <!-- Section for button-->
            <div class="btn">
                <input type="submit" id="submit" name="Submit" class="button" required>Submit</input>
            </div>
        </form>
        <div class="have_account">
            <p>Already have a business account? <span><a href="business-login.html">Sign in</a></span></p>  
        </div>
    </main>

     <!--Section for footer-->
     <?php
require_once('footer.php');
?>
    <!-- <script src="../Resident/resident.js"></script> -->
    <script src="business_signup.js"></script>
</body>
</html>