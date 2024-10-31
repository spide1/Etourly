<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Account - Travel Site</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- Custom CSS -->
  <style>
    /* Add your custom styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #f05b5b; /* OYO red color */
    }

    .profile-section {
      margin-bottom: 30px;
    }

    .profile-section h3 {
      color: #007bff; /* Blue color */
    }

    .profile-section .icon {
      margin-right: 10px;
      color: #007bff; /* Blue color */
    }

    /* Center align logout button */
    .logout-button {
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">Travel Site</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <!-- Language Selector Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Language
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#" onclick="setLanguage('en')">English</a>
              <a class="dropdown-item" href="#" onclick="setLanguage('fr')">French</a>
              <!-- Add more language options as needed -->
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav></header>
  @if(session('message'))
  <div class="alert alert-danger">{{session('message')}}</div>
@endif
@if(@isset($allInfo))
  

  <div class="container">
    <h2 id="account-title">My Account</h2>

    <!-- Profile Section -->
@foreach($allInfo as $user)
<div class="profile-section">
  <h3><i class="fas fa-user-circle icon"></i>Profile Information</h3>
  <p>Name: {{ $user->name }}</p>
  <p>Email: {{ $user->email }}</p>
  <p>Phone: {{ $user->phone }}</p>
  <!-- Add more fields as needed -->
  <a href="{{url('/edit_reg')}}{{$user->user_id}}" class="btn btn-primary">Edit Profile</a>
  <a href="{{url('/changepassword')}}{{$user->user_id}}">Change Password?</a>
</div>
@endforeach
@endif
    <!-- Bookings Section -->
    @if(@isset($bookingInfo))
    @foreach ($bookingInfo as $rec)
          <div class="profile-section">
      <h3><i class="fas fa-bookmark icon"></i>My Bookings</h3>
      <div class="card">
        <div class="card-body">
          <p>Name: {{ $rec->name }}</p>
          <p>Email: {{ $rec->email }}</p>
          <p>User: {{ $rec->user }}</p>
          <p>Phone: {{ $rec->phone }}</p>
          <p>Passport Image: <img src="{{$rec->p_image}}" alt="Passport Image" height="100" width="150px"></p>
          <p>Identity Number: {{ $rec->id_no }}</p>
          <p>Tours: {{ $rec->tours }}</p>
          <p>Registration Code: {{ $rec->registration_code }}</p>
          <p>Booking Status: {{ $rec->auth }}</p>
          <a href="{{url('/display_booking')}}{{$rec->user_id}}" class="btn btn-primary">Click to SEE more info</a>
        </div>
      </div>
    </div>
    @endforeach
  
    @endif

    <!-- Preferences Section -->
    {{-- <div class="profile-section">
      <h3><i class="fas fa-cog icon"></i>My Preferences</h3>
      <p>Notification Preferences: On</p>
      <p>Language: English</p>
      <p>Theme: Light</p>
      <button class="btn btn-primary">Edit Preferences</button>
    </div>
   --}}
    <!-- Logout Section -->
    <div class="profile-section logout-button">
      <a href="{{url('/logout')}}" class="btn btn-warning btn-lg " role="button" aria-pressed="true">Logout</a>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function setLanguage(language) {
      // Send a request to the server to set the language
      $.get('/lang/' + language, function(data) {
        // Reload the page to reflect the new language
        location.reload();
      });
    }
  </script>
</body>
</html>
