<?php
// Establish a database connection (similar to the above code)
// Retrieve products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <!-- Include your CSS and other styles here -->
</head>
<body>
    <h1>View Products</h1>
    
    <?php
    // Display the products
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3>" . $row['product_name'] . "</h3>";
            echo "<p>Price: $" . $row['product_price'] . "</p>";
            echo '<img src="' . $row['product_image'] . '" alt="' . $row['product_name'] . '" width="200">';
        }
    } else {
        echo "No products available.";
    }
    ?>
</body>
</html>
