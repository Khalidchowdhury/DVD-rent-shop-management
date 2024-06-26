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
        a.btn.btn-primary.mb-3 {
            float: right;
        }
        th:last-child {
            float: right;
        }
        td:last-child {
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
  
                <div class="row">
                    <div class="col-md-6">
                        <div class="container mt-5">
                            @include('validate')

                            <div class="row">
                                <div class="col-md-6"><h2>All Categories</h2></div>
                                <div class="col-md-6"><a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Create Category</a></div>
                            </div>
                            
                            
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Action</th>
                                        <!-- Add more columns if needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                    <tr>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            <a href="{{ route('categories.delete', $category->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
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
