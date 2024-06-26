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
        a.category {
            background: #5428ff;
            color: white;
            padding: 5px;
            text-decoration: none;
        }
        .btn.btn-primary.add-movie {
            float: right;
        }
        .add-movie a {
            text-decoration: none;
            color: white;
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
                            <h2>All DVD</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="btn btn-primary add-movie"><a href="{{ route('addMovie.page') }}">Add New Movie</a></div>
                        </div>
                    </div>


                    @include('validate')

                    <form action="{{ route('search.page') }}" method="GET" role="search">
                        <div class="input-group mb-3">
                            <input type="search" name="search" class="form-control" placeholder="Search Movie..." aria-label="Search for movies" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" id="button-addon2"><i class="fas fa-search"></i> Search</button>
                            </div>
                        </div>
                    </form>


                    @foreach ( $cetagorys as $category )
                        <a class="pl-3 pr-3 btn btn-primary" href="{{ route('movie_by_cetagory', $category->id) }}">{{ $category->name }} </a>
                    @endforeach



                    <div class="table-responsive">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <th>Thumbnail</th>
                                    <th>Title</th>
                                    <th>Unique ID</th>
                                    <th>Release Year</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($movie as $movie)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td><img src="{{ asset('storage/' . $movie->thumbnail) }}" width="100" alt="Thumbnail"></td>
                                        <td>{{ $movie->title }}</td>
                                        <td>{{ $movie->unique_id }}</td>
                                        <td>{{ $movie->release_year }}</td>
                                        <td>{{ $movie->quantity }}</td>
                                        <td><a class="category">{{ $movie->category }}</a></td>
                                        <td>
                                            <a href="{{ route('movie.view', $movie->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> </a>
                                            <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> </a>
                                            @if (auth()->user()->id == 1)
                                            <a href="{{ route('movie.destroy', $movie->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> </a>   
                                            @endif
                                            
                                        </td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="8" style="text-align: center;">No DVD are found.</td>
                                </tr>
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
