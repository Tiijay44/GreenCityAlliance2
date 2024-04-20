<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link rel="stylesheet" href="resident_css.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
  </head>
  <body>
    <!--Section for nav bar-->
    <nav class="desktop_nav"> <!--Navbar for Destok view-->
        <div class="navbar">
            <div class="logo">LOGO</div>

            <div class="items">
                <div class="home"><a href="home">Home</a></div>
                <div class="services"><a href="Services.html">Services</a></div>
                <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>
            </div>
            
            <div class="search">
                <input type="search" name="search" id="search">
                <div class="btn">
                    <button type="submit" id="search" class="button">Search</button>
                </div>
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
                    <div class="home"><a href="home">Home</a></div>
                    <div class="services"><a href="Services.html">Services</a></div>
                    <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>

                    <div class="search">
                        <input type="search" name="search" id="search">
                        <div class="btn">
                            <button type="submit" id="search" class="button">Search</button>
                        </div>
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

        <form class="form" action = "resident_form.php" method="post">
            <div class="create-account">
                <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
            </div>
        <!-- section for First and Last name -->
            <div id="formControl" class="fullname container">
                <div class="div_mobile_space">
                    <div>
                        <label for="first_name" name="first_name_l" class="first_name">First Name</label>
                    </div>
                    <input type="text" name="first_name" id="first_name" placeholder="Enter First name"/>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="last_name" name="last_name_l" class="last_name">Last Name</label>
                    </div>
                    <input type="text" name="last_name" id="last_name" placeholder="Enter Last name"/>
                </div>
            </div>

            <div id="formControl" class="email container">
                <div class="div_mobile_space">
                    <div>
                        <label for="email" class="email">Email</label>
                    </div>
                    <input type="email" name="email" id="email" placeholder="Enter Email"/>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_email" class="Reconfirm_email">Reconfirm Email</label>
                    </div>
                    <input type="email" name="Reconfirm_email" id="Reconfirm_email" placeholder="Reconfirm Email"/>
                </div>
            </div>

            <div id="formControl" class="password_container container">
                <div class="div_mobile_space">
                    <div>
                        <label for="password" class="password">Password</label>
                    </div>
                    <input type="password" name="password" id="password"/>
                </div>

                <div class="div_mobile_space">
                    <div>
                        <label for="Reconfirm_password" class="Reconfirm_password">Reconfirm Password</label>
                    </div>
                    <input type="password" name="Reconfirm_password" id="Reconfirm_password" placeholder="Reconfirm Password"/>
                </div>
            </div>

            <div id="formControl" class="location_age container">
                <div class="div_mobile_space">
                    <div>
                        <label for="location" class="location_l">Location</label>
                    </div>
                    <input type="text" name="location" id="location" placeholder="Enter your location">
                </div>

                <div class="age_group div_mobile_space">
                    <div>
                        <label for="age">Age</label>
                    </div>
                    <input type="number" name="age" id="age" placeholder="Enter your age">
                    <!--<select id="age_group" name="age_group">
                        <option value="">Select Age Group</option>
                        <option value="18-25">18-25</option>
                        <option value="26-35">26-35</option>
                        <option value="36-45">36-45</option>
                    </select> -->
                </div>
            </div>

            <!-- Section for environmental interest and gender-->
            <div id="formControl" class="environ_gender container">
                <div class="environmental_interest_section">
                    <div class="div_mobile_space">
                        <label for="Environmental Interest">Environmental interest</label>
                        <span id="environmental_interest_icon"><i class='bx bx-chevron-down' id="environmental_interest_arrowdown"></i></span>
                        <span id="environmental_interest_arrowup"><i class='bx bx-chevron-up'></i></span>
                    </div>

                    <div class="environmental_interest_visibility" id="environmental_interest_visibility">
                        <div class="environmental_interest">
                            <span>Renewable Energy <input type="checkbox" name="renewable_energy" id="renewable_energy"></span>
                            <span>Waste Reduction <input type="checkbox" name="waste_reduction" id="waste_reduction"></span>
                            <span>Energy Efficiency <input type="checkbox" name="energy_efficiency" id="energy_efficiency"></span>
                            <span>Transportation <input type="checkbox" name="transportation" id="transportation"></span>
                            <span>Waste Reduction <input type="checkbox" name="waste_reduction" id="waste_reduction"></span>
                        </div>
                    </div>
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
                </div>
            </div>

            <div class="btn">
                <button type="submit" id="submit" class="button">Submit</button>
            </div>
        </form>
    </main>

    <script src="resident.js"></script>
  </body>
</html>
