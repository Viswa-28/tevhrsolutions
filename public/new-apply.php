<?php
require_once '../config.php';
include('./includes/header.php');
$success = false;
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and sanitize input
    $client_name = $_POST['client-name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $id = $_POST['id'];

    // Fetch logo from clients table
    $sql = "SELECT * FROM clients WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        $client_logo = $row['logo_image'];
    } else {
        $error = "Client not found.";
        exit();
    }

    // Insert into applications table INCLUDING logo
    $sql = "INSERT INTO applications (client_name, gender, email, phone, address, city, state, logo_image)
            VALUES ('$client_name', '$gender', '$email', '$phone', '$address', '$city', '$state', '$client_logo')";

    if (mysqli_query($conn, $sql)) {
        $success = true;
        header("Location: ./details.php?id=" . urlencode($id));
        exit();
    } else {
        $error = "Error: " . mysqli_error($conn);
    }
}
?>
