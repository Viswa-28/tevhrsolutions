<?php
require_once '../config.php';
include('./includes/header.php');

$success = false;
$error = "";

// Only handle POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitize and validate inputs
    $client_name = trim($_POST['client-name']);
    $gender = $_POST['gender'] ?? '';
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $address = trim($_POST['address']);
    $city = trim($_POST['city']);
    $state = trim($_POST['state']);
    $id = intval($_POST['id']); // Sanitize id

    // 2. Validate input data
    $errors = [];

    if (empty($client_name)) $errors[] = "Name is required.";
    if (!in_array($gender, ['male', 'female'])) $errors[] = "Invalid gender selected.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
    if (!preg_match('/^\d{10}$/', $phone)) $errors[] = "Phone must be a 10-digit number.";
    if (empty($address)) $errors[] = "Address is required.";
    if (empty($city)) $errors[] = "City is required.";
    if (empty($state)) $errors[] = "State is required.";

    if (count($errors) > 0) {
        $error = implode("<br>", $errors);
    } else {
        // 3. Escape all values before DB use
        $client_name = mysqli_real_escape_string($conn, $client_name);
        $gender = mysqli_real_escape_string($conn, $gender);
        $email = mysqli_real_escape_string($conn, $email);
        $phone = mysqli_real_escape_string($conn, $phone);
        $address = mysqli_real_escape_string($conn, $address);
        $city = mysqli_real_escape_string($conn, $city);
        $state = mysqli_real_escape_string($conn, $state);

        // 4. Fetch logo from clients table
        $logo_query = "SELECT logo_image FROM clients WHERE id = $id";
        $logo_result = mysqli_query($conn, $logo_query);

        if ($logo_result && mysqli_num_rows($logo_result) > 0) {
            $row = mysqli_fetch_assoc($logo_result);
            $client_logo = mysqli_real_escape_string($conn, $row['logo_image']);

            // 5. Insert application
            $insert_sql = "INSERT INTO applications 
                ( client_name, gender, email, phone, address, city, state, logo_image)
                VALUES ( '$client_name', '$gender', '$email', '$phone', '$address', '$city', '$state', '$client_logo')";

            if (mysqli_query($conn, $insert_sql)) {
                $success = true;
                header("Location: ./details.php?id=" . urlencode($id));
                exit();
            } else {
                $error = "Database Error: " . mysqli_error($conn);
            }
        } else {
            $error = "Client not found.";
        }
    }
}
?>

<?php if ($error): ?>
    <div style="color:red; text-align:center; margin-top:20px;">
        <strong>Error:</strong><br><?php echo $error; ?>
    </div>
<?php endif; ?>
