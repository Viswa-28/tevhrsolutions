<?php
$server = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        <?php
        if ($server === 'index.php') {
            echo 'Home';
        } elseif ($server === 'clients.php') {
            echo 'Clients';
        } elseif ($server === 'about.php') {
            echo 'About Us';
        } elseif ($server === 'contact.php') {
            echo 'Contact';
        } else {
            echo 'Website';
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <!-- CDN Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

    <!-- Common CSS -->
    <link rel="stylesheet" href="./assets/css/common.css" />

    <!-- Page-Specific CSS -->
    <?php
    if ($server === 'index.php') {
        echo '<link rel="stylesheet" href="./assets/css/style.css">';
    } elseif ($server === 'clients.php') {
        echo '<link rel="stylesheet" href="/assets/css/clients.css">';
    } elseif ($server === 'about.php') {
        echo '<link rel="stylesheet" href="/assets/css/about.css">';
    } elseif ($server === 'contact.php') {
        echo '<link rel="stylesheet" href="/assets/css/contact.css">';
    }
    ?>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent " >
  <div class="container">
    <a class="navbar-brand" href="/index.php">
      <img src="./assets/images/logo.png" alt="logo" class="logo img-fluid" />
    </a>

    <!-- Hamburger -->
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span> <!-- Bootstrap default icon -->
      <!-- Or custom: <i class="bi bi-list fs-1"></i> -->
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 gap-4 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="nav-link <?php echo $server === 'index.php' ? 'active' : ''; ?>" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $server === 'clients.php' ? 'active' : ''; ?>" href="/clients.php">Clients</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $server === 'about.php' ? 'active' : ''; ?>" href="/about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $server === 'contact.php' ? 'active' : ''; ?>" href="/contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </header>



    <!-- CDN Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!-- Common JS -->
    <script src="/assets/js/common.js"></script>

    <!-- Page-Specific JS -->
    <?php
    if ($server === 'index.php') {
        echo '<script src="./assets/js/script.js"></script>';
    } elseif ($server === 'clients.php') {
        echo '<script src="/assets/js/clients.js"></script>';
    } elseif ($server === 'about.php') {
        echo '<script src="/assets/js/about.js"></script>';
    } elseif ($server === 'contact.php') {
        echo '<script src="/assets/js/contact.js"></script>';
    }
    ?>
    <script>
        AOS.init();
    </script>
    
</script>

</body>
</html>