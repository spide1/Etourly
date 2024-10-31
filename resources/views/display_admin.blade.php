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
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      font-size: 16px;
    }
    .container {
      max-width: 1400px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #f05b5b; 
    }
    .profile-section {
      margin-bottom: 30px;
    }
    .profile-section h3 {
      color: #007bff;
    }
    .profile-section .icon {
      margin-right: 10px;
      color: #007bff;
    }
    .logout-button {
      text-align: center;
      margin-top: 30px;
    }
    /* Table Styling */
    .table-responsive {
      margin-top: 20px;
    }
    .table thead th {
      background-color: #007bff;
      color: #fff;
    }
    .table-striped tbody tr:nth-of-type(odd) {
      background-color: #f2f2f2;
    }
    /* Navbar */
    .navbar-brand {
      font-weight: bold;
    }
  </style>
</head>
<body>
 
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container"> 
        <a class="navbar-brand" href="#">Travel Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#" onclick="setLanguage('en')">English</a>
                <a class="dropdown-item" href="#" onclick="setLanguage('fr')">French</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
  @endif
    <h2 id="account-title">Clients Booking</h2>
    <!-- Profile Section -->
    <div class="profile-section">
      <h3><i class="fas fa-user-circle icon"></i>Booking Informations</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
                <th>Sl_No..</th>
              <th>Name</th>
              <th>Email</th>
              <th>User</th>
              <th>Phone</th>
              <th>Passport Photo</th>
              <th>Identity Number</th>
              <th>Booking Destination</th>
              <th>Registration Code</th>
              <th>Booking Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @php
			$i=1;
			@endphp
            @foreach($admin_info as $user)
            <tr>
              <td>@php echo $i;$i++; @endphp</td>
              <td>{{$user->name}}</td>
              <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
              <td>{{$user->user}}</td>
              <td><a href="tel:{{$user->phone}}">{{$user->phone}}</a></td>
              <td><img src="{{$user->p_image}}" alt="Passport Image" height="100"></td>
              <td>{{$user->id_no}}</td>
              <td>{{$user->tours}}</td>
              <td>{{$user->registration_code}}</td>
              <td>{{$user->auth}}</td>
              <td>
                <span style="padding-bottom: 10px;">
                  <a href="{{url('/confirm')}}{{$user->user_id}}" class="btn btn-success btn-sm">Confirm</a>
                </span>
                <span>
                <a href="{{url('/cancel')}}{{$user->user_id}}" class="btn btn-danger btn-sm">Reject</a>
                </span>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- Logout Section -->
    <div class="profile-section logout-button">
      <a href="{{url('/logout')}}" class="btn btn-warning btn-lg" role="button" aria-pressed="true">Logout</a>
    </div>
  </div>
  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function setLanguage(language) {
      $.get('/lang/' + language, function(data) {
        location.reload();
      });
    }
  </script>
</body>
</html>
