<?php
$server = basename($_SERVER['PHP_SELF']);

// Dynamic page titles
$pageTitles = [
  'index.php' => 'Home',
  'clients.php' => 'Clients',
  'about.php' => 'About Us',
  'contact.php' => 'Contact',
];
$title = $pageTitles[$server] ?? 'Website';

// Dynamic CSS map
$cssMap = [
  'index.php' => './assets/css/style.css',
  'clients.php' => './assets/css/clients.css',
  'about.php' => './assets/css/about.css',
  'contact.php' => './assets/css/contact.css',
  'admin-login.php' => './assets/css/style.css',
  'create-admin.php' => './assets/css/dashboard.css',
  'clients-dash.php' => './assets/css/client-dash.css',
  'applications.php' => '../assets/css/applications.css',
  'enquiry.php' => '../assets/css/enquiry.css',
  'add-clients.php' => './assets/css/add.css',
  'edit-clients.php' => './assets/css/add.css',
  'details.php' => './assets/css/details.css',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?= htmlspecialchars($title) ?></title>

  <!-- Preconnects for performance -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://unpkg.com" crossorigin>
  <link rel="shortcut icon" href="./assets/images/footerlogo.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!-- AOS CSS -->
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

  <!-- Common CSS -->
  <link rel="stylesheet" href="./assets/css/common.css" />

  <!-- Page-specific CSS -->
  <?php if (isset($cssMap[$server])): ?>
    <link rel="stylesheet" href="<?= $cssMap[$server] ?>">
  <?php endif; ?>
</head>

<body>

  <!-- Page content starts here -->



  <!-- Scripts at end of body -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
