<?php
session_start();

if (isset($_SESSION['id_user']) || isset($_SESSION['id_company'])) {
  header("Location: index.php");
  exit();
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>BIT SindriPlacement Portal</title>
  <link href="img/logo.png" rel="icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->

  <?php

  include 'php/head.php'

  ?>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page bg-blue-100 text-white">


  <!-- <header> -->



  <?php

  include 'php/header.php'

  ?>



  <!-- </header> -->
  <div class="login-box hello">
    <div class="login-logo ">

      <a href="index.php" style="color:black"><b>Placement Portal</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body bg-blue-200 text-black ">
      <p class="login-box-msg text-2xl text-black">Student Login</p>

      <form method="post" action="checklogin.php " class="text-xl">
        <div class="form-group has-feedback">
          <input type="email" id="large" class="form-control" id="email" name="email" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="large" class="form-control" id="password" name="password" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <style>
          #large {
            font-size: medium;


          }
        </style>
        <div class="row ">
          <div class="col-xs-8">
            <a href="#">Forgot your password?</a>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <br>

      <?php
      //If User have successfully registered then show them this success message
      //Todo: Remove Success Message without reload?
      if (isset($_SESSION['registerCompleted'])) {
      ?>
        <div>
          <p id="successMessage" class="text-center">You Have Registered Successfully! Your Account Approval Is Pending By Placement-Officer</p>
        </div>
      <?php
        unset($_SESSION['registerCompleted']);
      }
      ?>
      <?php
      //If User Failed To log in then show error message.
      if (isset($_SESSION['loginError'])) {
      ?>
        <div>
          <p class="text-center">Invalid Email/Password! Try Again!</p>
        </div>
      <?php
        unset($_SESSION['loginError']);
      }
      ?>

      <?php
      //If User Failed To log in then show error message.
      if (isset($_SESSION['userActivated'])) {
      ?>
        <div>
          <p class="text-center">Your Account Is Active. You Can Login</p>
        </div>
      <?php
        unset($_SESSION['userActivated']);
      }
      ?>

      <?php
      //If User Failed To log in then show error message.
      if (isset($_SESSION['loginActiveError'])) {
      ?>
        <div>
          <p class="text-center"><?php echo $_SESSION['loginActiveError']; ?></p>
        </div>
      <?php
        unset($_SESSION['loginActiveError']);
      }
      ?>

    </div>

    <a class="text-xl text-black" href="register-candidates.php">Create new account</a>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
  <!-- iCheck -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#successMessage:visible").fadeOut(8000);
    });
  </script>



  <!-- footer starts -->

  <?php

  include 'php/footer.php';
  ?>
  <!-- footer ends -->
</body>

</html>