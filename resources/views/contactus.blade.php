<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f2f2f2; /* Light Grayish Cyan */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    .navbar {
      background-color: #ffffff; /* White */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      color: #007bff; /* Soft Blue */
      font-weight: bold;
      font-size: 24px;
    }

    .navbar-nav .nav-link {
      color: #333333; /* Dark Gray */
      font-weight: bold;
    }

    .container {
      margin-top: 30px;
      max-width: 700px;
    }

    .card {
      border: none;
      border-radius: 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 0 auto; /* Center the card horizontally */
    }

    .card-body {
      padding: 0px;
    }

    .form-group {
      margin-bottom: 0px;
    }

    .form-control {
      border-radius: 5px;
      padding: 10px;
    }

    .btn-primary {
      background-color: #007bff; /* Soft Blue */
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-weight: bold;
      text-transform: uppercase;
      transition: background-color 0.3s ease;
        
    }

    /* Add hover effect to the login button */
    .btn-primary:hover {
      background-color: #0056b3; /* Dark Blue */
      transform: translateY(-2px); /* Move button slightly upwards on hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow on hover */
    }

    .login-heading {
      color: #333333; /* Dark Gray */
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      margin-bottom: 30px;
      transition: color 0.3s ease; /* Hover effect */
    }

    .login-heading:hover {
      color: #555555; /* Gray on hover */
    }

    .form-text {
      text-align: center;
      margin-top: 20px;
    }

    /* Custom navbar styles */
    .custom-navbar {
    background-color: #007bff; /* Soft Blue */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 8px 16px; /* Adjusted padding */
  }

  .navbar-brand-custom,
  .navbar-nav-custom .nav-link {
    color: #ffffff; /* White text */
    font-weight: bold;
    transition: color 0.3s ease; /* Smooth transition for color change */
  }

  @media (max-width: 768px) {
    .navbar-brand-custom,
    .navbar-nav-custom .nav-link {
      margin-left: 0; /* Reset margin for mobile view */
    }
  }

    .navbar-brand-custom:hover,
  .navbar-nav-custom .nav-link:hover {
    color: #f8f9fa; /* Light Grayish Cyan on hover */
  }

    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #2c3e50; /* Soft Blue */
      color: #ffffff; /* White text */
      font-weight: bold;
      padding: 5px 0;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    
  </style>
</head>
<body>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif
<nav class="navbar navbar-expand-lg custom-navbar">
  <div class="container">
    <a class="navbar-brand navbar-brand-custom" href="#">
      Company Name
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
          <a class="nav-link" href="{{url('/index#')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#destination">Destination</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#package">Packages</a>
    </li>
        
      </ul>
    </div>
  </div>
</nav>

<main>
    <div class="container mt-5">
        <h2 class="login-heading">Contact Us</h2>
        <p>We'd love to hear from you! Fill out the form below to get in touch with us.</p>
        <form method="POST" action="{{ url('contactus_action') }}">
            @csrf
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

        </form>
          
      </div>
     
</main>
<footer>
    &copy; 2024 Tourly. All rights reserved.
  </footer>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
