<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the selected role and user input
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Define user data based on role (Replace with your actual user data)
    $users = [
        'vendor' => ['username' => 'vendor123', 'password' => 'vendorpass'],
        'user' => ['username' => 'user123', 'password' => 'userpass'],
        'admin' => ['username' => 'admin123', 'password' => 'adminpass']
    ];

    // Check if user data for the selected role exists and if credentials match
    if (isset($users[$role]) && $username === $users[$role]['username'] && $password === $users[$role]['password']) {
        $_SESSION['user_role'] = $role;
        $_SESSION['username'] = $username;

        // Redirect to the dashboard
        switch ($role) {
            case 'vendor':
                header('Location: vendor_dashboard.php');
                break;
            case 'user':
                header('Location: user_dashboard.php');
                break;
            case 'admin':
                header('Location: admin_dashboard.php');
                break;
            default:
                $error_message = "Invalid role. Please try again.";
        }
        exit();
    } else {
        $error_message = "Invalid username or password. Please try again.";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
            background-image: url('assets/background.jpeg'); /* Replace with your background image path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        select {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <?php if (isset($error_message)) { ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php } ?>
        <form method="post" action="">
            <label for="role">Select Role:</label>
            <select name="role" id="role">
                <option value="vendor">Vendor</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
