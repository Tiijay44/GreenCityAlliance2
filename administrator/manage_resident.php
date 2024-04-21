<?php
// Manage existing companies
require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();
?>


<h3>Manage Residents</h3>
<table width="402" border="1">
<tbody>
<tr>
<td colspan="8">
<p align="lef"> <a href="sme_form.php"> Add Company</a> </p>
</td>
</tr>
<tr>
<td width="18">Resident_id:</td>
<td width="18">FirstName:</td>
<td width="380">LastName:</td>
<td width="150">Email</td>
<td width="109">Age:</td>
<td width="91">Password</td>
<td width="91">Gender</td>
<td width="91">Location</td>
<td width="91">Environmental_interests</td>
<td width="91">Manage</td>
</tr>

<?php
$sql_query= "SELECT * FROM Resident";
$result= $conn->query($sql_query);

if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) { ?>
<tr>
<td><?php echo $row['Resident_id']; ?> </td> <td><?php echo $row['FirstName']; ?></td>
<td><?php echo $row['LastName']; ?></td> <td><?php echo $row['Email']; ?></td>
 <td><?php echo $row['Age']; ?></td>
<td><?php echo $row['Password']; ?></td>
<td><?php echo $row['Gender']; ?></td>
<td><?php echo $row['Location']; ?></td>
<td><?php echo $row['Environmental_interests']; ?></td>
<td><a href = "update_resident.php? Resident_id = <?php echo $row['Resident_id']; ?>">
Update</a>/<a href = "delete_resident.php? Resident_id = <?php echo $row['Resident_id']; ?>">
Delete</a></td> </tr> <?php } } ?>