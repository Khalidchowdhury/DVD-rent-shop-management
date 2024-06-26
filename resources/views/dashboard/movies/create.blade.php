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
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #0062E6;
            color: white;
            border-radius: 10px 10px 0 0;
        }
        .btn-custom {
            background-color: #0062E6;
            border: none;
            color: white;
        }
        .btn-custom:hover {
            background-color: #005cbf;
        }
        .form-group label {
            font-weight: bold;
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
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Add New DVD</h4>
                                </div>
                                <div class="card-body">

                                    <form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="movieName">DVD Title</label>
                                            <input type="text" class="form-control" id="movieName" name="title" placeholder="Enter DVD name">
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="unique_id">DVD Unique ID</label>
                                                    <input type="text" class="form-control" id="unique_id" name="unique_id" placeholder="Enter Unique ID">
                                                </div>
                                            </div>
                                            <div class="col-md-4"> 
                                                <div class="form-group">
                                                    <label for="unique_id">Category</label>
                                                    <select name="category" type="text" class="form-control" id="payment">
                                                        <option selected>Select Category</option>
                                                        @foreach ( $category as $category )
                                                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="quantity">Quantity</label>
                                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieRelease">Release Year</label>
                                                    <input type="date" class="form-control" id="movieRelease" name="release_year" placeholder="Enter Release Year">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieLength">Movie Length</label>
                                                    <input type="text" class="form-control" id="movieLength" name="length" placeholder="Enter Movie Length">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieLanguage">Language</label>
                                                    <input type="text" class="form-control" id="movieLanguage" name="language" placeholder="Enter Movie Language">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieDirector">Director</label>
                                                    <input type="text" class="form-control" id="movieDirector" name="director" placeholder="Enter Movie Director Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieActress">Main Actress</label>
                                                    <input type="text" class="form-control" id="movieActress" name="main_actress" placeholder="Enter Main Actress Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="movieActor">Main Actor</label>
                                                    <input type="text" class="form-control" id="movieActor" name="main_actor" placeholder="Enter Main Actor Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="movieDescription">Movie Description</label>
                                            <textarea class="form-control" id="movieDescription" name="description" rows="3" placeholder="Enter movie description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="movieThumbnail">Movie Thumbnail</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="movieThumbnail" name="thumbnail">
                                                <label class="custom-file-label" for="movieThumbnail">Choose file</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-custom btn-block">Add Movie</button>
                                    </form>


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
