// Code for Form validation
function validateForm() {
  // Get values from input fields
  const product_name = document.getElementById("product_name").value;
  const company_name = document.getElementById('company_name').value;
  const product_description = document.getElementById("product_description").value;
  const price = document.getElementById("price").value;
  const environmental_benefits = document.getElementById("environmental_benefits").value;
  const size = document.getElementById("size").value;

  // Validate Product name
  if (product_name == "") {
    document.getElementById("product_name").focus();
    document.getElementById("product_nameerrorBox").innerHTML =
      "Enter product name";
    return false;
  } else {
    document.getElementById("product_nameerrorBox").innerHTML = "";
  }

  // Validate Company name
  if (company_name == "") {
    document.getElementById("company_name").focus();
    document.getElementById("company_nameerrorBox").innerHTML =
      "Enter company name";
    return false;
  } else {
    document.getElementById("company_nameerrorBox").innerHTML = "";
  }

  // Validate product description
  if (product_description.trim() == "") {
    document.getElementById("product_description").focus();
    document.getElementById("product_descriptionerrorBox").innerHTML = "Enter product description";
    return false;
  } else {
    document.getElementById("product_descriptionerrorBox").innerHTML = "";
  }

  // Validate environmental benefits
  if (environmental_benefits.trim() == "") {
    document.getElementById("environmental_benefits").focus();
    document.getElementById("environmental_benefitserrorBox").innerHTML = "Enter environmental benefits";
    return false;
  } else {
    document.getElementById("environmental_benefitserrorBox").innerHTML = "";
  }

   // Validate size
   if (size.trim() == "") {
    document.getElementById("size").focus();
    document.getElementById("sizeerrorBox").innerHTML =
      "Enter product size";
    return false;
  } else {
    document.getElementById("sizeerrorBox").innerHTML = "";
  }

  // Validate price
  if (price.trim() == 0) {
    document.getElementById("price").focus();
    document.getElementById("priceerrorBox").innerHTML = "Enter price";
    return false;
  } else {
    document.getElementById("priceerrorBox").innerHTML = "";
  }

  // If all fields are filled, display success message
  if (product_name != "" && company_name != "" && product_description != "" && price != "" && environmental_benefits != "" && size != "") {
    document.getElementById("success_messagebox").innerHTML =
      "Form submitted successfully";
  }
  return true; // Allow for submission
}
