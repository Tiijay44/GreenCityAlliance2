
<?php
require_once('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="resident_css.css">
  </head>
  <body>
    

    <main  class="container_fluid">
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>

        <form class="form" id="myForm" action="resident_form.php" method="POST">
            <div class="create-account">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>

            <!--Section to display Success message-->
            <p id="success_messagebox" class="success_messagebox"></p>

        <!-- section for First and Last name -->
            <div id="formControl" class="fullname container">
                <div class="div_mobile_space">
                    <div>
                        <label for="first_name" name="first_name_l" class="first_name">First Name</label>
                    </div>
                    <input type="text" name="firstName" id="first_name" placeholder="Enter First name"/>
                    <p id="firstNameerrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="last_name" name="last_name_l" class="last_name">Last Name</label>
                    </div>
                    <input type="text" name="lastName" id="last_name" placeholder="Enter Last name"/>
                    <p id="lastNameerrorBox" class="errorBox"></p>
                </div>
            </div>

            <div id="formControl" class="email container">
                <div class="div_mobile_space">
                    <div>
                        <label for="email" class="email">Email</label>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Email"/>
                    <p id="emailerrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_email" class="Reconfirm_email">Reconfirm Email</label>
                    </div>
                    <input type="email" name="Reconfirm_email" id="Reconfirm_email" placeholder="Reconfirm Email"/>
                    <p id="Reconfirm_emailerrorBox" class="errorBox"></p>
                </div>
            </div>

            <div id="formControl" class="password_container container">
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password" placeholder="eg johnDoe123!"/>
                    <p id="passworderrorBox" class="errorBox"></p>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_password" class="Reconfirm_password">Reconfirm Password</label>
                    </div>
                    <input type="password" name="Reconfirm_password" id="Reconfirm_password" placeholder="Reconfirm Password"/>
                    <p id="Reconfirm_passworderrorBox" class="errorBox"></p>
                </div>
            </div>

            <div id="formControl" class="location_age container">
                <div class="div_mobile_space">
                    <div>
                        <label for="location" class="location_l">Area</label>
                    </div>
                    <input type="text" name="location" id="location" placeholder="Enter your area">
                    <p id="locationerrorBox" class="errorBox"></p>
                </div>

                <div class="age_group div_mobile_space">
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <input type="number" name="age" id="age" placeholder="Enter your age">
                    <p id="ageerrorBox" class="errorBox"></p>
                    <!--<select id="age_group" name="age_group">
                        <option value="">Select Age Group</option>
                        <option value="18-25">18-25</option>
                        <option value="26-35">26-35</option>
                        <option value="36-45">36-45</option>
                    </select> -->
                </div>
                

                <!-- <div class="dob-container">
                    <label for="dob">Date of Birth:</label>
                    <div class="dob-inputs">
                        <input type="number" id="dobDay" name="dobDay" placeholder="Day" min="1" max="31">
                        <input type="number" id="dobMonth" name="dobMonth" placeholder="Month" min="1" max="12">
                        <input type="number" id="dobYear" name="dobYear" placeholder="Year" min="1900" max="2100">
                    </div>
                    <p id="dobError"></p>
                </div> -->
                
                <!-- <div class="age_group div_mobile_space">
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <input type="date" name="age" id="age" placeholder="Enter your age">
                </div> -->
                
            </div>

            <!-- Section for environmental interest and gender-->
            <div id="formControl" class="environ_gender container">
                <div class="environmental_interest_section">
                    <div class="div_mobile_space">
                        <label for="Environmental Interest" name="environmental_interests">Environmental interest</label>
                        <span id="environmental_interest_icon"><i class='bx bx-chevron-down div_mobile_space_cursor' id="environmental_interest_arrowdown"></i></span>
                        <span id="environmental_interest_arrowup"><i class='bx bx-chevron-up'></i></span>
                    </div>

                    <div class="environmental_interest_visibility" id="environmental_interest_visibility" name="environmental_interests">
                        <div class="environmental_interest">
                            <span>Renewable Energy <input type="checkbox" value="Renewable Energy" name="environmental_interests" id="renewable_energy"></span>
                            <span>Waste Reduction <input type="checkbox" value="Waste Reduction" name="environmental_interests" id="waste_reduction"></span>
                            <span>Energy Efficiency <input type="checkbox" value="Energy Efficiency" name="environmental_interests" id="energy_efficiency"></span>
                            <span>Transportation <input type="checkbox" value="Transportation" name="environmental_interests" id="transportation"></span>
                
                        </div>
                    </div>
                    <p id="interesterrorBox" class="errorBox"></p>
                </div>
                    
                <div class="gender_section div_mobile_space">
                    <div>
                        <label for="gender" name="gender" id="gender">Gender</label>
                    </div>
                    <div class="choose_gender">
                         <label for="male">Male</label>  <input type="radio" id="male" name="gender" value="male"/>
        
                         <label for="female">Female</label>
                        <input type="radio" id="female" name="gender" value="female" />

                        <label for="other">Other</label>
                        <input type="radio" id="other" name="gender" value="other" />
                    </div>
                    <p id="gendererrorBox" class="errorBox"></p>
                </div>
            </div>

            <div class="btn residentSignupbtn">
                <button type="submit" name="Submit" onclick="Submit()" id="submit" class="button">Submit</button>
            </div>
        </form>
    </main>

    <!--Section for footer-->
    <?php
require_once('footer.php');
?>


    <script src="resident.js"></script>
  </body>
</html>
