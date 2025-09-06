<?php
include('../config.php');
include('./includes/header.php');
include('./includes/navbar.php')

?>
<main class="container my-5">

<div class="row w-100 mx-0 my-5 d-flex align-items-center justify-content-center clients-hero" data-aos="fade-up">
  <div class="col-12 text-center my-5">
    <h1 class="fs-70 text-black ">
      Our <span class="gradient-text">Clients</span>
    </h1>
    <p class="fs-24 text-black">
      Partnering with top brands to connect people, empower growth, and drive success.
    </p>
  </div>
</div>

<div class="row">

    <div class="container mb-5">
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
                $payment_image = htmlspecialchars($row['payment_image']);}}

        ?>

        <div class="col">
            
        </div>
        </div>
    

</main>

