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
            background-color: #f6f7f9; /* Light gray */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333; /* Dark gray for text */
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
            color: #ff6d00; /* Orange */
            font-weight: bold;
            font-size: 24px;
        }
        .navbar-nav .nav-link {
            color: #333;
            font-weight: bold;
        }
        .form-heading {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 15px;
            padding: 5px;
        }
        .btn-primary {
            background-color: #ff6d00; /* Orange */
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #e65c00; /* Darker shade of Orange */
        }
        .btn-generate {
            background-color: rgb(6, 16, 131); /* Blue */
            color: #fff; /* White */
            border: none;
            border-radius: 5px;
            padding: 5px 15px;
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s ease;
        }
        .btn-generate:hover {
            background-color: #0056b3; /* Darker shade of blue */
        }
    </style>
    <title>Book</title>
</head>
<body>  
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
    <form action="{{url('/submit')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <h2 class="form-heading">BOOKING</h2>
        </div>

        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
    
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
    
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number (e.g., +9475182526)" required>
        </div>
    
        <div class="form-group">
          <label for="unique">Unique Registration Code:</label>
          <div class="input-group">
            <input type="text" class="form-control" readonly="true" id="unique" name="unique" placeholder="Enter your unique registration code..." required>
            <div class="input-group-append">
              <button class="btn btn-generate" type="button" onclick="generateUniqueCode()">Generate</button>
            </div>
          </div>
        </div>
    
        <div class="form-group">
          <label for="passport">Passport Size Photo:</label>
          <input type="file" class="form-control-file" id="passport" name="passport" required>
        </div>
    
        <div class="form-group">
          <label for="id_no">ID No:</label>
          <input type="text" class="form-control" id="id_no" name="id_no" placeholder="Please enter uploaded identity no.." required>
        </div>
    
        <div class="form-group">
          <label for="identity">Identity:</label>
          <input type="file" class="form-control-file" id="identity" name="identity" required>
        </div>
    
        <div class="form-group">
          <label for="trips">Select Trip:</label>
          <select name="tours" id="tours" class="form-control">
            <option value="">Select</option>
            <option value="LAKSHADWEEP">LAKSHADWEEP</option>
            <option value="KASMIR">KASMIR</option>
            <option value="PURI TEMPLE">PURI TEMPLE</option>
            <option value="AGRA TAJ">AGRA TAJ</option>
            <option value="MANALI">MANALI</option>
          </select>
        </div>
    
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script>
    function generateUniqueCode() {
      const length = 6; // Change the length as needed
      const characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
      let code = '';

      for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        code += characters.charAt(randomIndex);
      }

      document.getElementById('unique').value = code;
    }
  </script>
</body>
</html>
