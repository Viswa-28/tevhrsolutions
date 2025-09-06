<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: admin-login.php");
    exit();
}

include('../config.php');
include('./includes/header.php');
include('./includes/admin-nav.php');
?>

    <h1 class="text-center text-black fs-70">Our Clients</h1>
    <div class="container mt-5 mb-5">
        <div class="row clients ">
            <?php
            $sql = "SELECT * FROM clients";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                $hr1_name = htmlspecialchars($row['hr1_name']);
                $hr2_name = htmlspecialchars($row['hr2_name']);
                $hr1_number = htmlspecialchars($row['hr1_number']);
                $hr2_number = htmlspecialchars($row['hr2_number']);
                $logo_image = htmlspecialchars($row['logo_image']);
                $payment_image = htmlspecialchars($row['payment_image']);
            ?>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="./assets/uploads/<?php echo $logo_image; ?>" class="card-img-top " alt="Client Logo">
                            <div class="card-body d-flex flex-column justify-content-between align-items-start">
                                <h5 class="card-title">HR Contacts</h5>
                                <p class="card-text"><strong><?php echo $hr1_name; ?></strong>: <?php echo $hr1_number; ?></p>
                                <p class="card-text"><strong><?php echo $hr2_name; ?></strong>: <?php echo $hr2_number; ?></p>
                               <div class="btn-container">
                                <a href="./assets/uploads/<?php echo $payment_image; ?>" target="_blank" class="btn btn-primary">View Payment Screenshot</a>
                                <a href="edit-clients.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete-clients.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                               </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<p>No clients found.</p>";
            }
          

            mysqli_close($conn);
            ?>
        </div>

        <div class="primary-btn">
            <a href="add-clients.php" class="text-decoration-none text-white">Add New Client</a>
        </div>




    </div>