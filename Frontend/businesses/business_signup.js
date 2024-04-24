// Code for Form validation
function validateForm(){
  // Regular expression for email validation
  var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/;

  // Regular expression for password validation
  const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Z][A-Za-z\d@$!%*?&]{6,}[!@#$%^&*]$/;

  // Get values from input fields
  const company_name = document.getElementById("company_name").value;
  const phone_no = document.getElementById("phone_no").value;
  const email = document.getElementById("email").value;
  const Reconfirm_email = document.getElementById("Reconfirm_email").value;
  const password = document.getElementById("password").value;
  const product_service = document.getElementById("product_service").value;
  const Reconfirm_password = document.getElementById("Reconfirm_password").value;

  // Validate Company name
  if (company_name == "") {
    document.getElementById("company_name").focus();
    document.getElementById("company_nameerrorBox").innerHTML = "Enter company name";
    return false;
  } else {
    document.getElementById("company_nameerrorBox").innerHTML = "";
  }

  // Validate mobile
  if (phone_no.trim() == "") {
    document.getElementById("phone_no").focus();
    document.getElementById("phone_noerrorBox").innerHTML = "Enter mobile name";
    return false;
  }else {
    document.getElementById("phone_noerrorBox").innerHTML = "";
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
  }else {
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
  }else {
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

  // Validate Reconfirm password
  if (Reconfirm_password.trim() == "") {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML =
      "Re-enter Password";
    return false;
  } else if (Reconfirm_password != password) {
    document.getElementById("Reconfirm_password").focus();
    document.getElementById("Reconfirm_passworderrorBox").innerHTML =
      "Passwords are not matching, re-enter again";
    return false;
  }else {
    document.getElementById("Reconfirm_passworderrorBox").innerHTML = "";
  }

  // Validate Product
  if (product_service.trim() == "") {
    document.getElementById("product_service").focus();
    document.getElementById("product_serviceerrorBox").innerHTML = "Enter location";
    return false;
  } 
  else {
    document.getElementById("product_serviceerrorBox").innerHTML = "";
  }

  // If all fields are filled, display success message
  if (
    company_name != "" &&
    phone_no != "" &&
    email != "" &&
    Reconfirm_email != "" &&
    password != "" &&
    product_service != "" &&
    // age != "" &&
    Reconfirm_password != ""
  ) {
    document.getElementById("success_messagebox").innerHTML =
      "Form submitted successfully";
  }
  return true; // Allow for submission
}