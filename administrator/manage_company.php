<head>
  <title>Product Search</title>
  <link rel="stylesheet" href="manage_company_css.css">
</head>


<?php
// Manage existing companies
//require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();
?>


<h3>Manage Company</h3>
<table width="402" border="1">
    <tbody>
        <tr>
            <td colspan="8">
                <p align="left"> <a href="../company_frontend.php"> Add Company</a> </p>
            </td>
        </tr>
        <tr>
            <td width="18">Company_id:</td>
            <td width="18">Company_name:</td>
            <td width="380">Email:</td>
            <td width="150">Password</td>
            <td width="109">Phone_number:</td>
            <td width="91">Product_Services</td>
            <td width="91">Manage</td>
        </tr>

        <?php
        $sql_query = "SELECT * FROM Company";
        $result = $conn->query($sql_query);

        if ($result->num_rows >= 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['Company_id']; ?></td>
                    <td><?php echo $row['Company_name']; ?></td>

                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['Password']; ?></td>

                    <td><?php echo $row['Phone_number']; ?></td>
                    <td><?php echo $row['Product_Services']; ?></td>

                    <td><a href="update_company_frontend.php?Company_id=<?php echo $row['Company_id']; ?>">
                            Update</a>/<a href="delete_company.php?Company_id=<?php echo $row['Company_id']; ?>">
                            Delete</a></td>
                </tr> <?php }
                } ?>