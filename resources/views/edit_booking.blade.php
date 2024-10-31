<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        /* Custom styles to mimic the previous page */
        body {
            background-color: #f6f7f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 400px;
        }
        .navbar {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            color: #ff6d00; /*  Orange */
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: bold;
        }
        .form-heading {
            color: #333;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            padding: 5px;
        }
        .btn-primary {
            background-color: #ff6d00; /*  Orange */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #e65c00; /* Darker shade of  Orange */
        }
    </style>
    <title>Register</title>
</head>
<body>  
    @if(@isset($user_info))
   <nav class="navbar navbar-expand-lg navbar-light">
       <div class="container">
           <a class="navbar-brand" href="#">Tourly</a>
           <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="nav navbar-nav navbar-right">
                   <li class="active"><a href="#">Home</a></li>
                   <li><a href="#">About</a></li>
                   <li><a href="#">Contact</a></li>
               </ul>
           </div>
       </div>
   </nav>
   <div class="container">
       <form action="{{url('/edit_booking_action')}}" method="post" enctype="multipart/form-data">
           @csrf
           @if($errors->any())
               <div class="alert alert-danger">
                   <ul>
                       @foreach($errors->all() as $error)
                           <li>
                               {{$error}}
                           </li>
                       @endforeach
                   </ul>
               </div>
           @endif
           <input type="hidden" name="hid" value="{{$user_info->user_id}}">
            <div class="form-group">
                <label for="name">Customer Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user_info->name}}" >
            </div>
            <div class="form-group">
                <label for="email">Customer Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user_info->email}}" >
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="phone" value="{{$user_info->phone}}">
            </div> 
            <div class="form-group">
                <label for="passport">Passport Size Photo:</label>
                <input type="file" id="passport" name="passport" >
                <img src="{{$user_info->p_image}}" alt="" class="mt-2 img-fluid" style="max-width: 250px;">
            </div> 
            <div class="form-group">
                <label for="id_no">ID Number:</label>
                <input type="text" class="form-control" id="id_no" name="id_no"  value="{{$user_info->id_no}}">
            </div> 
            <div class="form-group">
                <label for="identity">Identity Card:</label>
                <input type="file" id="identity" name="identity" >
                <img src="{{$user_info->i_image}}" alt="" class="mt-2 img-fluid" style="max-width: 250px;">
            </div> 
            <div class="form-group">
                <label for="tours">Select Trip:</label>
                
                <select name="tours" id="tours" class="form-control">
                    <option value="">Select</option>
                    <option value="LAKSHADWEEP"@if($user_info->tours == "LAKSHADWEEP")selected @endif>LAKSHADWEEP</option>
                    <option value="KASMIR"@if($user_info->tours == "KASMIR")selected @endif>KASMIR</option>
                    <option value="PURI TEMPLE"@if($user_info->tours == "PURI TEMPLE")selected @endif>PURI TEMPLE</option>
                    <option value="AGRA TAJ"@if($user_info->tours == "AGRA TAJ")selected @endif>AGRA TAJ</option>
                    <option value="MANALI"@if($user_info->tours == "MANALI")selected @endif>MANALI</option>
                  </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-register">Update</button>
                <button type="reset" class="btn btn-danger ml-2">Reset</button>
            </div>
       </form>
   </div>
   @endif
</body>
</html>
