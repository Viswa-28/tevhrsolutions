<a href="./clients.php" class="back-btn"><i class="bi bi-arrow-left-circle-fill"></i></a>
<?php
include('../config.php');
include('./includes/header.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM clients WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // $name = $row['name'];
        $description = $row['description'];
        $image = $row['logo_image'];
        $payment_image = $row['payment_image'];
        $hr1 = $row['hr1_name'];
        $hr2 = $row['hr2_name'];
        $hr1_number = $row['hr1_number'];
        $hr2_number = $row['hr2_number'];
    } else {
        echo "Client not found.";
        exit;
    }
} else {
    echo "Invalid request.";
    exit;
}
?>

<div class="row logo">
    <div class="col text-center">
        <img src="./assets/uploads/<?php echo $image; ?>" class="img-fluid" alt="">
    </div>
</div>

<div class="row payment-chart my-5">
    <div class="col">
        <h2 class="fs-70 text-black text-center mb-3">pay out Chart</h2>
        <img src="./assets/uploads/<?php echo $payment_image; ?>" class="img-fluid payment" alt="">
    </div>
</div>


<div class="row apply" >

       <div class="col">
        <h2 class="fs-70 text-black text-center mb-3">Apply Now</h2>
       <form action="./new-apply.php" method="POST" >
        <input type="text" name="client-name" placeholder="Enter Your Name" required>
       <div class="gender d-flex align-items-center gap-3">
         <input type="radio" name="gender" value="male" required> 
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female" required> 
        <label for="female">Female</label>
       
       </div>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="tel" name="phone" placeholder="Enter Your Phone Number" required>
        <input type="text" name="address" placeholder="Enter Your Address" required>
        <div class="form-container d-flex gap-3">
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="state" placeholder="State" required>
        </div>
        
        <input type="submit" value="Submit" class="btn btn-primary w-25 ms-auto me-auto d-block">
       </form>
       </div> 

</div>




<div class="support">
    <div class="col text-center d-flex flex-column align-items-center justify-content-center gap-4">
        <h2 class="fs-70 text-black mb-3"> Support</h2>

       <div class="first d-flex gap-5  mb-3">
        <h3 class="text-black"><?php echo $hr1; ?></h3>
        <p class="text-black primary-btn"><i class="bi bi-telephone-fill ms-2"></i> <?php echo $hr1_number; ?></p>
       </div>

       <div class="second d-flex justify-content-between gap-5  mb-3">
        <h3 class="text-black"><?php echo $hr2; ?></h3>
        <p class="text-black primary-btn"><i class="bi bi-telephone-fill ms-2"></i> <?php echo $hr2_number; ?></p>
       </div>
    </div>
</div>
<?php
include('./includes/footer.php');
?>