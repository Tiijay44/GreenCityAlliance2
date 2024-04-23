<?php
require_once('admin_access_control');
require_once('database.php');

$conn = db_connect();

$product_id = $_GET['product_id'];

$delete_query= "delete from product_services where product_id = $product_id";
$result = $conn->query($delete_query);
if($result == true)
{
echo "result successfully updated";
header("Location: manage_product.php");
}
else
{
echo "Error:". $delete_query . "<br>". $conn->error;;
}

?>

