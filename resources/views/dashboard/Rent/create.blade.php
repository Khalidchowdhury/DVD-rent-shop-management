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

                    <h2>Rent a DVD</h2>

                    <form action="{{ route('addRent.page') }}" method="POST">
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="lastName">Custommer Name</label>
                                <select name="customer_name" type="text" class="form-control" id="payment">
                                    <option selected>Select Customer</option>
                                    @foreach ( $customer as $customer )
                                        <option value="{{ $customer->first_name }} {{ $customer->last_name }}">{{ $customer->first_name }} {{ $customer->last_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="lastName">Select a DVD</label>
                                <select name="select_dvd" type="text" class="form-control" id="payment">
                                    <option selected>Select DVD</option>
                                    @foreach ( $movie as $movie )
                                        <option value="{{ $movie->title }}">{{ $movie->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="firstName">Take Date</label>
                                <input name="take_date" type="date" class="form-control" id="TransID" placeholder="Rent Date">
                            </div>
                            
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="City">Refund Date</label>
                                <input name="refund_date" type="date" class="form-control" id="City" placeholder="Refund Date">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="phone">Payment Method</label>
                                <select name="payment_method" type="text" class="form-control" id="payment">
                                    <option selected>Select Payment Method</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Bank Transfar">Bank Transfar</option>
                                    <option value="Cradit Card">Cradit Card</option>
                                    <option value="Dabit Card">Dabit Card</option>
                                    <option value="Mobile Banking">Mobile Banking</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="City">Amount</label>
                                <input name="amount" type="number" class="form-control" id="City" placeholder="Amount">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="City">Transaction ID</label>
                                <input name="transaction_id" type="text" class="form-control" id="City" placeholder="Transaction ID">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-custom mt-5">Add Rent</button>

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
