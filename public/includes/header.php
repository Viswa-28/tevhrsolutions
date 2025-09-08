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
    } elseif ($server === 'admin-login.php') {
        echo '<link rel="stylesheet" href="./assets/css/style.css">';
    }
    elseif ($server === 'dashboard.php') {
        echo '<link rel="stylesheet" href="../assets/css/dashboard.css">';
    } elseif ($server === 'clients-dash.php') {
        echo '<link rel="stylesheet" href="./assets/css/client-dash.css">';
    } elseif ($server === 'applications.php') {
        echo '<link rel="stylesheet" href="../assets/css/applications.css">';
    } elseif ($server === 'enquiry.php') {
        echo '<link rel="stylesheet" href="../assets/css/enquiry.css">';
    }
    elseif ($server === 'add-clients.php') {
        echo '<link rel="stylesheet" href="./assets/css/add.css">';
    }
    elseif ($server === 'edit-clients.php') {
        echo '<link rel="stylesheet" href="./assets/css/add.css">';
    }
    elseif ($server === 'details.php') {
        echo '<link rel="stylesheet" href="./assets/css/details.css">';
    }
    elseif($server === 'applications.php') {
        echo '<link rel="stylesheet" href="./assets/css/applications.css">';
    }
    ?>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
</head>



</html>