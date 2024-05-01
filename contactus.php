<?php
require_once('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../public/resident.css">
    <link rel="stylesheet" href="../public/index.css">
    <link rel="stylesheet" href="../public/index.css">
</head>
<body>
      <!--Section for nav bar-->
   
    <main>
      <!-- Background changer-->
      <div class="container-fluid backgroundChanger">
        <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
    </div>

    <!-- Mini nav bar -->
    <div class="userLogin">
        <div class="logon">
            <p>
                <i class='bx bx-user user_icon' id=""></i>
                <span class="username" id="username">chile</span>
                <span><i id="user_icon" class='bx bx-chevron-down arrow_down'></i></span>
            </p>
            <div id="displayUserAdd" class="user_dispay">
                    <p id="user"></p>
                    <p id="login"><a href=""><i class='bx bx-log-out'></i> Sign out</a></p>
                    <p><a href="../Resident/resident_login.html"><i class='bx bx-log-in'></i> Sign in</a></p>
                    <p><a href="../businesses/business-login.html"><i class='bx bx-log-in'></i> Sign in business</a></p>
                    <p><a href="../businesses/business_signup.html"><span class="material-symbols-outlined">add_business</span> Register Business</a></p>
                    <!-- <p id="signUp">Sign Up</p> -->
            </div>
        </div>
    </div>

      <!-- Contact Us ////////////////////////////////////////////// -->
      <div class="contactUs">
        <h1>Contact Us</h1>
        <div class="container contactUsFlex">
          <div class="contactUsPartOne">
            <div class="generalInfo">
              <h3>General Information</h3>
            </div>
            <div class="contactUspara">
              <p>For office hours and location, or to speak with a director, <a href="">click here.</a> For general inquiries, please send us a message or use the contact information below. We look forward to hearing from you!</p>
            </div>
            <div class="contactUsDetails">
              <p class="firstPar">Toll Free: +2348034956084</p>
              <p class="firstPara"><a href="">chestermilli@gmail.com</a></p>
            </div>
          </div>

        <form action="" class="contactUsForm">
          <div class="lableName">
            <label for="name">Name</label>
          </div>
          <div class="input">
            <input type="text" id="name" placeholder="Enter FullName">
          </div> <br>

          <div class="labelEmail">
            <label for="email">Email</label>
          </div>
          <div class="input">
            <input type="email" name="email" id="email" placeholder="Enter Email Address">
          </div> <br>

          <div class="textArea">
           <textarea name="" id="textArea" cols="30" rows="10" placeholder="Enter your message"></textarea>
          </div> <br>

          <div class="btn">
            <button class="contactUsbtn button" type="button">Send Message</button>
          </div>
        </form>
        </div>
      </div>
      <hr class="container hrOne" style="color: rgba(51, 51, 51, 0.651);">
      <hr class="container hrTwo" style="color: white;">
    </main>

     <!--Section for footer-->
     <?php
require_once('footer.php');
?>
    <script src="../Resident/resident.js"></script>
    <script src="index.js"></script>
</body>
</html>