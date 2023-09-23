<?php
session_start();

// Check if the vendor is logged in, otherwise redirect to the login page
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'vendor') {
    header('Location: vendor_login.php');
    exit();
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    // Handle the uploaded image (you may need to adjust this code)
    if (isset($_FILES['item_image']) && $_FILES['item_image']['error'] === 0) {
        $upload_dir = 'uploads/'; // Directory where you want to store images
        $image_name = $_FILES['item_image']['name'];
        $image_path = $upload_dir . $image_name;

        // Move the uploaded image to the desired directory
        move_uploaded_file($_FILES['item_image']['tmp_name'], $image_path);

        // Store the image path in your database or perform any other actions
        // ...

        // Redirect to your items page or another appropriate location
        header('Location: your_items.php');
        exit();
    } else {
        // Handle image upload error
        $error_message = "Error uploading the image. Please try again.";
    }
}
?>
