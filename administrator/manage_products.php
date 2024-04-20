<?php
require_once('admin_access_control');
require_once('database.php');
?>

<h3>Manage Products</h3>
<table width="402" border="1">
<tbody>
<tr>
<td colspan="8">
<p align="lef"> <a href="products_form.php"> Add Student</a> </p>
</td>
</tr>
<tr>
<td width="18">Product_id:</td>
<td width="18">Company_id:</td>
<td width="18">Product_name:</td>
<td width="380">Description:</td>
<td width="150">Size</td>
<td width="109">Environmental_benefits:</td>
<td width="91">Price</td>
<td width="91">Price_Category</td>
<td width="91">Manage</td>
</tr>

<?php
$sql_query= "SELECT * FROM Products_services";
$result= $conn->query($sql_query);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['Product_id']; ?> </td> <td><?php echo $row['Company_id']; ?></td>
<td><?php echo $row['Product_name']; ?></td> <td><?php echo $row['Description']; ?></td>
 <td><?php echo $row['Size']; ?></td>
<td><?php echo $row['Environmental_benefits']; ?></td>
<td><?php echo $row['Price']; ?></td>
<td><?php echo $row['Price_category']; ?></td>
<td><a href="student_update.php? Product_id = <?php echo $row['Product_id']; ?>">
update</a>/<a href = "student_delete.php? Product_id = <?php echo $row['Product_id']; ?>">
Delete</a></td> </tr> <?php } } ?>