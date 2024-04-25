<?php
//require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();
session_start();

//$_SESSION['$company_id'] = isset($_GET['Company_id']);

$area_id = $_GET['Area_id'];

if (isset($_GET['Area_id'])) {

    $sql = "SELECT * FROM Areas WHERE Area_id = '$area_id'";
    $result = $conn->query($sql);

    if ($result->num_rows >= 0) {
        $row = $result->fetch_assoc();
?>
        <h2>Update Area Data</h2>
        <form action="update_area_backend.php?Area_id" method="POST">
            <input type="hidden" name="area_id" value="<?php echo $row['Area_id']; ?>">

            <label for="company_name">Area Name:</label>
            <input type="text" name="area_name" id="area_name" value="<?php echo $row['Area_name']; ?>"><br><br>

            <input type="hidden" name="council_id" id="council_id" value="<?php echo $row['Council_id']; ?>"><br><br>

            <input type="submit" name="Submit"/>
        </form>
<?php
    } else {
        echo "Area not found!";
    }
} else {
    echo "Missing area ID!";
}
