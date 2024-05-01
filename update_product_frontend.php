<?php
// **Require database connection functions:**
// **Establish database connection:**
// **Extract company ID from URL parameter:**
// - Check if 'Company_id' exists in the URL using isset().
// - If not set, display an error message.
// **Process company update request (if company ID is provided):**
// **Construct SQL select query:**
// **Execute select query:**
// **Handle query result:**
// **Display update form pre-populated with company data:**
//require_once('admin_access_control.php');
require_once('database.php');
require_once('nav.php');

$product_id = isset($_GET['Product_id']);

if (isset($_GET['Product_id'])) {

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resident</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../Frontend/public/resident.css">
</head>

<body>
    <!--Section for nav bar-->
  
    <main class="container_fluid">
        <!-- Background changer-->
        <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon'></i></button>
        </div>


        <?php
       $conn = db_connect();
        $product_id = $_GET['Product_id'];

        $sql = "SELECT * FROM Products_services WHERE Product_id = $product_id";
            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        ?>

                <form action="update_product_backend.php?Product_id=<?php echo $row['Company_id']; ?>" method="POST">
                    <input type="hidden" name="product_id" value="<?php echo $row['Product_id']; ?>">
                    <input type="hidden" name="company_id" value="<?php echo $row['Company_id']; ?>">

                    <!--Section to display Success message-->
                    <p id="success_messagebox" class="success_messagebox"></p>

                    <!-- Product name and description -->
                    <div id="formControl" class="fullname container">
                    <div class="product container">
                        <div class="div_mobile_space">
                            <label for="product_name">Product Name</label>
                        </div>

                        <input type="text" name="product_name" id="product_name" value="<?php echo $row['Product_name']; ?>">
                    </div>

                    <div class="div_mobile_space">
                            
                        <div>
                            <label for="description">Description</label>
                        </div>
                        <input type="text" name="description" id="description" value="<?php echo $row['Description']; ?>">
                            </div>
                    </div>

                    <!-- Price and Size -->
                    <div id="formControl" class="fullname container">
                        <!--  Size -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="size">Size:</label>
                            </div>
                            <input type="text" name="size" id="size" value="<?php echo $row['Size']; ?>">
                        </div>

                        <!-- Price -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="price">Price</label>
                            </div>
                            <input type="number" name="price" id="price" value="<?php echo $row['Price']; ?>">
                        </div>
                    </div>

                    <!-- Environmental Benefits -->
                    <div id="formControl" class="email container">
                        <!-- Product/Services -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="environmental_benefits">Environmental Benefits</label>
                            </div>
                            <input type="text" name="environmental_benefits" id="environmental_benefits" value="<?php echo $row['Environmental_benefits']; ?>">
                        </div>

                        <!-- Password -->
                        <div class="div_mobile_space">
                            <div>
                                
                            </div>
                            
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <center>
                        <div style="text-align: center;" class="btn residentSignupbtn">
                            <button class="button" type="submit" name="Submit">Update</button>
                        </div>
                    </center>
                </form>
            
    </main>
        

    <!--Section for footer-->
    <?php
require_once('footer.php');
?>

</body>

</html>
            
<?php
 
}
}

