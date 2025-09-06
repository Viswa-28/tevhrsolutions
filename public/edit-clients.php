<?php
include('../config.php');
include('./includes/header.php');
// session_start();
?>
<h2 class="text-center text-black fs-70">Edit Client</h2>
<?php
 
if (!isset($_GET['id'])) {
    echo "<p style='color:red;'>No client ID provided.</p>";
    exit();
}

$id = $_GET['id'];

$sql = "SELECT * FROM clients WHERE id = $id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 1) {
    echo "<p style='color:red;'>Client not found.</p>";
    exit();
}

$row = mysqli_fetch_assoc($result);

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
    if ($logo_image) {
        move_uploaded_file($logo_tmp, $upload_dir . $logo_image);
        $logo_sql = "logo_image = '$logo_image', ";
    } else {
        $logo_sql = "";
    }

    if ($payment_image)  {
        move_uploaded_file($payment_tmp, $upload_dir . $payment_image);
        $payment_sql = "payment_image = '$payment_image', ";
    } else {
        $payment_sql = "";
    }
    $sql = "UPDATE clients SET {$logo_sql} {$payment_sql} hr1_name = '$hr1_name', hr2_name = '$hr2_name', hr1_number = '$hr1_number', hr2_number = '$hr2_number' WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        echo "<p style='color:green;'>Client updated successfully!</p>";
        header("Location: clients-dash.php");
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($conn) . "</p>";
    }
    mysqli_close($conn);
} else {
    $hr1_name = htmlspecialchars($row['hr1_name']);
    $hr2_name = htmlspecialchars($row['hr2_name']);
    $hr1_number = htmlspecialchars($row['hr1_number']);
    $hr2_number = htmlspecialchars($row['hr2_number']);
    $logo_image = htmlspecialchars($row['logo_image']);
    $payment_image = htmlspecialchars($row['payment_image']);
}
?>

<form action="edit-clients.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
    <label>Logo Image:</label>
    <input type="file" name="logo_image"><br>

    <label>Payment Screenshot:</label>
    <input type="file" name="payment_image"><br>

    <label>HR 1 Name:</label>
    <input type="text" name="hr1_name" value="<?php echo $hr1_name; ?>"><br>

    <label>HR 2 Name:</label>
    <input type="text" name="hr2_name" value="<?php echo $hr2_name; ?>"><br>

    <label>HR 1 Number:</label>
    <input type="text" name="hr1_number" value="<?php echo $hr1_number; ?>"><br>

    <label>HR 2 Number:</label>
    <input type="text" name="hr2_number" value="<?php echo $hr2_number; ?>"><br>

    <button type="submit" name="submit">Submit</button>
</form>
<?php
mysqli_close($conn);
?>