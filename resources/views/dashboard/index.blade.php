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
</head>
<body>


    <div id="app" class="d-flex flex-column">
        @include('dashboard.layouts.header')
        <div class="d-flex flex-grow-1">
    
            @include('dashboard.layouts.sidebar')
    
            <div id="content" class="p-4 flex-grow-1">
                <div class="container">
                    <h2 class="mb-4">Dashboard</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-dark mb-3 animate__animated animate__fadeInUp">
                                <div class="card-header">Movies</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $movieCount }}</h5>
                                    <p class="card-text">Total Movies</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-dark mb-3 animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="card-header">Employees</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $employeeCount }}</h5>
                                    <p class="card-text">Total Employees</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-dark mb-3 animate__animated animate__fadeInUp animate__delay-2s">
                                <div class="card-header">Customers</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $CustomerCount }}</h5>
                                    <p class="card-text">Total Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <h3 class="mt-5 mb-3">Sales Overview</h3>
                    <div class="row">
    
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    Sales Overview
                                </div>
                                <div class="card-body">
                                    <canvas id="salesChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    Customer Growth
                                </div>
                                <div class="card-body">
                                    <canvas id="growthChart"></canvas>
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
