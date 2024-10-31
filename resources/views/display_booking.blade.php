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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            padding: 12px;
            vertical-align: middle;
            border-top: 1px solid #dee2e6;
        }

        .table th {
            background-color: #0056b3;
            color: #fff;
            font-weight: 500;
            text-transform: uppercase;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table img {
            max-width: 80px;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .table a {
            text-decoration: none;
            color: #0056b3;
            margin-right: 10px;
            transition: color 0.3s ease;
        }

        .table a:hover {
            color: #00264d;
        }
    </style>
</head>
<body>
    
    @if(@isset($dataInfo))
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
                    @foreach ($dataInfo as $info)
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
                            <a href="{{url('/delete')}}{{$info->user_id}}" class="btn btn-danger btn-small active"  aria-pressed="true">Cancel</a>
                            <a href="{{url('/edit_booking')}}{{$info->user_id}}" class="btn btn-info btn-small active"  aria-pressed="true">Edit</a>

                            <!-- Add more buttons here if needed -->
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
