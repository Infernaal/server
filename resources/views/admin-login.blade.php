<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Admin Login | Book Harbor</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/admin-login.css') }}" rel="stylesheet">
        <script src="{{ asset('js/login.js') }}"></script>
        <link rel="icon" href="{{ asset('image/admin-panel-favicon.png') }}" sizes="16x16" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
        <div id="form-main-wrapper">
            <div class="form-container">
                <div class="admin-avtar">
                    <h1>Admin Panel</h1>
                </div>
    
                <div class="signin-status d-none">
                    <p id="status-desc">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="form-wrapper">
                    <div class="form-con form">
                        <form action="{{ route('admin-panel') }}" method="POST">
                            @csrf
                            <div class="field-con">
                                <label for="admtext">Username </label>
                                <input type="text" id="admtext" name="username" />
                            </div>
                            <div class="field-con">
                                <label for="passkey">Password: </label>
                                <input type="password" id="passkey" name="password" />
                            </div>
                            <div class="flex form-btn-con">
                                <span class="remember-me">
                                    <input type="checkbox" name="remember-me" id="rem-me" /> <label for="rem-me"><span>Remember Me</span></label>
                                </span>
                                <div class="sub-btn-wrap">
                                    <input type="submit" class="form-submit" value="Sign In" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="form-con add-links">
                    <a href="/admin-forget-password" title="">Forget password?</a>
                    <a href="/" title="Back to site">Back to Site</a>
                </div>
            </div>
        </div>
    </body>
</html>