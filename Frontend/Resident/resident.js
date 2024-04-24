// Code to toggle navbar menu items
document.addEventListener("DOMContentLoaded", function () {
  const menuIcon = document.getElementById("menu_icon");
  const itemsMobile = document.getElementById("items_mobile");

  if (menuIcon && itemsMobile) {
    menuIcon.addEventListener("click", function () {
      if (itemsMobile.style.display === "block") {
        itemsMobile.style.display = "none";
      } else {
        itemsMobile.style.display = "block";
        itemsMobile.style.maxHeight = "300px";
      }
    });
  }
});

//////////////////////////////////////////////////////////////

// Code to toggle Environmental interest
const envInterestDropdown = document.getElementById(
  "environmental_interest_icon"
);
const envInterestvisibility = document.getElementById(
  "environmental_interest_visibility"
);

if (envInterestDropdown && envInterestvisibility) {
  envInterestDropdown.addEventListener("click", () => {
    // checks if environmental items are visible and sets it to hidden otherwise set it to visible
    if (envInterestvisibility.style.display === "block") {
      envInterestvisibility.style.display = "none";
    } else {
      envInterestvisibility.style.display = "block";
      document.getElementById(
        "environmental_interest_arrowdown"
      ).style.display = "bloc";
      document.getElementById("environmental_interest_arrowup").style.display =
        "none";
    }
  });
}

/////////////////////////////////////////////////////////////////

// code for Black & White background
const background = document.querySelector("#background");
const footer = document.getElementById("footer");

background.addEventListener("click", () => {
  const navItems = document.querySelectorAll('navItems')
  const menuIcon = document.getElementById('menu_icon')
  const body = document.body;
  if (body.classList.contains("darkMode")) {
    body.classList.remove("darkMode");
    body.classList.add("whiteMode");
    footer.classList.remove("footerdarkMode");

    background.innerHTML = "<i class='bx bxs-moon whiteBackground'></i>";
  } else {
    body.classList.remove("whiteMode");
    body.classList.add("darkMode");
    footer.classList.add("footerdarkMode");
    menuIcon.style.color = "black";
    navItems.style.color = "black";
    background.innerHTML = "<i class='bx bxs-sun'>";
    // document.getElementsByTagName('footer').style.display = 'none'
  }
});


//////////////////////////////////////////////////////////////

// declaration
const form = document.getElementById("myForm");
// const desktopNavForm = document.getElementById('desktop_navForm');
// const mobileNavForm = document.getElementById('mobile_navForm');

// Prevent mobile Nav bar forms from
// mobileNavForm.addEventListener('click', ()=>{
//   event.preventDefault(); // Prevent form submission
// })

// // Prevent desktop Nav bar forms from
// desktopNavForm.addEventListener('click', ()=>{
//   event.preventDefault(); // Prevent form submission
// })



// Prevent form submission
// form.addEventListener("submit", function(event) {
//   event.preventDefault(); 
  
//   // Validate form
//   if (validateForm()) {
//       form.submit(); // Submit form if validation passes
//   }
// });

// Code for Form validation
function validateForm(){
  // Regular expression for email validation
  var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

  // Regular expression for password validation
  const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Z][A-Za-z\d@$!%*?&]{6,}[!@#$%^&*]$/;


  // Get values from input fields
  const first_name = document.getElementById("first_name").value;
  const last_name = document.getElementById("last_name").value;
  const email = document.getElementById("email").value;
  const Reconfirm_email = document.getElementById("Reconfirm_email").value;
  const password = document.getElementById("password").value;
  const location = document.getElementById("location").value;
  const age = document.getElementById("age").value;
  const Reconfirm_password =
    document.getElementById("Reconfirm_password").value;

  // Validate first name
  if (first_name == "") {
    document.getElementById("first_name").focus();
    document.getElementById("firstNameerrorBox").innerHTML = "Enter first name";
    return false;
  } else {
    document.getElementById("firstNameerrorBox").innerHTML = "";
  }

  // Validate last name
  if (last_name.trim() == "") {
    document.getElementById("last_name").focus();
    document.getElementById("lastNameerrorBox").innerHTML = "Enter last name";
    return false;
  } else {
    document.getElementById("lastNameerrorBox").innerHTML = "";
  }

  // Validate email
  if (email.trim() == "") {
    document.getElementById("email").focus();
    document.getElementById("emailerrorBox").innerHTML = "Enter an email";
    return false;
  } else if (!emailRegex.test(email)) {
    document.getElementById("email").focus();
    document.getElementById("emailerrorBox").innerHTML = "Enter a valid email";
    return false;
  } else {
    document.getElementById("emailerrorBox").innerHTML = "";
  }

  // Validate Reconfirm email
  if (Reconfirm_email.trim() == "") {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Re-enter email";
    return false;
  } else if (!emailRegex.test(Reconfirm_email)) {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Re-enter a valid email";
    return false;
  }

  // Validate matching emails
  if (Reconfirm_email != email) {
    document.getElementById("Reconfirm_email").focus();
    document.getElementById("Reconfirm_emailerrorBox").innerHTML =
      "Emails are not matching, re-enter again";
    return false;
  } else {
    document.getElementById("Reconfirm_emailerrorBox").innerHTML = "";
  }

  // Validate password
  if (password.trim() == "") {
    document.getElementById("password").focus();
    document.getElementById("passworderrorBox").innerHTML = "Enter password";
    return false;
  }else if (!passwordRegex.test(password)){
    document.getElementById("password").focus();
    document.getElementById("passworderrorBox").innerHTML = "Password length must be above eight characters";
    return false;
  } else {
    document.getElementById("passworderrorBox").innerHTML = "";
  }

  // Validate reconfirm password
  if (Reconfirm_password.trim() == "") {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML =
      "Re-enter Password";
    return false;
  }
  // else if (!passwordRegex.test(Reconfirm_password)){
  //   document.getElementById("Reconfirm_password").focus();
  //   document.getElementById("Reconfirm_passworderrorBox").innerHTML = 'Re-enter a valid password';
  //   return false;
  // }
  
  // Validate matching password
  if (Reconfirm_password != password) {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML = "Passwords are not matching, re-enter again";
    return false;
  } else {
    document.getElementById("Reconfirm_passworderrorBox").innerHTML = "";
  }

  // Validate location
  if (location.trim() == "") {
    document.getElementById("location").focus();
    document.getElementById("locationerrorBox").innerHTML = "Enter location";
    return false;
  } else {
    document.getElementById("locationerrorBox").innerHTML = "";
  }

  // Validate age
  if (age.trim() == 0) {
    document.getElementById("age").focus();
    document.getElementById("ageerrorBox").innerHTML = "Enter age";
    return false;
  } else {
    document.getElementById("ageerrorBox").innerHTML = "";
  }

  // Checkboxes validation for environmental interest
  var checkboxes = document.querySelectorAll('input[name="interest"]');
  var checkedCount = 0;
  checkboxes.forEach(function (checkbox) {
    if (checkbox.checked) {
      checkedCount++;
    }
  });
  if (checkedCount === 0) {
    document.getElementById("interesterrorBox").innerHTML =
      "Select at least one environmental interest";
    return false;
  } else {
    document.getElementById("interesterrorBox").innerHTML = "";
  }

  // // Radio button validation for gender
  // if (document.form.radiobutton[0].checked == false &&
  //   document.form.radiobutton[1].checked == false &&
  //   document.form.radiobutton[2].checked == false) {
  //   document.getElementById("gendererrorBox").innerHTML = "Select gender";
  //   return false;
  // }

  // Radio button validation for gender
  const genderRadioButtons = document.querySelectorAll('input[name="gender"]');
  let isGenderSelected = false;
  genderRadioButtons.forEach(function (radioButton) {
    if (radioButton.checked) {
      isGenderSelected = true;
    }
  });
  if (!isGenderSelected) {
    document.getElementById("gendererrorBox").innerHTML = "Select gender";
    return false;
  } else {
    document.getElementById("gendererrorBox").innerHTML = "";
  }

  // If all fields are filled, display success message
  if (
    first_name != "" &&
    last_name != "" &&
    email != "" &&
    Reconfirm_email != "" &&
    password != "" &&
    location != "" &&
    age != "" &&
    Reconfirm_password != ""
  ) {
    document.getElementById("success_messagebox").innerHTML =
      "Form submitted successfully";
  }
  return true; // Allow for submission  
}
