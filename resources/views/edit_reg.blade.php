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
            padding: 10px;
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
    @if(@isset($edit_info))
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
       <form action="{{url('/edit_reg_action')}}" method="post">
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
           <h2 class="form-heading">Edit Informations</h2>
           <div class="form-group">
            <input type="hidden" name="hid" id="hid" value="{{$edit_info->user_id}}">
               <label for="name">Name:</label>
               <input type="text" class="form-control" id="name" name="name" value="{{$edit_info->name}}">
           </div>
           <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" class="form-control" id="email" name="email" value="{{$edit_info->email}}">
           </div>

           <div class="form-group">
               <label for="phone">Phone:</label>
               <input type="number" class="form-control" id="phone" name="phone" value="{{$edit_info->phone}}">
           </div>
           <button type="submit" class="btn btn-primary">Submit</button>
       </form>
   </div>
   @endif
</body>
</html>
