<style>
  .btn-warning {
    background-color: #FF7900;
    color: #fff;
    border: none;
    box-shadow: none;
  }

  .btn-warning:hover {
    background-color: #FF7900;
    border: none;
    box-shadow: none;
    color: #fff;
  }
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary text-white shadow-none" style="background: #004930 !important; z-index: 2;">
  <!-- Container wrapper -->
  <div class="container py-2">
    <!-- Navbar brand -->
    <a class="navbar-brand me-2" href="<?= url('/') ?>">
      <img src="<?= asset('asset/img/SStream.svg') ?>" height="30" alt="MDB Logo" loading="lazy" style="margin-top: -1px;" />
    </a>

    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
      <i class="bi bi-justify"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse align-items-center" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= APP_URL ?>Teams">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= url('/About') ?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= url('/Contact') ?>">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
      <div class="d-flex align-items-center">
        <?php
        if (isset($_SESSION['idUser'])) {
        ?>

          <div class="dropdown">
            <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
              <img src="<?= APP_URL ?>asset/uploads/userimage/<?= $_SESSION['userimage'] ?>" class="rounded-circle" height="45" alt="Black and White Portrait of a Man" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
              <?php if ($_SESSION['roleUser'] == 2) { ?>
                <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>Profile">My profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>Profile">Settings</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>Auth/logout">Logout</a>
                </li>
              <?php
              } else if ($_SESSION['roleUser'] == 1) {
              ?>
              <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>Dashboard">Dashboard</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>/Settings">Settings</a>
                </li>
                <li>
                  <a class="dropdown-item" href="<?= APP_URL ?>Auth/logout">Logout</a>
                </li>
              <?php
              }

              ?>
            </ul>
          </div>

        <?php

        } else {

        ?>

          <a class="text-white text-decoration-none px-3 me-2" href="<?= url('/Auth/login') ?>">Login</a>

          <button data-mdb-ripple-init type="button" class="btn btn-warning me-3">
            <i class="bi bi-box-arrow-left"></i><a href="<?= url('/Auth') ?>"><span class=" ps-1 text-white">Register</span></a>
          </button>
        <?php

        }
        ?>
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<script>
  // Initialization for ES Users
  import {
    Collapse,
    Ripple,
    initMDB
  } from "mdb-ui-kit";

  initMDB({
    Collapse,
    Ripple
  });
</script>