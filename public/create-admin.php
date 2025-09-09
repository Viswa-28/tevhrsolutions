<?php
include('./includes/admin-nav.php');
include('./includes/header.php');
include('./config.php');

?>

<body>
    <div class="container d-flex justify-content-center flex-column align-items-center gap-3">
        <h2>Create Admin</h2>
        <form action="create-admin-quary.php" method="POST" class="admin-form">

<input type="text" name="name" placeholder="Enter Admin Name">
<input type="email" name="email" placeholder="Enter Admin Email">
<input type="password" name="password" placeholder="Enter Admin Password">
<input type="submit" value="Create Admin" name="submit" class="btn primary-btn">
</form>
    </div>
</body>