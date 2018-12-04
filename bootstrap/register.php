<?php
require('db.php');

//start session
if (!isset($_SESSION)) {
  session_start();
}

//check if register fields have been submitted
if ($_POST['email'] != null && $_POST['username'] != null && $_POST['password'] != null) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  //Filter email
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

  //Filter username
  $username = filter_var($username, FILTER_SANITIZE_STRING);

  //encrypt $password
  $password = password_hash($password, PASSWORD_BCRYPT);

  //add entry into database
  $sql = "INSERT INTO users (email,username,password) VALUES ('$email','$username','$password')";
  $db->exec($sql);

  header("Location: login.php");
}

//add column active to db. set active to 0 by default.
//send email verification to user, after link has been click, set active to 1.
//active 0 will display <alert> informing user their email has not been activated and they need to verify interface
//Include email resend in the alert. Inform the user they will be logged out once pressing ok.
//active 1 will display nothing. Give them a congratz message after pressing on the link to verify their email.

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="nav-link navbar-brand js-scroll-trigger" href="index.php">Homepage</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item m-xl-auto">
              <form class="m-xl-auto" action="login.php" method="post">
                <input class="btn btn-primary m-xl-auto" type="submit" name="" value="Login">
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Register -->
    <header class="masthead">
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center jumbotron">
          <h3 class="display-4 mx-auto my-0 text-uppercase">Register Now</h3><br/>
          <form action="register.php" method="post">
            <div class="mx-auto text-center">
              <input class="form-control flex-fill" type="text" name="email" placeholder="Enter your email" required="required">
            </div><br/>
            <div class="mx-auto text-center">
              <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" type="text" name="username" placeholder="Enter your username" required="required">
            </div><br/>
            <div class="mx-auto text-center">
              <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="txtNewPassword" type="password" name="password" placeholder="Enter your password" required="required">
            </div><br/>
            <div class="mx-auto text-center">
              <input class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="txtConfirmPassword" onChange="checkPasswordMatch();" type="password" name="checkpassword[user_pass2]" placeholder="Confirm your password" required="required">
            </div><br/>
            <div class=class="registrationFormAlert" id="divCheckPasswordMatch"></div><br/>
            <div class="mx-auto text-center">
              <input id="registerbutton" class="btn btn-primary m-xl-auto" type="submit" name="register" value="Register">
            </div>
          </form>
        </div>
      </div>
    </header>

    <!-- Contact Section -->
    <section id="contact" class="contact-section bg-black">
      <div class="container">

        <div class="row">

         <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Business</h4>
                <hr class="my-4">
                <div class="small text-black-50"><a href="#">Woods Computing LLC</a></div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-envelope text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Email</h4>
                <hr class="my-4">
                <div class="small text-black-50">
                  <a href="#">noahcwoods@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+1 (814) 441-6411</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="https://www.instagram.com/noahcwoods" class="mx-2">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="https://www.facebook.com/noah.woods.921" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.github.com/rmrfspaceslash" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; Woods Computing LLC 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>

  </body>

</html>
