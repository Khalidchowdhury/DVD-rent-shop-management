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
            margin-top: 50px;
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
                    <h2>Add New Employee</h2>
                    <form action="{{ route('addEmployee.page') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName">First Name</label>
                                <input name="first_name" type="text" class="form-control" id="firstName" placeholder="Enter first name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName">Last Name</label>
                                <input name="last_name" type="text" class="form-control" id="lastName" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input name="phone" type="tel" class="form-control" id="phone" placeholder="Enter phone number">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" id="address" placeholder="Enter address">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input name="city" type="text" class="form-control" id="city" placeholder="Enter city">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="state">State</label>
                                <input name="state" type="text" class="form-control" id="state" placeholder="Enter state">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="zip">ZIP Code</label>
                                <input name="zip_code" type="text" class="form-control" id="zip" placeholder="Enter ZIP code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position">Position</label>
                            <input name="position" type="text" class="form-control" id="position" placeholder="Enter position">
                        </div>
                        <div class="form-group">
                            <label for="department">Department</label>
                            <input name="department" type="text" class="form-control" id="department" placeholder="Enter department">
                        </div>
                        
                        <button type="submit" class="btn btn-custom">Add Employee</button>
                    </form>
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
