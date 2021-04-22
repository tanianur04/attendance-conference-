<?php
include_once "includes/session.php"?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href = "css/site.css" />

    <title>Attendance - <?php echo $title?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container-md">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto">
            <a class="nav item nav-link active" href="index.php">Home<span class="sr-only"></span></a>
          </div>
          <div class="navbar-nav ml-auto">
            <?php
              if(!isset($_SESSION['userid'])){
            ?>
              <a class="nav-item nav-link" href="login.php">Login<span class="sr-only"></span></a>
            <?php } else { ?>
              <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span>
              <a class="nav-item nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </nav>
    <br>
  </body>
</html>