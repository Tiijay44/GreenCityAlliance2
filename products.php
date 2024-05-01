<?php
require_once('nav.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>products</title>
    <link rel="stylesheet" href="../Resident/resident.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="/products_services/products.css" />
  </head>
  <body>
    <!--Section for nav bar-->
  
    <main>
      <!-- Background changer-->
      <div class="container-fluid backgroundChanger">
        <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
      </div>

      <form class="form" id="myForm" action="products_form.php" method="POST" onsubmit="return validateForm()">
        <div class="create-account">
          <p><b>Create Account &nbsp;</b><span>Now to Green Alliance?</span></p>
        </div>

        <!--Section to display Success message-->
        <p id="success_messagebox" class="success_messagebox"></p>

        <!-- section for product name and product description -->
        <div id="formControl" class="fullname container">
          <div class="div_mobile_space product_name">
            <div>
              <label for="product_name" class="first_name product_name">
               Product Name</label
              >
            </div>
            <input
              type="text"
              name="product_name"
              id="product_name"
              placeholder="Enter product name"
            />
            <p id="product_nameerrorBox" class="errorBox"></p>
          </div>

          <div class="div_mobile_space product_name">
            <div>
              <label for="company_name" class="company_name company_name">
               Company Name</label
              >
            </div>
            <input
              type="text"
              name="company_name"
              id="company_name"
              placeholder="Enter company name"
            />
            <p id="company_nameerrorBox" class="errorBox"></p>
          </div>

        </div>

        <!-- Section for Price and environmental benefits-->
        <div id="formControl" class="location_age container price">
          <div class="div_mobile_space product_description">
            <div>
              <label
                for="product_description"
                class="last_name product_description"
                >Product Description</label
              >
            </div>
            <textarea
              name="product_description"
              id="product_description"
              cols="23"
              rows="2"
              style="resize: vertical;" placeholder="Enter product description"
            ></textarea>
            <p id="product_descriptionerrorBox" class="errorBox"></p>
          </div>

          <div class="age_group div_mobile_space environmental_benefits">
            <div>
              <label for="environmental_benefits">environmental Benefits</label>
            </div>
            <textarea
              name="environmental_benefits"
              id="environmental_benefits"
              cols="23"
              rows="2"
              style="resize: vertical;" placeholder="Enter environment benefits"
          ></textarea>
          <p id="environmental_benefitserrorBox" class="errorBox"></p>
          </div>
        </div>

         <!-- Section for Price and environmental benefits-->
         <div id="formControl" class="location_age container size_container">
            <div class="div_mobile_space size">
              <div>
                <label for="price" class="size_label">Size</label>
              </div>
              <input
                type="text"
                name="size"
                id="size"
                placeholder="eg. Small, Medium, Large"
              />
              <p id="sizeerrorBox" class="errorBox"></p>
              
            </div>
            
            <div class="div_mobile_space price">
              <div>
                <label for="price" class="price">Price</label>
              </div>
              <input
                type="number"
                name="price"
                id="price"
                placeholder="Enter price"
              />
              <p id="priceerrorBox" class="errorBox"></p>
            </div>
          </div>

        <!-- Section for product size and price category-->
        <!--<div id="formControl" class="environ_gender container product_size">
          <div class="environmental_interest_section">
            <div class="div_mobile_space">
              <label for="product_size">Size</label>
              <span id="environmental_interest_icon"
                ><i
                  class="bx bx-chevron-down"
                  id="environmental_interest_arrowdown"
                ></i
              ></span>
              <span id="environmental_interest_arrowup"
                ><i class="bx bx-chevron-up"></i
              ></span>
            </div>

            <div
              class="environmental_interest_visibility"
              id="environmental_interest_visibility"
            >
              <div class="environmental_interest">
                <span
                  >Large <input type="checkbox" name="large" id="large"
                /></span>
                <span
                  >Medium <input type="checkbox" name="medium" id="medium"
                /></span>
                <span
                  >Small <input type="checkbox" name="small" id="small"
                /></span>
              </div>
            </div>
          </div> -->

          <!--<div class="gender_section div_mobile_space">
            <div class="environmental_interest_section price_category">
              <div class="div_mobile_space">
                <label for="product_size">Price Category</label>
                <span id="price_category"
                  ><i
                    class="bx bx-chevron-down"
                    id="price_category_arrowdown"
                  ></i
                ></span>-->
                <!--<span class="environmental_interest_arrowup"
                  ><i class="bx bx-chevron-up"></i
                ></span>-->
              <!-- </div>

              <div
                id="price_category_visibility" class="price_category_visibility"
              >
                <div class="environmental_interest">
                  <span
                    >Affordable <input type="checkbox" name="large" id="large"
                  /></span>
                  <span
                    >Moderate <input type="checkbox" name="medium" id="medium"
                  /></span>
                  <span
                    >Premium <input type="checkbox" name="small" id="small"
                  /></span>
                </div>
              </div>
            </div>
          </div> -->
        </div>

        <div class="btn">
            <button type="submit" name="Submit" id="submit" class="button">Submit</button>
        </div>
      </form>
    </main>

    <!--Section for footer-->
    <?php
require_once('footer.php');
?>

    <script src="../Resident/resident.js"></script>
    <script src="product.js"></script>
  </body>
</html>
