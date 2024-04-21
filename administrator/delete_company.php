<?php
//require_once('admin_access_control');
require_once('../database.php');

$conn = db_connect();

$company_id = isset($_GET['Company_id']);


$delete_query= "delete from sme where Company_id = '$company_id'";
$result = $conn->query($delete_query);

if($result == true)
{
echo "result successfully updated";
//header("Location: manage_company.php");
}
else
{
echo "Error:". $delete_query . "<br>". $conn->error;;
}
?>

