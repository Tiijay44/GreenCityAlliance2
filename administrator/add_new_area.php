<?php
// **Require necessary files:**
// **Establish database connection:**
// **Process form submission for creating a new area:**
// **Extract form data:**
// **Construct SQL insert statement:**
// **Execute insert query:**
// **Handle insert result:**
require_once('../../GreenCityAlliance/database.php');

$conn = db_connect();

// Create a new area
if (isset($_POST["Submit"])) {

    $area_name = $_POST["area_name"];
    $council_name = $_POST["council_name"];

    $sql = "SELECT Council_id From Local_Councils WHERE Council_name = '$council_name'";
    $getCouncilid = $conn->query($sql);

    if ($getCouncilid->num_rows >= 0) {

        $row = $getCouncilid->fetch_assoc();
        $council_id = $row['Council_id']; {

            $sql = "INSERT INTO Areas (Area_name, Council_id) VALUES ('$area_name', '$council_id')";
            $result = $conn->query($sql);

            if ($result == true) {
                echo '<script>
                alert("Area Successfully Inserted");
                setTimeout(function() {
                  window.location.href = "manage_area.php";
                },500); 
              </script>';
            } else {
                echo "Error:" . $sql . "<br>" . $conn->error;
            }
        }
    }
}
