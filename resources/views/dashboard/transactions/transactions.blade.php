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
</head>
<body>



    <div id="app" class="d-flex flex-column">
        @include('dashboard.layouts.header')
        <div class="d-flex flex-grow-1">
            @include('dashboard.layouts.sidebar')
            <div id="content" class="p-4 flex-grow-1">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Transaction Management</h2>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <a href="add-transection.html" class="btn btn-primary mb-3 transactions">Add New Transaction</a>
                        </div>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>DVD Name</th>
                            <th>Payment Method</th>
                            <th>Payment Date</th>
                            <th>Amount</th>
                            <th>Transaction ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="transactionTable">
                        <tr>
                            <td>1</td>
                            <td>Mazhar</td>
                            <td>Robot 2.0</td>
                            <td>Bank Transfar</td>
                            <td>21-02-2024</td>
                            <td>$20</td>
                            <td>#0195488</td>
                            <td>View</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./assets/js/scripts.js"></script>
</body>
</html>
