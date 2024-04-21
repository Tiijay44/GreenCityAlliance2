<?php
require_once('admin_access_control');
require_once('database.php');

$conn = db_connect();

$resident_id = $_GET['resident_id'];
$delete_query= "delete from resident where resident_id= $resident_id";
$result = $conn->query($delete_query);
if($result == true)
{
echo "result successfully updated";
header("Location: manage_resident.php");
}
else
{
echo "Error:". $delete_query . "<br>". $conn->error;;
}
?>

