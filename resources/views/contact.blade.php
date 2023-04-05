<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Login | Book Harbor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/contact.css') }}" rel="stylesheet">
        <script src="{{ asset('js/file.js') }}"></script>
        <script src="{{ asset('js/contact.js') }}"></script>
        <link rel="icon" href="{{ asset('image/favicon.png') }}" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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
                        <a class="nav-link" href="/"><img src="{{ asset('image/icon-home.png') }}" width="20" height="20"></img> Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#about"><img src="{{ asset('image/icon-about-us.png') }}" width="20" height="20"></img> About Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="background">
            <div class="container">
              <div class="screen">
                <div class="screen-header">
                  <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                  </div>
                </div>
                <div class="screen-body">
                  <div class="screen-body-item left">
                    <div class="app-title">
                      <span>CONTACT</span>
                      <span>US</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : +380 99 712 64 20</div>
                  </div>
                  <div class="screen-body-item">
                    <div class="app-form">
                      <div class="app-form-group">
                        <input id="name-input" class="app-form-control" placeholder="NAME" value="Roman Miahkykh">
                      </div>
                      <div class="app-form-group">
                        <input id="email-input" class="app-form-control" placeholder="EMAIL">
                      </div>
                      <div class="app-form-group">
                        <input id="contact-input" class="app-form-control" placeholder="CONTACT NO.">
                      </div>
                      <div class="app-form-group message">
                        <input id="message-input" class="app-form-control" placeholder="MESSAGE">
                      </div>
                      <div class="app-form-group buttons">
                        <button class="app-form-button" onclick="resetForm()">CANCEL</button>
                        <button class="app-form-button">SEND</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="credits">
                inspired by
                <a class="credits-link" href="/" target="_blank">
                  <svg class="dribbble" viewBox="0 0 200 200">
                    <g stroke="#ffffff" fill="none">
                      <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
                      <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
                      <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
                      <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
                    </g>
                  </svg>
                  Book Harbor
                </a>
              </div>
            </div>
          </div>
    </body>
</html>