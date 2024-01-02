<style>
  .btn-warning{
    background-color: #FF7900;
    color: #fff;
    border: none;
    box-shadow: none;
  }
  .btn-warning:hover{
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
    <a class="navbar-brand me-2" href="<?=url('/')?>">
      <img
        src="<?= asset('asset/img/SStream.svg')?>"
        height="30"
        alt="MDB Logo"
        loading="lazy"
        style="margin-top: -1px;"
      />
    </a>

    <!-- Toggle button -->
    <button
      data-mdb-collapse-init
      class="navbar-toggler"
      type="button"
      data-mdb-target="#navbarButtonsExample"
      aria-controls="navbarButtonsExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
    <i class="bi bi-justify"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse align-items-center" id="navbarButtonsExample">
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
      <li class="nav-item">
          <a class="nav-link text-white" href="<?=url('/')?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?=APP_URL?>Teams">Teams</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?=url('/About')?>">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?=url('/Contact')?>">Contact</a>
        </li>
      </ul>
      <!-- Left links -->

      <div class="d-flex align-items-center">
          <a class="text-white text-decoration-none px-3 me-2" href="<?=url('/Auth/login')?>">Login</a> 
        
        <button data-mdb-ripple-init type="button" class="btn btn-warning me-3">
        <i class="bi bi-box-arrow-left"></i><a href="<?=url('/Auth')?>"><span class=" ps-1 text-white">Register</span></a>
        </button>
        
      </div>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<script>
    // Initialization for ES Users
import { Collapse, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Collapse, Ripple });
</script>
