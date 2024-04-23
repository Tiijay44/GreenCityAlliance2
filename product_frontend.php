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
    <link rel="stylesheet" href="product_css.css" />
  </head>
  <body>
    <!--Section for nav bar-->
    <nav class="desktop_nav">
      <!--Navbar for Destok view-->
      <div class="navbar">
        <div class="logo">LOGO</div>

        <div class="items">
          <div class="home"><a href="home">Home</a></div>
          <div class="services"><a href="Services.html">Services</a></div>
          <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>
        </div>

        <div class="search">
          <input type="search" name="search" id="search" />
          <form id="desktop_navForm" class="btn" action="" method="">
            <button type="submit" id="search" class="button">Search</button>
          </form>
        </div>
      </div>
    </nav>

    <!-- Nav bar fof mobile view-->
    <nav class="mobile_nav">
      <div class="navbar_mobile">
        <div class="logo">LOGO</div>

        <div>
          <div id="items_menu">
            <i class="bx bx-menu" id="menu_icon" style="font-size: 23px"></i>
          </div>

          <div class="items_mobile" id="items_mobile">
            <div class="home"><a href="home">Home</a></div>
            <div class="services"><a href="Services.html">Services</a></div>
            <div class="aboutUs.html"><a href="aboutUs.html">About Us</a></div>

            <div class="search">
              <input type="search" name="search" id="search" />
              <form id="mobile_navForm" class="btn" action="" method="">
                <button type="submit" id="search" class="button">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!--End of nav bar-->

    <main>
      <!-- Background changer-->
      <div class="container-fluid backgroundChanger">
        <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
      </div>

      <form class="form" id="myForm" action="products_form.php" method="post">
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
                Name</label
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
              rows="1"
              style="resize: vertical;" placeholder="Enter product description"
            ></textarea>
            <p id="product_descriptionerrorBox" class="errorBox"></p>
          </div>
        </div>

        <!-- Section for Price and environmental benefits-->
        <div id="formControl" class="location_age container price">
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

          <div class="age_group div_mobile_space environmental_benefits">
            <div>
              <label for="environmental_benefits">environmental Benefits</label>
            </div>
            <textarea
              name="environmental_benefits"
              id="environmental_benefits"
              cols="23"
              rows="1"
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
            
            <div class="emptycontainer">

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
            <button type="submit" onclick="Submit()" id="submit" class="button">Submit</button>
        </div>
      </form>
    </main>

    <!--Section for footer-->
    <footer>
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
            <a href=""><span><i class='bx bxl-instagram-alt' ></i><span></a>
          </div>
        </div>
      </div>
      </footer>

    <script src="../Resident/resident.js"></script>
    <script src="product.js"></script>
  </body>
</html>
