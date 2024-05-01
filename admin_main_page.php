
<?php 
session_start();

if (isset($_SESSION['name'])) {
    // Session is active, user is logged in
    echo "Welcome back,  " . $_SESSION['name'];
    // You can access other session variables here (if set)
  } else {
    // Session is not active, user is not logged in
    echo "You are not logged in.";
    // Redirect to login page or display a login form
  }
?>
    <?php
// **Require database connection functions:**
// **Establish database connection:**
//require_once('admin_access_control.php');
//require_once('admin_access_control.php');
require_once('database.php');
require('nav.php');
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
                    <!-- <p id="business_signup"><a href="../Resident/resident.html"><span class="material-symbols-outlined">add_business</span> User Sign up ?</a></p>
                    <p id="business_login"><a href="../Resident/resident_login.html"><span class="material-symbols-outlined">login</span> User sign in ?</a></p> -->
                    <p id="admin_login"><a href="index.php">Sign out</a></p>
                </div>
            </div>
        </div>

         <!-- Background changer-->
         <div class="container-fluid backgroundChanger">
            <button id="background" type="button"><i class='backgroundNew bx bxs-moon' ></i></button>
        </div>

        <!-- Dashboard -->
        <div style="display: flex; justify-content: space-around; margin-top: 50px; margin-bottom: 50px;">
            <h4><span class="material-icons-sharp dashboard_icon"> grid_view </span> Manage Residents</h4>
        </div>

        <div class="side_dashboard_container">   
                <div id="sideNav" class="side_dashboard">
                    <h4><span class="material-icons-sharp dashboard_icon side_dashboard_icon"> grid_view </span> Dashboard</h4>
                </div>

                <div class="dashboard_items">
                    <div id="manage_residents" class="manage_residents dashboard_option" data-table="display_residents"><a href="">Manage Residents</a></div>

                    <div id="manage_company" class="manage_company dashboard_option" data-table="display_company"><a href="manage_company.php">Manage Company</a></div>

                    <div id="manage_products" class="manage_products dashboard_option" data-table="display_products"><a href="manage_product.php">Manage Products</a></div>

                    <div id="manage_areas" class="manage_areas dashboard_option" data-table="display_areas"><a href="manage_area.php">Manage Areas</a></div>
                </div>
            </div>

        <div class="container_fluid dashboard_container">
            

            <!-- Resident table -->
            <table id="display_residents" class="display_residents dashboard_table">
                <thead>
                    <tr>
                        <td colspan="8">
                            <p align="lef"> <a href="../Frontend/Resident/resident.html"> Add Resident </a> </p>
                        </td>
                    </tr>
                    <tr>
                        <th width="">Resident_id:</th>
                        <th width="">FirstName:</th>
                        <th width="">LastName:</th>
                        <th width="">Email</th>
                        <th width="">Age:</th>
                        <th width="">Password</th>
                        <th width="">Gender</th>
                        <th width="">Location</th>
                        <th width="">Environmental_interests</th>
                        <th width="">Action</th>
                    </tr>
                </thead>

                <?php
        $sql_query = "SELECT * FROM Resident";
        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                
                    <tr>
                        <td width="50px"><?php echo $row['Resident_id']; ?>
                        </td>
                        <td width="50px"><?php echo $row['FirstName']; ?></td>
                        <td width="50px"><?php echo $row['LastName']; ?></td>
                        <td width="50px"><?php echo $row['Email']; ?></td>
                        <td width="50px"><?php echo $row['AGE']; ?></td>
                        <td width="50px"><?php echo $row['Password']; ?></td>
                        <td width="50px"><?php echo $row['Gender']; ?></td>
                        <td width="50px"><?php echo $row['Location']; ?></td>
                        <td width="50px"><?php echo $row['Environmental_interests']; ?></td>
                        <td class="table_btn">
                            <td width="50px"><a id="btn_update" class="btn_update" href="update_resident_frontend.php?Resident_id=<?php echo $row['Resident_id']; ?>">
                            <i name="" class='bx bxs-edit-alt'></i></a>
                            <a id="btn_delete" href="delete_resident.php? Resident_id=<?php echo $row['Resident_id']; ?>">
                            <span class="material-symbols-outlined btn_delete">
                                    delete
                                    </span></a></td>
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