<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Book Harbor | Paradise for book hunters</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script src="{{ asset('js/file.js') }}"></script>
        <link rel="icon" href="{{ asset('image/favicon.png') }}" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="/"><img src="{{ asset('image/icon-logo.png') }}" width="20" height="20"></img> Book Harbor</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item">
                        <a class="nav-link" href="/catalogues"><img src="{{ asset('image/icon-catalog.png') }}" width="20" height="20"></img> Catalogues</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#about"><img src="{{ asset('image/icon-about-us.png') }}" width="20" height="20"></img> About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><img src="{{ asset('image/icon-contact.png') }}" width="20" height="20"></i> Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><img src="{{ asset('image/icon-login.png') }}" width="20" height="20"></i> Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="showcase-area" id="showcase">
            <div class="showcase-container">
              <h1 class="main-title" id="home">Unlock the secrets of the world with our books!</h1>
              <p class='second-title'>The book store is your reliable guide to the world of knowledge</p>
              <a href="/catalogues" class="btn btn-primary">Catalogues</a>
            </div>
        </section>
        <section id="about">
            <div class="about-wrapper container">
              <div class="about-text">
                <p class="small">About Us</p>
                <h2>BOOK HARBOR</h2>
                <p>
                    Book Harbor is a bookstore dedicated to providing an exceptional shopping experience for book lovers of all ages and interests. 
                    With a wide selection of books, knowledgeable and friendly staff, and a range of book-related merchandise, we strive to create a warm and welcoming atmosphere for our customers. 
                    We're committed to fostering a love of reading in our community through book clubs, author signings, and other events. 
                    Thank you for choosing Book Harbor as your bookstore of choice!
                </p>
              </div>
              <div class="about-img">
                <img src="../image/book-harbor.jpg" alt="Book Harbor" />
              </div>
            </div>
        </section>
        <section id="container">
            <div class="row">
              <section class="col-md-6 my-5">
                <center><div class="card shadow p-5 pad">
                  <h3 class="mb-3">Subscribe to our Newsletter</h3>
                  <p class="text-justify">Signup for our weekly newsletter to get the latest news, updates and amazing offers deliverd directly in your inbox.</p>
                  <form>
                    <input type="text" class="form-control" placeholder="Enter Your Email">
                    <button type="submit" class="btn btn-danger btn-block mt-3 rounded-pill">Subscribe</button>
                </div></center>
              </section>
            </div>
        </section>
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
</html>