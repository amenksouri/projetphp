<!DOCTYPE html>
<html>
<head>
    <title>mesmar fi hit</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <style>
        #wrapper {
            display: flex;
            flex-direction: row;
        }
        #page-content-wrapper {
            flex: 1;
            padding: 20px;
        }
        body{
            margin: 0px !important; 
        }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            
</head>

<body>
@include('templates.header')

@include('templates.sidebar')
<div class="container mt-5">
        <h1 class="mb-4 text-center">List of Freelance Jobs</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($jobs->isEmpty())
            <div class="alert alert-warning text-center">
                No jobs found.
            </div>
        @else
            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $job->title }}</h5>
                                <p class="card-text">{{ $job->description }}</p>
                                <p>Status: {{ $job->status }}</p>
                                <form action="{{ route('jobs.apply', $job->id) }}" method="POST" class="d-inline apply-form">
                                    @csrf
                                    <button type="submit" class="btn btn-primary apply-button" data-status="{{ $job->status }}">Apply Now</button>
                                </form>
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var applyButtons = document.querySelectorAll('.apply-button');
            applyButtons.forEach(function(button) {
                if (button.getAttribute('data-status') === 'applied') {
                    button.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>