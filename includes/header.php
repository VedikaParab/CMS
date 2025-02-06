<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cms</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center" href="/cms/">
      <img src="assets/images/cms_logo.png" alt="logo" style="height: 50px; margin-right: 10px;">
      <span style="font-family:'Times New Roman', serif; font-size: 24px; font-weight: bold;">CMS</span>
    </a>

    <!-- Toggler Button for Mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Content -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="logout.php" class="btn btn-danger px-3">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<?php get_message(); ?>
    