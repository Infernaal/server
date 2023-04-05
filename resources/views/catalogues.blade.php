<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Catalogue | Book Harbor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/catalogues.css') }}" rel="stylesheet">
        <script src="{{ asset('js/file.js') }}"></script>
        <script src="{{ asset('js/catalogues.js') }}"></script>
        <link rel="icon" href="{{ asset('image/favicon.png') }}" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <header>
        <nav class="navbar navbar-expand-custom navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="/"><img src="{{ asset('image/icon-logo.png') }}" width="20" height="20"></img> Book Harbor</a>
            <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                    <li class="nav-item active">
                        <a class="nav-link" href="/catalogues"><img src="{{ asset('image/icon-catalog.png') }}" width="20" height="20"></img> Catalogues</a>
                    </li>
                    <li class="nav-item">
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
    </header>
    <section class="showcase-area" id="showcase">
        <div class="showcase-container">
          <h1 class="main-title" id="home">Book Catalogue</h1>
        </div>
    </section>
    <body ng-app='myApp'>
        <div class="main" ng-controller="MainController">
            <div class="container">
                <div ng-repeat="product in products" class="col-md-6">
                    <div class="thumbnail">
                        <img ng-src="@{{ product.cover }}">
                        <p class="title">@{{ product.name }}</p>
                        <p class="price grow">@{{ product.price | currency }}</p>
                        <p class="date">@{{ product.pubdate | date }}</p>
                        <div class="rating">
                            <button style="color: white;
                            background-color: rgb(91,51,80);
                            text-align:center;
                            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                            font-size: 16px;
                            height: 2em;
                            width: 7em;
                            border-radius: 10px;
                            border: none;
                            box-shadow: 1px 1px 15px whitesmoke;
                            cursor: pointer;
                            text-decoration: none;">More</button>
                            <p class="likes" ng-click="plusOne($index)">+ @{{ product.likes }} </p>
                            <p class="dislikes" ng-click="minusOne($index)">- @{{ product.dislikes }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>