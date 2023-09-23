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
    <title>User Dashboard</title>
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
        
        /* Dropdown Styles */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: blue;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h2>Welcome User</h2>
        <ul class="menu">
            <li class="dropdown">
                <a href="#">Vendor </a>
                <div class="dropdown-content">
                    <a href="catering.php">Catering</a>
                    <a href="lighting.php">Lighting</a>
                    <a href="decoration.php">Decoration</a>
                    <a href="decoration.php">Florist</a>
                </div>
            </li>
            
            <li><a href="cart.php">Cart</a></li>
            <li><a href="guest_list.php">Guest List</a></li>
            <li><a href="order_status.php">Order Status</a></li>
            <li><a href="user_logout.php">Logout</a></li>
        </ul>
    </header>

    <div class="content">
        <!-- Place your user dashboard content here -->
        <p>This is the user dashboard. You can view vendor lists, your cart, guest lists, and order status here.</p>
    </div>
</body>
</html>
