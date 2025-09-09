<?php
include('./config.php');
include('./includes/header.php');
include('./includes/admin-nav.php');




?>

<h2 class="fs-70 text-center text-black">Enquiry</h2>

<table class="table table-striped mt-5 text-center border-dark ">
    <thead class="table-dark">
        <tr class="text-center ">
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql="select * from enquiry";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
        $email = $row['email'];
        $message = $row['message'];
        echo "<tr>
        <td class='text-center '>$name</td>
        <td class='text-center '>$email</td>
        <td class='text-center '>$message</td>
        </tr>";
    }}

    ?>
</table>
