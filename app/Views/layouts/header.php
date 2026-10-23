<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Muhula App</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/style.css') ?>">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Mobile Toggle Button (Visible on small screens) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#centeredNavbar" aria-controls="centeredNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Collapse Wrapper -->
    <div class="collapse navbar-collapse d-lg-flex" id="centeredNavbar">
      
      <!-- 1. Left Navigation (4 Links) -->
      <ul class="navbar-nav w-lg-100 nav-justified me-auto">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('services') ?>">Curriculum</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= base_url('contact') ?>">Talk to us</a>
        </li>
      </ul>

      <!-- 2. Centered Logo -->
      <a class="navbar-brand mx-lg-5 justify-content-lg-center w-lg-100 text-center" href="#">
        <img src="https://getbootstrap.com" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Navbar
      </a>

      <!-- 3. Right Navigation (4 Links - including Dropdown) -->
      <ul class="navbar-nav w-lg-100 nav-justified ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Careers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <!-- Dropdown Link -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More Links
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <?php if (session()->get('isLoggedIn')): ?>
              <!-- Visible ONLY when logged in -->
              <li><a class="dropdown-menu-item dropdown-item" href="<?= url_to('logout') ?>">Logout</a></li>
              <?php else: ?>
              <!-- Visible ONLY when logged out -->
              <li><a class="dropdown-menu-item dropdown-item" href="<?= url_to('login') ?>">Login</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-menu-item dropdown-item" href="<?= url_to('register') ?>">Register</a></li>
              <?php endif; ?>
          </ul>


        </li>
      </ul>

    </div>
  </div>
</nav>
