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
        $company_id = $_GET['Company_id'];

        if (isset($_GET['Company_id'])) {

            $sql = "SELECT * FROM Company WHERE Company_id = '$company_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();    ?>
                <form action="update_company_backend.php?Company_id=<?php echo $row['Company_id']; ?>" method="POST">

                    <!--Section to display Success message-->
                    <p id="success_messagebox" class="success_messagebox"></p>

                    <!-- Company ID -->
                    <div class="div_mobile_space">
                        <div>

                        </div>

                        <input type="hidden" name="Company_id" value="<?php echo $row['Company_id']; ?>">
                    </div>

                    <!-- Company name Email -->
                    <div id="formControl" class="fullname container">
                        <!--  Name -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="company_name">Company Name:</label>
                            </div>
                            <input type="text" name="Company_name" id="company_name" value="<?php echo $row['Company_name']; ?>">
                        </div>

                        <!-- Email Input -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="email">Email:</label>
                            </div>
                            <input type="text" name="Email" id="email" value="<?php echo $row['Email']; ?>">
                        </div>
                    </div>

                    <!-- Product/Service and Password -->
                    <div id="formControl" class="email container">
                        <!-- Product/Services -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="product_services">Product/Service:</label>
                            </div>
                            <input type="text" name="Product_Services" id="product_services" value="<?php echo $row['Product_Services']; ?>">
                        </div>

                        <!-- Password -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="password">Password:</label>
                            </div>
                            <input type="password" name="Password" id="password" value="<?php echo $row['Password']; ?>">
                        </div>
                    </div>

                    <!-- Phone Number -->
                    <div id="formControl" class="password_container container">
                        <!-- Password Input -->
                        <div class="div_mobile_space">
                            <div>
                                <label for="phone_number">Phone Number:</label>
                            </div>
                            <input type="number" name="Phone_number" id="phone_number" value="<?php echo $row['Phone_number']; ?>">
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