<?php
include('./config.php');   

// Handle Testimonial Submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $testimonial = mysqli_real_escape_string($conn, $_POST['testimonial']);

    $sql = "INSERT INTO testimonials (name, testimonial) VALUES ('$name', '$testimonial')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: clients.php");
        exit();
    } else {
        $error_message = "Error submitting testimonial. Please try again.";
}}
?>