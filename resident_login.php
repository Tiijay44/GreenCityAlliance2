<?php
session_start();
require_once('nav.php');
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
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="Frontend/public/resident_login.css">
    <link rel="stylesheet" href="Frontend/Resident/resident.css">
    <link rel="stylesheet" href="Frontend/public/business_login.css">

</head>
<body>

    <!--Section for nav bar-->
 
         <!-- Mini nav bar -->
         <div class="userLogin">
            <div class="logon">
                <p>
                    <i class='bx bx-user'></i>
                    <span><i class='bx bx-chevron-down arrow_down' id="user_icon"></i></span>
                </p>
                <div id="displayUserAdd" class="user_dispay">
                    <p id="business_signup"><a href="resident.php"><span class="material-symbols-outlined">add_business</span> User Sign up ?</a></p>
                    <p id="business_login"><a href="resident_login.php"><span class="material-symbols-outlined">login</span> User sign in ?</a></p>
                    <p id="admin_login"><a href="admin_login_frontend.php"> <span class="material-symbols-outlined">login</span> Admin Login</a></p>
                </div>
            </div>
        </div>

        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>
        
        <form class="form" action="vote_login.php?$_SESSION['name']" method="POST" onsubmit="return validateForm()">
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
                <p>Don't have an account? <span><a href="resident.php"> Sign up</a></span></p>
            </div>
        </form>
    </main>

     <!--Section for footer-->
     <?php
require_once('footer.php');
?>

    <script src="Frontend/Resident/resident.js"></script>
    <script src="Frontend/mainpages/index.js"></script>
    <!-- <script src="../Frontend/admin/dashboard.js"></script> -->
    <script>
        //  $(".page-loader").removeClass("fade-out");
        // $(".page-loader").addClass("loader-fade-in");
    </script>
</body>
</html>

