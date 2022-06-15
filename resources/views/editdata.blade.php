<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>add-data</title>
  </head>
  <body>
  <div class="container">
  @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

    <a href="{{url('/students')}}" class="btn btn-success">update-data</a>
    <div class="row justify-content-center">
        <div class="col-md-6">

          

            <div class="card">
                <div class="card-header">
                    <h4>update Student</h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('edit-data/.$imageup->id') }}" method="POST">
                        @csrf
                        @method('put')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="name" class="form-control" value="{{$imageup->name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Email</label>
                            <input type="text" name="email" class="form-control" value="{{$imageup->email}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Course</label>
                            <input type="text" name="course" class="form-control" value="{{$imageup->course}}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="text" name="section" class="form-control"value="{{url('$imageup->section')}}">
                        </div>
                        <td><img  height="30px" weight="40px" src="{{asset($imageup->image)}}" class="img-thumbnail"></td>
                        <div class="form-group mb-3">
                            <label for="">Student Section</label>
                            <input type="file" name="image" class="form-control"value="">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Save Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>