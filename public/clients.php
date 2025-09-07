<?php
include('./includes/navbar.php');
include('./includes/header.php');

include('../config.php');



?>

<main class="container my-5">
  <!-- Clients Section -->
  <div class="row w-100 mx-0 my-5 d-flex align-items-center justify-content-center clients-hero" data-aos="fade-up">
    <div class="col-12 text-center my-5">
      <h1 class="fs-70 text-black">Our <span class="gradient-text">Clients</span></h1>
      <p class="fs-24 text-black">
        Partnering with top brands to connect people, empower growth, and drive success.
      </p>
    </div>
  </div>

  <div class="row">
    <div class="container mb-5">
      <div class="row clients">
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
            $description = htmlspecialchars($row['description']);
        ?>
            <div class="col-12 col-md-5 col-lg-4 mb-4 d-flex align-items-center justify-content-center">

              <div class="card h-100 p-3 shadow">
                <img src="./assets/uploads/<?php echo $logo_image; ?>" class="card-img-top img-fluid" alt="Client Logo" style="height: 200px; object-fit: contain;">
                <div class="card-body">
                  <h5 class="card-title text-center">Client Description</h5>
                  <p class="card-text"><?php echo nl2br($description); ?></p>
                  <hr>
                  <div class="contact-info">
                    <h5 class="card-title text-center">HR Contacts</h5>
                    <div class="info d-flex justify-content-between align-items-center mb-2">
                      <p><strong><?php echo $hr1_name; ?>:</strong></p>
                      <a href="tel:<?php echo $hr1_number; ?>"><button class="btn primary-btn">Contact</button></a>
                    </div>
                    <div class="info d-flex justify-content-between align-items-center">
                      <p><strong><?php echo $hr2_name; ?>:</strong></p>
                      <a href="tel:<?php echo $hr2_number; ?>"><button class="btn primary-btn">Contact</button></a>
                    </div>
                  </div>

                </div>
                <div class="card-footer text-center">
                  <button><a href="details.php?id=<?php echo $row['id']; ?>" class=" btn primary-btn">View Details</a></button>
                </div>
              </div>
            </div>
        <?php
          }
        } else {
          echo "<p class='text-center'>No clients found.</p>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Testimonials Section -->
  <section class="testimonial mt-5">
    <h2 class="fs-40 text-black mb-4 text-center">What Our Clients Say</h2>
    <div class="row">
      <?php
      $sql = "SELECT * FROM testimonials ORDER BY id DESC LIMIT 6";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $name = htmlspecialchars($row['name']);
          $testimonial = htmlspecialchars($row['testimonial']);
      ?>
          <div class="col-md-4 mb-3">
            <div class="card shadow-sm h-100">
              <div class="card-title d-flex  align-items-center pt-3 gap-3 px-3">
                <img src="./assets/images/user-profile.png" alt="User" style="height: 80px; object-fit: contain;">
                <div class="name d-flex flex-column align-items-start">
                  <h5 class="text-end"> <?php echo $name; ?></h5>
                  <p><?php echo date("F j, Y", strtotime($row['created_at'])); ?></p>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">"<?php echo nl2br($testimonial); ?>"</p>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "<p class='text-center'>No testimonials found.</p>";
      }
      ?>
    </div>
  </section>

  <!-- Testimonial Submission Form -->
  <section class="testimonial-form mt-5">
    <?php if (isset($_GET['submitted'])): ?>
      <div class="alert alert-success text-center">Thank you for your feedback!</div>
    <?php elseif (!empty($error_message)): ?>
      <div class="alert alert-danger text-center"><?php echo $error_message; ?></div>
    <?php endif; ?>
    <h2 class="fs-30 text-black mb-4 text-center">Submit Your Testimonial</h2>
    <form action="testimonial.php" method="POST" class="p-4 bg-light rounded shadow">
      <div class="mb-3">
        <input type="text" name="name" class="form-control p-3" placeholder="Enter your name" required>
      </div>
      <div class="mb-3">
        <textarea name="testimonial" class="form-control p-3" placeholder="Enter your testimonial" required></textarea>
      </div>
      <button type="submit" class="btn primary-btn">Submit Testimonial</button>
    </form>

  </section>
</main>
<?php
include('./includes/footer.php');
mysqli_close($conn);
?>