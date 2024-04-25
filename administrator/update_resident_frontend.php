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

require_once('../database.php');
$conn = db_connect();

$resident_id = $_GET['Resident_id'];

if (isset($_GET['Resident_id'])) {

    $sql = "SELECT * FROM Resident WHERE Resident_id = $resident_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Update Resident Data</h2>
        <form action="update_resident_backend.php?Resident_id=<?php echo $row['Resident_id']; ?>" method="POST">
            <input type="hidden" name="resident_id" value="<?php echo $row['Resident_id']; ?>">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $row['FirstName']; ?>"><br><br>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $row['LastName']; ?>"><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo $row['Email']; ?>"><br><br>
            <label for="age">Age:</label>
            <input type="text" name="age" id="age" value="<?php echo $row['AGE']; ?>"><br><br>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" value="<?php echo $row['Password']; ?>"><br><br>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" value="<?php echo $row['Gender']; ?>"><br><br>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="<?php echo $row['Location']; ?>"><br><br>
            <label for="environmental_interest">Environmental Interest:</label>
            <input type="text" name="environmental_interest" id="environmental_interest" value="<?php echo $row['Environmental_interests']; ?>"><br><br>
            <button type="submit" name="Submit">Update</button>
        </form>
        <?php
    } else {
        echo "Resident not found!";
    }
} else {
    echo "Missing resident ID!";
}
