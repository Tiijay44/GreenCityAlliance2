<?php
require_once('admin_access_control');
require_once('database.php');

$conn = db_connect();

$company_id = $_GET['company_id'];
$delete_query= "delete from sme where company_id = $company_id";
$result = $conn->query($delete_query);
if($result == true)
{
echo "result successfully updated";
header("Location: manage_company.php");
}
else
{
echo "Error:". $delete_query . "<br>". $conn->error;;
}
?>

