<?php
session_start();

// Check if the user is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'user') {
    header('Location: user_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopping Cart</title>
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
            min-height: 100vh; /* Full viewport height */
        }

        /* Dashboard Container Styles */
        .dashboard {
            background-color: #fff;
            box-shadow: 0px 0px 10px #888888;
            width: 100%;
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

        /* User Dashboard Menu Styles */
        .menu {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center; /* Center items horizontally */
            background-color: #333;
        }

        .menu li {
            margin-right: 15px;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            transition: color 0.3s; /* Smooth color transition on hover */
        }

        .menu li a:hover {
            color: #f00; /* Change link color on hover */
        }

        /* User Dashboard Content Styles */
        .content {
            padding: 20px;
        }

        /* Shopping Cart Styles */
        .cart-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        /* Product Card Styles */
        .product-card {
            background-color: #fff;
            box-shadow: 0px 0px 5px #888888;
            padding: 10px;
            margin: 10px;
            text-align: center;
            display: inline-block; /* Display product cards in a row */
            width: 200px; /* Set a fixed width for each card */
        }

        .product-card img {
            max-width: 100px;
            max-height: 100px;
        }

        /* Proceed to Checkout Button Styles */
        .checkout-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .checkout-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h2>Shopping Cart</h2>
        <ul class="menu">
            <li><a href="#">Home</a></li>
            <li><a href="#">View Product</a></li>
            <li><a href="#">Request Item</a></li>
            <li><a href="#">Product Status</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </header>

    <div class="content">
        
        
        <!-- Product Cards -->
        <div class="product-card">
            <img src="product_image1.jpg" alt="Product 1">
            <h3>Product Name</h3>
            <p>Price: $10.00</p>
            <p>Quantity: 2</p>
            <p>Total Price: $20.00</p>
            <p>Action: <a href="#">Remove</a></p>
        </div>

        <div class="product-card">
            <img src="product_image2.jpg" alt="Product 2">
            <h3>Product Name 2</h3>
            <p>Price: $15.00</p>
            <p>Quantity: 1</p>
            <p>Total Price: $15.00</p>
            <p>Action: <a href="#">Remove</a></p>
        </div>

        <!-- Proceed to Checkout Button -->
        <button class="checkout-button">Proceed to Checkout</button>
    </div>
</body>
</html>

