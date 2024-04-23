<head>
  <title>Product Search</title>
  <link rel="stylesheet" href="search_.css">
</head>

<?php
require_once('database.php');
$conn = db_connect();

$searchTerm = $_GET['product_search'];

// Escape the search term to prevent SQL injection vulnerabilities
$searchTerm = mysqli_real_escape_string($conn, $searchTerm);

// Build the SQL query
//$sql = "SELECT Product_name, Description, Price FROM products_services WHERE Product_name LIKE '%$searchTerm%'";
$sql_query = "SELECT p.Product_name, c.Company_name, p.Description, p.Size, p.Price, p.Price_category, p.Environmental_benefits
FROM products_services p
INNER JOIN company c ON p.Company_id = c.Company_id WHERE Product_name LIKE '%$searchTerm%'";


// Execute the query
$result = $conn->query($sql_query);

// Display search results (replace with your HTML structure)
$result = $conn->query($sql_query);


if ($result->num_rows > 0) {
    echo "<h2>Search Results</h2>";
    echo "<table>";  // Open the table tag
    echo "<tr>";     // Open table header row
    echo "<th width=>Product Name</th>";
    echo "<th>Company Name</th>";
    echo "<th>Description</th>";
    echo "<th>Size</th>";
    echo "<th>Price</th>";
    echo "<th>Price Category</th>";
    echo "<th>Environmental Benefits</th>";
    echo "</tr>";    // Close table header row
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";   // Open table data row
      echo "<td>" . $row['Product_name'] . "</td>";
      echo "<td>" . $row['Company_name'] . "</td>";
      echo "<td>" . $row['Description'] . "</td>";
      echo "<td>" . $row['Size'] . "</td>";
      echo "<td>" . $row['Price'] . "</td>";
      echo "<td>" . $row['Price_category'] . "</td>";
      echo "<td>" . $row['Environmental_benefits'] . "</td>";
      echo "</tr>";   // Close table data row
    }
    echo "</table>"; // Close the table tag
  } else {
    echo "No products found matching your search.";
  }


