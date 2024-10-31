<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1100px; /* Increased container width by 10% */
            margin: 50px auto;
            padding: 50px; /* Kept the padding same */
            background-color: #f0f8ff; /* Kept the background color same */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 15px; /* Kept the padding same */
            text-align: left;
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #0056b3; /* Kept the header background color same */
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    @if(@isset($information))
    <div class="container">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
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
                    @foreach ($information as $info)
                    <tr>
                        <td>{{$info->name}}</td>
                        <td><a href="mailto:{{$info->email}}">{{$info->email}}</a></td>
                        <td>{{$info->user}}</td>

                        <td><a href="tel:{{$info->phone}}">{{$info->phone}}</a></td>
                        <td><img src="{{$info->p_image}}" alt="Passport Image" height="600" width="650px"></td>
                        <td>{{$info->id_no}}</td>
                        <td>{{$info->tours}}</td>
                        <td>{{$info->registration_code}}</td>
                        <td>{{$info->auth}}</td>
                        <td>
                            <a href="{{url('/logout')}}">Logout</a>
                            <a href="{{url('/edit')}}{{$info->user_id}}">Edit</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endif
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
