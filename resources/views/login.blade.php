<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        /* Custom styles to mimic your login page */
        body {
            background-image: url('./assets/images/pexels.jpg'); /* Replace with your image path */
    background-size: cover; /* Adjust the background image to cover the entire body */
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f2f5f8; /* Sweet background color */
    margin: 0;
    padding: 0;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            color: #ff6d00; /* Orange */
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: bold;
        }
        .container {
            margin-top: 30px;
            max-width: 700px;
        }
        .card {
    height: 300px; /* Reduced height */
    width: 500px; /* Reduced width */
    border: none;
    border-radius: 30px;
    box-shadow: 0 4px 8px rgba(9, 9, 9, 0.1);
    margin: 0 auto; /* Center the card horizontally */
}
        .card-body {
            padding: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            padding: 10px;
        }
        .btn-primary {
            background-color: #ff6d00; /* Orange */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
       /* Add hover effect to the login button */
.btn-primary:hover {
    background-color: #e65c00; /* Darker shade of Orange */
    transform: translateY(-2px); /* Move button slightly upwards on hover */
    box-shadow: 0 4px 8px rgba(9, 9, 9, 0.1); /* Add a subtle shadow on hover */
}

        .login-heading {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
            transition: color 0.3s ease; /* Hover effect */
        }
        .login-heading:hover {
            color: #ff6d00; /* Orange on hover */
        }
        .form-text {
            text-align: center;
            margin-top: 20px;
        }
        /* Custom navbar styles */
        .custom-navbar {
            background-color: #ff6d00; /* Orange */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand-custom {
            color: #fff; /* White text */
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-nav-custom .nav-link {
            color: #fff; /* White text */
            font-weight: bold;
            margin-left: 20px; /* Space between links */
        }
    </style>
</head>
<body>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif
    <nav class="navbar navbar-expand-lg custom-navbar">
        <a class="navbar-brand navbar-brand-custom" href="{{url('/index')}}">
            <img src="./assets/images/logo.svg" alt="Tourly logo" style="height: 40px;"> <!-- White logo -->

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto navbar-nav-custom">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#destination">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#package">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="login-heading">Login to your Tourly Account</h4>
                <form method="post" action="{{url('/login_data')}}">
                    @csrf 
                    <div class="form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Email or Phone">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password"  class="form-control" placeholder="Password">
                    </div>
                    <div>
                        <button class="btn btn-md btn-primary btn-block">Login</button>
                    </div>
                </form>
                <div class="form-text">
                    <a href="{{url('/register')}}">Create New Account</a> | <a href="{{url('/changepassword')}}">Forgot Password?</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>