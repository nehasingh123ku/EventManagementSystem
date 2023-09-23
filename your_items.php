<?php
session_start();

// Check if the vendor is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'vendor') {
    header('Location: vendor_login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Items</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="dashboard">
        <h2>Your Items</h2>
        
        <!-- Vendor Dashboard Menu -->
        <ul class="menu">
            <li><a href="your_items.php">Your Items</a></li>
            <li><a href="add_items.php">Add Items</a></li>
            <li><a href="transactions.php">Transactions</a></li>
            <li><a href="vendor_logout.php">Logout</a></li>
        </ul>
        
        <!-- Your Items Content Goes Here -->
        <div class="content">
            <!-- Place your item management content here -->
            <!-- Example: List of items, Add/Remove items, Edit items, etc. -->
            
            <!-- Add an item form -->
            <h3>Add Item</h3>
            <form method="post" action="add_item.php">
                <input type="text" name="item_name" placeholder="Item Name" required><br>
                <input type="text" name="item_description" placeholder="Item Description" required><br>
                <input type="number" name="item_price" placeholder="Item Price" required><br>
                <input type="submit" value="Add Item">
            </form>
            
            <!-- List of vendor items -->
            <h3>Your Items List</h3>
            <ul>
                <!-- Example item list -->
                <li>Item 1 - $10.00 [<a href="delete_item.php?id=1">Delete</a>]</li>
                <li>Item 2 - $15.00 [<a href="delete_item.php?id=2">Delete</a>]</li>
                <!-- Add items dynamically from your database -->
            </ul>
        </div>
    </div>
</body>
</html>
