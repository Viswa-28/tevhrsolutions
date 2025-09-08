<?php
include('./includes/header.php');
include('./includes/navbar.php');
include('../config.php');

?>

<div class="heading d-flex align-items-center justify-content-center flex-column">
<h1 class="fs-70 text-center text-black mt-5">
    Let's Move Together - <span class="gradient-text">Contact Us</span>
</h1>
<p class="fs-24 text-center text-black w-50">Connect With TEV HR Solutions Your HR Partner for Seamless Delivery Staffing and Talent Management.</p>

</div>

<div class="touch mt-5">
    <h1 class="fs-30 text-center text-black">
    Get IN Touch
</h1>
<p class="fs-20 text-center text-black">Choose your preferred way to connect with our team</p>
</div>

<div class="row w-100 m-0 d-flex align-items-stretch justify-content-center process gap-4 h-100">
  
  <!-- Phone -->
  <div class="col-12 col-md-4 col-lg-2 shadow d-flex flex-column align-items-center mt-4 h-100">
    <div class="card-body text-center d-flex flex-column align-items-center justify-content-center h-100">
      <div class="icon rounded-5 mb-2">
        <i class="bi bi-telephone-fill primary-btn"></i>
      </div>
      <p class="fs-18">Phone</p>
      <p class="fs-18">+91 74189 76422</p>
    </div>
  </div>

  <!-- Email -->
  <div class="col-12 col-md-4 col-lg-2 shadow d-flex flex-column align-items-center mt-4 h-100">
    <div class="card-body text-center d-flex flex-column align-items-center justify-content-center h-100">
      <div class="icon rounded-5 mb-2">
        <i class="bi bi-envelope-fill bg-success primary-btn"></i>
      </div>
      <p class="fs-18">Email</p>
      <p class="fs-18">Tevhrsolution@gmail.com</p>
    </div>
  </div>

  <!-- Address -->
  <div class="col-12 col-md-4 col-lg-2 shadow d-flex flex-column align-items-center mt-4 h-100">
    <div class="card-body text-center d-flex flex-column align-items-center justify-content-center h-100">
      <div class="icon rounded-5 mb-2">
        <i class="bi bi-geo-alt-fill bg-danger primary-btn"></i>
      </div>
      <p class="fs-18">Office Address</p>
      <p class="fs-18 text-center">Vilangudi,Madurai, Tamil Nadu</p>
    </div>
  </div>

  <!-- Live Chat -->
  <div class="col-12 col-md-4 col-lg-2 shadow d-flex flex-column align-items-center mt-4 h-100">
    <div class="card-body text-center d-flex flex-column align-items-center justify-content-center h-100">
      <div class="icon rounded-5 mb-2">
        <i class="bi bi-chat-left-fill bg-orange primary-btn"></i>
      </div>
      <p class="fs-18">Live Chat</p>
      <p class="fs-18">Chat with our team</p>
    </div>
  </div>
</div>




<section class="location mt-5">
  <div class="row w-100 m-0 mt-2 d-flex flex-column align-items-center justify-content-center h-100">
    <div class="col text-center d-flex flex-column align-items-center justify-content-center ">
      <img src="./assets/images/address.png" alt="Location" class="img-fluid map mb-3" style="max-width: 90%; height: 70%;">
     <div class="btn primary-btn ">
  <a href="https://www.google.com/maps/place/X32M+VPC+Vilangudi,+Madurai,+Tamil+Nadu"
     target="_blank"
     style="color: inherit; text-decoration: none;">
    View on Map
  </a>
</div>

    </div>
  </div>
</section>


<section class="enqury">
    <div class="heading ">
        <h2 class="fs-30 text-white text-center">
        Quick Query
    </h2>
    <p class="text-white text-center">Have a question? Send us a message and we'll get back to you quickly.</p>
    </div>

  <form action="./contactus.php" class="container form mt-5" method="post" class="container mt-5" style="max-width: 600px;">
  <div class="mb-3">
    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
  </div>

  <div class="mb-3">
    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
  </div>

  <div class="mb-3">
    <textarea name="message" rows="5" class="form-control" placeholder="Your Message" required></textarea>
  </div>

  <div class="text-center">
    <input type="submit" value="Submit" class="btn primary-btn px-5">
  </div>
</form>

</section>



<?php
include('./includes/footer.php');
?>