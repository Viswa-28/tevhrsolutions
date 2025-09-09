<?php
include('./config.php');

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Delete the client from the database
    $sql = "DELETE FROM clients WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Client deleted successfully!</p>";
        header("Location: clients-dash.php");
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
} else {
    echo "<p style='color:red;'>No client ID provided.</p>";
}

mysqli_close($conn);
?>