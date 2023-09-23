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
    <title>Add Items</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Add your CSS styles here */
        body {
            background-color: #87CEEB; /* Sky Blue background */
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            display: flex;
            flex-direction: column;
            align-items: center; /* Center items horizontally */
            justify-content: center; /* Center items vertically */
            min-height: 100vh; /* Full viewport height */
        }

        /* Form Container Styles */
        .dashboard {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px #888888;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        /* Center form items */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Style form input fields and labels */
        label {
            margin-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }

        /* Header Styles */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            display: flex;
            justify-content: space-between; /* Space out items horizontally */
            width: 100%;
        }

        /* Header Links Styles */
        .header-links {
            list-style-type: none;
            padding: 0;
            display: flex;
        }

        .header-links li {
            margin-right: 15px;
        }

        .header-links li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s; /* Smooth color transition on hover */
        }

        .header-links li a:hover {
            color: #f00; /* Change link color on hover */
        }

        .center-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <header>
        <ul class="header-links">
            <li><a href="#">Product Status</a></li>
            <li><a href="#">Request Item</a></li>
            <li><a href="#">View Product</a></li>
            <li><a href="vendor_logout.php">Logout</a></li>
        </ul>
        <h2>Add Items</h2>
    </header>

    <div class="center-container">
        <!-- Add Items Form -->
        <form method="post" action="process_add_item.php" enctype="multipart/form-data">
            <label for="item_name">Product Name:</label>
            <input type="text" name="item_name" id="item_name" required><br>
            
            <label for="item_price">Product Price:</label>
            <input type="number" name="item_price" id="item_price" required><br>
            
            <label for="item_image">Product Image:</label>
            <input type="file" name="item_image" id="item_image" accept="image/*" required><br>
            
            <input type="submit" value="Add Item">
        </form>
    </div>
</body>
</html>




