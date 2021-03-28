<?php require APPROOT . '/views/includes/head.php'; ?>

<body style="background-image: url('<?= URLROOT ?>/public/img/banner.jpg');background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<?php require APPROOT . '/views/includes/navigation.php';?>


<!-- Main Content -->
<div class="container text-white d-flex" style="font-family: Titillium Web; height: 50vh">
  <div class="col-md-9 align-self-center ">
    <h1 class="" style="filter: drop-shadow(2px 2px 3px grey);" >
      Movico is a simple authentication system built in MVC PHP concept with Bootstrap 4
    </h1><br>
    <a href="<?= URLROOT?>/users/login"  class="btn btn-lg btn-success text-dark" style="background-color: #fcba03;border: none;">Sign In</a>
    &nbsp; Or &nbsp; 
    <a href="<?= URLROOT?>/users/register"  class="btn btn-lg btn-info" style="background-color: #03cafc;border: none">Sign Up</a>
  </div>
</div>

<!-- Footer as Copyright Declaration -->
  <footer class="footer bg-black small text-center text-white-50 mb-4 fixed-bottom sticky-bottom">
    <div class="container">
      Copyright © Fikri Miftah 2021
    </div>
  </footer>