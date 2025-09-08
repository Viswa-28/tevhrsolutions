<?php
include('./includes/admin-nav.php');
include('./includes/header.php');
include('../config.php');

$quary = "select logo_image from clients";
$result = $conn->query($quary);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $image = $row['logo_image'];
    }
}

?>

<h1 class="text-center text-black fs-70"> New Applications</h1>

<div style="overflow-x: auto;">
    <table class="table table-striped table-hover table-bordered text-center  border-dark">
        <thead class="table-dark">
            <tr class="text-center">
                <th>Brand image</th>
                <th>Applicant Name</th>
                <th>Applicant Email</th>
                <th>Applicant Phone</th>
                <th>Applicant Address</th>
                <th>Applied Date</th>
                <!-- <th>Application Status</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `applications` ORDER BY `id` DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $name = $row['client_name'];
                    // $image = $row['image'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                    $date = date("Y-m-d", strtotime($row['created_at']));

                    echo "<tr>
                <td><img src='./assets/uploads/$image' alt='' class='img-fluid ' style='width: 100px; height: 100px;' ></td>
                <td class='text-center '>$name</td>
                <td class='text-center '>$email</td>
                <td class='text-center '>$phone</td>
                <td class='text-center '>$address</td>
                <td class='text-center '>$date</td>
                </tr>";
                }
            }

            ?>
        </tbody>
    </table>
</div>