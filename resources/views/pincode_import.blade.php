<!DOCTYPE html>
<html lang="en">
<!-- <html lang="{{ str_replace('_','-',app()->getLocale())}}"> -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <h1>Laravel Import Large CSV data  Using Laravel Jobs and Queue</h1>
                <form action="{{ route('csvimport') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">Close</button>
                        </div>
                    @endif
                        <div class="form-group">
                            <strong>CSV File :</strong>
                            <input type="file" name="csv" class="form-control">
                        </div>
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-success btn-block">Import</button>
                        </div>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>