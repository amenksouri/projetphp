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
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            
</head>
<body>


@include('templates.header')

    @include('templates.sidebar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Freelance Jobs') }}</div>

                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addJobModal">
                            {{ __('+ Ajouter une mission') }}
                        </button>

                        <div class="modal fade" id="addJobModal" tabindex="-1" role="dialog" aria-labelledby="addJobModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addJobModalLabel">{{ __('Add Freelance Job') }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="jobForm" method="POST" action="{{ route('add_freelance') }}">
                                            @csrf

                                            <div class="form-group">
                                                <label for="title" class="col-form-label">{{ __('Title') }}</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                                @error('title')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="col-form-label">{{ __('Description') }}</label>
                                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required>{{ old('description') }}</textarea>
                                                @error('description')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                                        <button type="submit" class="btn btn-primary" form="jobForm">{{ __('Save') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@include('templates.footer')
</body>

</html>
