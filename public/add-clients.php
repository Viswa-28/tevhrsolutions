<?php
include('../config.php');
include('./includes/header.php');

?>
<h2 class="text-center text-black fs-70">Add Client</h2>


<form action="add-clients.php" method="POST" enctype="multipart/form-data">
    <label>Logo Image:</label>
    <input type="file" name="logo_image" required><br>

    <label>Payment Screenshot:</label>
    <input type="file" name="payment_image" required><br>

    <label>HR 1 Name:</label>
    <input type="text" name="hr1_name" required><br>

    <label>HR 2 Name:</label>
    <input type="text" name="hr2_name" required><br>

    <label>HR 1 Number:</label>
    <input type="text" name="hr1_number" required><br>

    <label>HR 2 Number:</label>
    <input type="text" name="hr2_number" required><br>

    <button type="submit" name="submit">Submit</button>
</form>

<?php


if (isset($_POST['submit'])) {
    $hr1_name = $_POST['hr1_name'];
    $hr2_name = $_POST['hr2_name'];
    $hr1_number = $_POST['hr1_number'];
    $hr2_number = $_POST['hr2_number'];

    $logo_image = $_FILES['logo_image']['name'];
    $payment_image = $_FILES['payment_image']['name'];

    $logo_tmp = $_FILES['logo_image']['tmp_name'];
    $payment_tmp = $_FILES['payment_image']['tmp_name'];

    $upload_dir = './assets/uploads/';

    move_uploaded_file($logo_tmp, $upload_dir . $logo_image);
    move_uploaded_file($payment_tmp, $upload_dir . $payment_image);
    $sql = "INSERT INTO clients (logo_image, payment_image, hr1_name, hr2_name, hr1_number, hr2_number) VALUES ('$logo_image', '$payment_image', '$hr1_name', '$hr2_name', '$hr1_number', '$hr2_number')";
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Client added successfully!</p>";
        header("Location: clients-dash.php");
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
    mysqli_close($conn);
}
?>
