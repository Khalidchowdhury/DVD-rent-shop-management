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
    </style>
</head>
<body>


    <div id="app" class="d-flex flex-column">
        @include('dashboard.layouts.header')
        <div class="d-flex flex-grow-1">
            @include('dashboard.layouts.sidebar')
            <div id="content" class="p-4 flex-grow-1">
                <div class="container">
                    <div class="card" style="width: 50rem;">

                        <div class="card-body">
                            <h3 class="card-title text-center"><strong>{{ $employee->first_name }} All Details</strong></h3><br>

                            <div class="row">
                                <div class="col-md-4">
                                    <h3>Name        </h3>
                                    <h3>Email       </h3>
                                    <h3>Phone       </h3>
                                    <h3>Address     </h3>
                                    <h3>City        </h3>
                                    <h3>State       </h3>
                                    <h3>Zip Code    </h3>
                                    <h3>Position    </h3>
                                    <h3>Department  </h3>
                                </div>
                                <div class="col-md-8">
                                    <h3>: {{ $employee->first_name }} {{ $employee->last_name }}</h3>
                                    <h3>: {{ $employee->email }}</h3>
                                    <h3>: {{ $employee->phone }}</h3>
                                    <h3>: {{ $employee->address }}</h3>
                                    <h3>: {{ $employee->city }}</h3>
                                    <h3>: {{ $employee->state }}</h3>
                                    <h3>: {{ $employee->zip_code }}</h3>
                                    <h3>: {{ $employee->position }}</h3>
                                    <h3>: {{ $employee->department }}</h3>
                                </div>
                            </div>
                        </div>

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
