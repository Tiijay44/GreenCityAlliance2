<?php
require_once('database.php');
require_once('nav.php');
$conn = db_connect();

// SQL query to fetch areas
$sql = "SELECT Council_id, Council_name FROM Local_councils";
$result = $conn->query($sql);

// Check query execution
if (!$result) {
  die("Error: " . $conn->error);
}

// Generate options for dropdown
$area_options = "";
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $area_options .= "<option value='" . $row["Council_name"] . "'>" . $row["Council_name"] . "</option>";
  }
} else {
  $area_options = "<option value=''>No areas found</option>";
}
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
    <link rel="stylesheet" href="../Frontend/public/products.css" />
    <link rel="stylesheet" href="../Frontend/public/resident.css">
    <link rel="stylesheet" href="../Frontend/public/products_menu.css">
    <style>
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            align-self: center;
            align-content: center;
            justify-items: center;
            justify-self: center;
        }
    </style>
  </head>
  <body> 
<!--Section for nav bar


<main>
       Background changer-->
<div class="container-fluid backgroundChanger">
  <button id="background" type="button"><i class='backgroundNew bx bxs-moon'></i></button>
</div>

<form class="areaform" id="myForm" action="add_new_area.php" method="POST">
  <div id="formControl" class="fullname container">
    <div class="div_mobile_space product_name">
      <div>
        <label for="product_name" class="first_name product_name">
          Area</label>

      </div>
      <input type="text" name="area_name" id="area_name" placeholder="Enter area name">
    </div>

    <div class="div_mobile_space product_name">
      <div>
        <label for="council" class="council">Local Council</label>
      </div>
      <select name="council_name" id="council">
        <?php echo $area_options; ?> </select>

    </div>
  </div>

  <center>
    <div class="btn">
      <button type="submit" name="Submit" id="submit" class="button">Submit</button>
    </div>
  </center>
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