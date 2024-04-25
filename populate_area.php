<?php
require_once('database.php');
$conn = db_connect();

// SQL query to fetch areas
$sql = "SELECT Area_id, Area_name FROM Areas";
$result = $conn->query($sql);

// Check query execution
if (!$result) {
  die("Error: " . $conn->error);
}

// Generate options for dropdown
$area_options = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $area_options .= "<option value='" . $row["Area_id"] . "'>" . $row["Area_name"] . "</option>";
  }
} else {
  $area_options = "<option value=''>No areas found</option>";
}

// Close connection
$conn->close();
?>

<label for="area">Area:</label>
<select name="area_id" id="area">
  <?php echo $area_options; ?>
</select>
