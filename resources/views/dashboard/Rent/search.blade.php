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
        .addRent{
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
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            @include('validate')

                            <div class="row">
                                <h2>All Rental Details</h2>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <a href="{{ route('addRent.page') }}" class="btn btn-primary addRent">Add a Rent</a>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <form action="{{ route('searchRent.page') }}" method="GET" role="search">
                            <div class="input-group mb-3">
                                <input type="search" name="search" class="form-control" placeholder="Search Rent..." aria-label="Search Rent" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i> Search</button>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Customer</th>
                            <th>DVD Name</th>
                            <th>Rant Date</th>
                            <th>Refund date</th>
                            <th>Payment Method</th>
                            <th>Amount</th>
                            <th>Transaction ID</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="transactionTable">

                        @forelse ( $searchRent as $rent )
                            <tr>
                                <td>{{ $loop->index +1 }}</td>
                                <td>{{ $rent->customer_name }}</td>
                                <td>{{ $rent->select_dvd }}</td>
                                <td>{{ $rent->take_date }}</td>
                                <td>{{ $rent->refund_date }}</td>
                                <td>{{ $rent->payment_method }}</td>
                                <td>${{ $rent->amount }}</td>
                                <td>{{ $rent->transaction_id }}</td>
                                <td>
                                    <a href="{{ route('rentView.page', $rent->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> </a>
                                    <a href="{{ route('deleteRent.page', $rent->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> </a>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="8" style="text-align: center;">No Rent are found.</td>
                        </tr>
                        @endforelse

                    </tbody>
                </table>
                <a href="{{ route('rent.page') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./assets/js/scripts.js"></script>

    <script>
        function updateDaysLeft() {
            const daysLeftElement = document.querySelector('.days-left');
            let daysLeft = parseInt(daysLeftElement.textContent.split(': ')[1]);
            
            if (daysLeft > 0) {
                daysLeft -= 1;
                daysLeftElement.textContent = `Days Left: ${daysLeft}`;
                
                if (daysLeft === 0) {
                    daysLeftElement.classList.add('zero');
                }
            }
        }

        setInterval(updateDaysLeft, 86400000); // Update every 24 hours
    </script>

</body>
</html>
