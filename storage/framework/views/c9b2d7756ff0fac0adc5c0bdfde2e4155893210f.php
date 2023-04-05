<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Register | Book Harbor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/register.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/file.js')); ?>"></script>
        <link rel="icon" href="<?php echo e(asset('image/favicon.png')); ?>" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="/"><img src="<?php echo e(asset('image/icon-logo.png')); ?>" width="20" height="20"></img> Book Harbor</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item">
                        <a class="nav-link" href="/"><img src="<?php echo e(asset('image/icon-home.png')); ?>" width="20" height="20"></img> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><img src="<?php echo e(asset('image/icon-about-us.png')); ?>" width="20" height="20"></img> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><img src="<?php echo e(asset('image/icon-contact.png')); ?>" width="20" height="20"></i> Contact Us</a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/login"><img src="<?php echo e(asset('image/icon-login.png')); ?>" width="20" height="20"></i> Login</a>
                  </li>
                </ul>
            </div>
        </nav>
        <div class="fullcontent">
            <div class="headings">
              <h1>Book Harbor Registration Form</h1>
              <h2>Welcome to our book store registration form. Please fill out the information below to create your account.</h2>
            </div>
            <div class="formbox">
              <h3>Registration Form</h3>
              <form id="form" action="" method="POST" class="form-flex">
                <div class="form-col">
                  <label for="">First name</label>
                  <input type="text" name="firstname" class="asd" required/>
                  <label for="">Last name</label>
                  <input type="text" name="lastname" class="asd" required/>
                  <label for="">Phone Number</label>
                  <input type="text" name="phonenumber" class="asd" required/>
                </div>
                <div class="form-col">
                  <label for="">E-mail</label>
                  <input type="email" name="email" class="asd" required/>
                  <label for="">Username</label>
                  <input type="text" name="username" class="asd" required/>
                  <label for="">Password</label>
                  <input type="password" id="" name="password" class="asd" required/>
                  <label for="">Confirm Password</label>
                  <input type="password" id="" name="confirmpassword" class="asd" required/>
                  <input id="btn" type="submit" name="submit" value="Sign Up" class="mainbox" />
                  <label for="">Already have an account?</label>
                  <a href="/login" class="mainbox">Log In</a>
                </div>
              </form>
            </div>
          </div>
    </body>
    <footer>
      <div class="main">
        <div class="col1">
          <h3 class="heading">About the store</h3>
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#about">About us</a>
            </li>
            <li>
              <a href="#">FAQ</a>
            </li>
            <li>
              <a href="#">Return policy</a>
            </li>
            <li>
              <a href="#">Contact us</a>
            </li>
          </ul>
        </div>
    
        <div class="col2">
          <h3 class="heading">Language</h3>
          <div class="languages">
            <a href="#">Deutsch</a>
            <a href="#">English</a>
            <a href="#">Ukrainian</a>
            <a href="#">Russian</a>
          </div>
        </div>
    
        <div class="col3">
          <h3 class="heading">
            Get in touch
          </h3>
          <div class="social">
            <a href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </div>
        </div>
      </div>
    
      <p class="terms">
        <a href="#">Terms of purchase</a>
        <a href="#">Security and privacy</a>
        <a href="#">Newsletter</a>
      </p>
  </footer>
</html><?php /**PATH D:\OSPanel\domains\serverODZ\resources\views/register.blade.php ENDPATH**/ ?>