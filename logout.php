<?php
session_start();

if(isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
    echo "<script>alert('Admin logged out successfully.');</script>"; // Output a success message
    header("Location:../index.php");
} else {
    echo "<script>alert('Admin session not found.');</script>"; // Output an error message if admin session is not found
}
?>
