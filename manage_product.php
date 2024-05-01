<?php
// **Require database connection functions:**
// **Establish database connection:**
//require_once('admin_access_control.php');
//require_once('admin_access_control.php');
require_once('database.php');
require_once('nav.php');
$conn = db_connect();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet"/>
    <link rel="stylesheet" href="Frontend/public/resident.css">
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="Frontend/public/dashboard.css">

</head>

<body>
  
     <!--Section for nav bar-->
  
    </main>
        <!-- Page loader -->
        <!-- <div class="page-loader">
            <div></div>
            <div></div>
            <div></div>
        </div> -->

        <!-- Mini nav bar -->
        <div class="userLogin">
            <div class="logon">
                <p>
                    <i class='bx bx-user'></i><span class="username" id="username"> </span>
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

        <!-- Dashboard -->
        <div style="display: flex; justify-content: space-around; margin-top: 50px; margin-bottom: 50px;">
            <h4><span class="material-icons-sharp dashboard_icon"> grid_view </span>Manage Products</h4>
        </div>

            

        <div class="container_fluid dashboard_container">
            <div class="side_dashboard_container">   
                <div id="sideNav" class="side_dashboard">
                    <h4><span class="material-icons-sharp dashboard_icon side_dashboard_icon"> grid_view </span> Dashboard</h4>
                </div>

                <div class="dashboard_items">
                    <div id="manage_residents" class="manage_residents dashboard_option" data-table="display_residents"><a href="manage_resident.php">Manage Residents</a></div>

                    <div id="manage_company" class="manage_company dashboard_option" data-table="display_company"><a href="manage_company.php">Manage Company</a></div>

                    <div id="manage_products" class="manage_products dashboard_option" data-table="display_products"><a href="#">Manage Products</a></div>

                    <div id="manage_areas" class="manage_areas dashboard_option" data-table="display_areas"><a href="manage_area.php">Manage Areas</a></div>
                </div>
            </div>

            <!-- Resident table -->
            <table id="display_residents" class="display_residents dashboard_table">
                <thead>
                    <tr>
                    <td colspan="8">
                        <p align="lef"> <a href="products.php"> Add Products</a> </p>
                    </td>
                    </tr>
                    <tr>
                        <th width="">Product_id:</th>
                        <th width="">Company_id:</th>
                        <th width="">Product_name:</th>
                        <th width="">Description:</th>
                        <th width="">Size</th>
                        <th width="">Environmental_benefits:</th>
                        <th width="">Price</th>
                        <th width="">Price_Category</th>
                        <th width="">Manage</th>
                    </tr>
                </thead>

                <?php
        $sql_query = "SELECT * FROM Products_services";
        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                
                    <tr>
                        <td><?php echo $row['Product_id']; ?>
                        <td><?php echo $row['Company_id']; ?>
                        <td><?php echo $row['Product_name']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Size']; ?></td>
                        <td><?php echo $row['Environmental_benefits']; ?></td>
                        <td><?php echo $row['Price']; ?></td>
                        <td><?php echo $row['Price_category']; ?></td>

                        <td class="table_btn">
                            <td width="50px">
                                <a href="update_product_frontend.php?Product_id=<?php echo $row['Product_id'];?>"><i name="" class='bx bxs-edit-alt btn_update'></i></a>

                                <a href="delete_product.php?Product_id=<?php echo $row['Product_id'];?>"><span class="material-symbols-outlined btn_delete">delete</span></a></td>
                            </td>
                    </tr>
                     <?php }
                } ?>
            </table>
        </div>
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