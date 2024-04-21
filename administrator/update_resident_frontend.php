<?php
require_once('admin_access_control.php');
require_once('../database.php');
$conn = db_connect();

$company_id = isset($_GET['company_id']) ? $_GET['company_id'] : null;

if ($company_id) {
    $sql = "SELECT * FROM sme WHERE company_id = $company_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <h2>Update Company Data</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="resident_id" value="<?php echo $row['resident_id']; ?>">
            <label for="firstname">First Name:</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>"><br><br>
            <label for="lastname">Last Name:</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>"><br><br>
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>"><br><br>
            <label for="age">Age:</label>
            <input type="text" name="age" id="age" value="<?php echo $row['age']; ?>"><br><br>
            <label for="password">Password:</label>
            <input type="text" name="password" id="password" value="<?php echo $row['password']; ?>"><br><br>
            <label for="gender">Gender:</label>
            <input type="text" name="gender" id="gender" value="<?php echo $row['gender']; ?>"><br><br>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="<?php echo $row['location']; ?>"><br><br>
            <label for="environmental_interest">Environmental Interest:</label>
            <input type="text" name="environmental_interest" id="environmental_interest" value="<?php echo $row['environmental_interest']; ?>"><br><br>
            <button type="submit">Update</button>
        </form>
        <?php
    } else {
        echo "Resident not found!";
    }
} else {
    echo "Missing resident ID!";
}
