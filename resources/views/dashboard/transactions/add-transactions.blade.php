<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
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
                    <h2>Add Payment Details</h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="lastName">Custommer Name</label>
                                <input type="text" class="form-control" id="Cname" placeholder="Custommer Name">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="firstName">Transaction ID</label>
                                <input type="text" class="form-control" id="TransID" placeholder="Transaction ID">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Amount</label>
                                <input type="text" class="form-control" id="Amount" placeholder="Enter Amount">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="phone">Payment Method</label>
                                <select type="text" class="form-control" id="payment">
                                    <option selected>Select Payment Method</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="3">Four</option>
                                    <option value="3">Five</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="City">Date</label>
                                <input type="date" class="form-control" id="City" placeholder="Enter City">
                            </div>
                        </div>


                        
      
                        <button type="submit" class="btn btn-custom mt-5">Add Employee</button>
                        <button type="submit" class="btn btn-danger mt-5">Back</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
</body>
</html>
