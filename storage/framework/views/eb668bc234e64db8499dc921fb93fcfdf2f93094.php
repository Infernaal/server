<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Admin Panel | Book Harbor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="<?php echo e(asset('css/admin-panel.css')); ?>" rel="stylesheet">
        <script src="<?php echo e(asset('js/admin-panel.js')); ?>"></script>
        <link rel="icon" href="<?php echo e(asset('image/admin-panel-favicon.png')); ?>" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <header>
        <li class="nav-item active">
            <a class="nav-link" href="/catalogues"><img src="<?php echo e(asset('image/icon-catalog.png')); ?>" width="20" height="20"></img> Catalogues</a>
        </li>
    </header>
    <body class="hero-anime">	
        <div class="navigation-wrap bg-light start-header start-style">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <img src="<?php echo e(asset('image/admin-panel.png')); ?>" height="32" width="32" alt=""> admin
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto py-4 py-md-0">
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                        <a class="nav-link" href="/">Home</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Add Information</a>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Edit Information</a>
                                    </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="#">Delete Information</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>		
                    </div>
                </div>
            </div>
        </div>
        <div class="section full-height">
            <div class="absolute-center">
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                    <h1><span>A</span><span>d</span><span>m</span><span>i</span><span>n</span> <span>T</span><span>o</span><span>o</span><span>l</span><br>
                    <span>b</span><span>y</span> <span>Book</span> <span>Harbor</span></h1>
                    <p>Infernum Co.</p>	
                            </div>	
                        </div>		
                    </div>		
                </div>
                <div class="section mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div id="switch">
                                    <div id="circle"></div>
                                </div>
                            </div>	
                        </div>		
                    </div>			
                </div>
            </div>
        </div>
    </body>
</html><?php /**PATH D:\OSPanel\domains\serverODZ\resources\views/admin-panel.blade.php ENDPATH**/ ?>