<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ url('./assets/css/styles.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 10px;
        }
        .btn-custom {
            background-color: #0062E6;
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: #005cbf;
        }
        .addCustomer {
            float: right;
        }
    </style>
</head>
<body>


    <div id="app" class="d-flex flex-column">
        @include('dashboard.layouts.header')
        <div class="d-flex flex-grow-1">
            @include('dashboard.layouts.sidebar')
            <div id="content" class="p-4 flex-grow-1">
                <div class="container">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h2>All Customer</h2>
                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('addCustomer.page') }}" class="btn btn-primary addCustomer">Add Customer</a>
                        </div>
                    </div>

                    @include('validate')

                    <form action="{{ route('CustomerSearch.page') }}" method="GET" role="search">
                        <div class="input-group mb-3">
                            <input type="search" name="search" class="form-control" placeholder="Search Movie..." aria-label="Search for movies" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i> Search</button>
                            </div>
                        </div>
                    </form>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name </th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                               @forelse ( $custommer as $custommer )
                                <tr>
                                    <td>{{ $custommer->first_name }} {{ $custommer->last_name }}</td>
                                    <td>{{ $custommer->email }}</td>
                                    <td>{{ $custommer->phone }}</td>
                                    <td>
                                        <a href="{{ route('viewCustomer.page', $custommer->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> </a>
                                        <a href="{{ route('custommer-destroy', $custommer->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> </a>
                                    </td>
                                </tr>
                               @empty
                                   
                               @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ url('./assets/js/scripts.js') }}"></script>
</body>
</html>
