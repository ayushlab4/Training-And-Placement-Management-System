<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['id_admin']) || isset($_SESSION['id_company']) || isset($_SESSION['id_user'])) {
    // If logged in, destroy the session and unset session variables
    session_unset();
    session_destroy();
}

// Redirect the user to the desired page (e.g., login page or main home page)
header("Location: login.php"); // Replace 'login.php' with your desired login page
// OR
// header("Location: index.php"); // Replace 'index.php' with your main home page

exit();
?>
