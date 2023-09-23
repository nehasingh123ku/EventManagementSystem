<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the vendor is logged in
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'vendor') {
        header('Location: vendor_login.php');
        exit();
    }

    // Process form data
    $item_name = $_POST['item_name'];
    $item_price = $_POST['item_price'];

    // Handle file upload for the product image
    if ($_FILES['item_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
        $uploaded_file = $upload_dir . basename($_FILES['item_image']['name']);

        // Move the uploaded file to the desired location
        if (move_uploaded_file($_FILES['item_image']['tmp_name'], $uploaded_file)) {
            // Insert the item data (including the image path) into the database
            // Replace this with your actual database insertion code
            // $db->query("INSERT INTO items (item_name, item_price, item_image) VALUES ('$item_name', '$item_price', '$uploaded_file')");
        }
    }

    // Redirect back to the "Your Items" page or show a success message
    header('Location: your_items.php');
    exit();
}
?>
