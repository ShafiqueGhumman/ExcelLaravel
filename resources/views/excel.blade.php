<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Excel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-5 col-sm-6">
                <div class="p-5 border-2 border border-secondary rounded">
                    <h2>User Data : </h2>
                    <form class="form" method="POST" action="{{route('import-user')}}" enctype="multipart/form-data">
                        @csrf
                        <label>Select Files</label>
                        <input type="file" name="file" class="form-control"/>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a href="{{route('export-user') }}" class="btn btn-primary float-right">Export Excel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
