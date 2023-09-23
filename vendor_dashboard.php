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
    <title>Vendor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Add your CSS styles here */
        body {
            background-color: #87CEEB; /* Sky Blue background */
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
        }

        /* Header Styles */
        header {
            background-color: blue;
            color: red;
            text-align: center;
            padding: 10px;
        }

        h2 {
            color: #333;
        }

        /* Vendor Dashboard Menu Styles */
        .menu {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center; /* Center items horizontally */
            background-color: #87CEEB; /* Sky Blue background for menu */
        }

        .menu li {
            margin: 0 15px; /* Add spacing between menu items */
        }

        .menu li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            padding: 10px 20px;
        }

        .menu li a:hover {
            background-color: #333;
            color: #fff;
        }

        /* Main Content Styles */
        .content {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px #888888;
        }
    </style>
</head>
<body>
    <header>
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
        <!-- Vendor Dashboard Menu -->
        <ul class="menu">
            <li><a href="add_items.php">Add Item</a></li>
            <li><a href="your_items.php">Your Items</a></li>
            <li><a href="transactions.php">Transactions</a></li>
            <li><a href="vendor_logout.php">Logout</a></li>
        </ul>
    </header>

    <div class="dashboard">
        <!-- Vendor Dashboard Content Goes Here -->
        <div class="content">
            <!-- Place your vendor dashboard content here -->
            <p>This is the vendor dashboard. You can manage your items and view transactions here.</p>
        </div>
    </div>
</body>
</html>

