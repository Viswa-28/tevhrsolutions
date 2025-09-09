<?php
include('./config.php');
include('./includes/header.php');
?>

    <h2 class="fs-70  text-center text-black">Admin Login</h2>
<form action="admin-login.php" method="post" class=" p-4 rounded" >
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Login</button>
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Successful login
        session_start();
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Invalid credentials
        echo "<p style='color:red;'>Invalid username or password</p>";
    }
}


?>