<?php
session_start();

// Check if the admin is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: admin_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
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
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        /* Navigation Bar Styles */
        .navbar {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        /* Main Content Styles */
        .main-content {
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px #888888;
        }

        h2 {
            color: #333;
        }

        ul.menu {
            list-style-type: none;
            padding: 0;
            display: flex;
            justify-content: center; /* Center items horizontally */
        }

        ul.menu li {
            margin: 0 15px; /* Add spacing between menu items */
        }

        ul.menu li a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
        }

        ul.menu li a:hover {
            text-decoration: underline;
        }

        /* Dropdown Styles */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333;
            min-width: 160px;
            z-index: 1;
        }

        .menu li:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #fff;
            font-weight: bold;
        }

        .dropdown-content a:hover {
            background-color: #444;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome Admin</h1>
        <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    </header>

    <nav class="navbar">
        <!-- Admin Dashboard Menu -->
        <ul class="menu">
            <li><a href="admin_home.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Maintain User</a>
                <div class="dropdown-content">
                    <a href="add_user.php">Add User</a>
                    <a href="update_user.php">Update User</a>
                    <a href="add_membership_user.php">Add Membership</a>
                    <a href="update_user.php">Update Membership</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="#">Maintain Vendor</a>
                <div class="dropdown-content">
                    <a href="add_vendor.php">Add Vendor</a>
                    <a href="update_vendor.php">Update Vendor</a>
                    <a href="add_membership_vendor.php">Add Membership</a>
                    <a href="update_vendor.php">Update Membership</a>
                </div>
            </li>
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="main-content">
        <!-- Admin Dashboard Content Goes Here -->
        <h2>Welcome to the Admin Dashboard</h2>
        <p>This is the home page of the admin dashboard. You can manage users and vendors here.</p>
        <p>Here, you can perform various tasks such as maintaining user information, adding or updating users, and managing vendor information.</p>
        <p>Use the navigation menu above to access different sections of the dashboard.</p>
    </div>
</body>
</html>

