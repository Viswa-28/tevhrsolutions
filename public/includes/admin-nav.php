<?php
// include('config.php');
include('./includes/header.php');
$server = basename($_SERVER['PHP_SELF']);

?>

<body>
    <header class="h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent w-100 ">
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
                            <a class="nav-link <?php echo $server === 'dashboard.php' ? 'active' : ''; ?>" href="../dashboard.php">dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $server === 'clients-dash.php' ? 'active' : ''; ?>" href="./clients-dash.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $server === 'applications.php' ? 'active' : ''; ?>" href="../applications.php">Applications</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $server === 'enquiry.php' ? 'active' : ''; ?>" href="../enquiry.php">Enquiry</a>
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
    <!-- <script src="/assets/js/common.js"></script> -->

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