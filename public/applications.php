<?php
include('./includes/admin-nav.php');
include('./includes/header.php');
include('../config.php');
?>

<h1 class="text-center text-black fs-70">New Applications</h1>

<div style="overflow-x: auto;">
    <table class="table table-striped table-hover table-bordered text-center border-dark">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Brand Image</th>
                <th>Applicant Name</th>
                <th>Applicant Email</th>
                <th>Applicant Phone</th>
                <th>Applicant Address</th>
                <th>Applied Date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all applications with their logo image
            $sql = "SELECT * FROM applications ORDER BY id DESC";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $logo = htmlspecialchars($row['logo_image']); // from applications table
                    $name = htmlspecialchars($row['client_name']);
                    $email = htmlspecialchars($row['email']);
                    $phone = htmlspecialchars($row['phone']);
                    $address = htmlspecialchars($row['address']);
                    $date = date("Y-m-d", strtotime($row['created_at']));

                    echo "<tr>
                        <td><img src='./assets/uploads/$logo' alt='Logo' class='img-fluid' style='width: 100px; height: 60px;'></td>
                        <td>$name</td>
                        <td>$email</td>
                        <td>$phone</td>
                        <td>$address</td>
                        <td>$date</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No applications found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
