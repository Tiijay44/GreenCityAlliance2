<?php
require_once('database.php');
require_once('nav.php');
$conn = db_connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="Frontend/public/resident.css">
    <link rel="stylesheet" href="Frontend/public/index.css">
    <link rel="stylesheet" href="Frontend/public/dashboard.css">
    <style>
        table{
            border: none;
            
        }
    </style>
</head>
<body>
    <div style="background-color:rgba(0, 129, 0, 0.945); color:white">
<marquee behavior='scroll' scrollamount='9' direction='right' onmouseover='this.stop();' onmouseout='this.start();'><h3 style=' margin-top:20px; margin-bottom: 20px;'>All Vote</h3></marquee>
</div>
<main class="container">
<table width="402" border="1">
    <tbody>
        <tr>
            <td colspan="8">
            </td>
        </tr>
        <tr>
            <th width="18">Vote_ID:</th>
            <th width="18">Product_name:</th>
            <th width="380">Company_name:</th>
        </tr>

        <?php
        $sql_query = "SELECT vote_id, p.Product_name, c.Company_name
        FROM Vote v
        INNER JOIN Products_services p  ON v.product_id = p.Product_id
        INNER JOIN Company c ON v.Company_id = c.Company_id";
        

        $result = $conn->query($sql_query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['vote_id']; ?></td>
                    <td><?php echo $row['Product_name']; ?></td>
                    <td><?php echo $row['Company_name']; ?></td>
                </tr> <?php }
                
} ?>
    </tbody>
</table>
</main>

<!--Section for footer-->
<?php
require_once('footer.php');
?>
    <script src="Frontend/Resident/resident.js"></script>
    <script src="Frontend/mainpages/index.js"></script>
    <!-- <script src="../Frontend/admin/dashboard.js"></script> -->
    <script>
        //  $(".page-loader").removeClass("fade-out");
        // $(".page-loader").addClass("loader-fade-in");
    </script>
</body>
</html>
