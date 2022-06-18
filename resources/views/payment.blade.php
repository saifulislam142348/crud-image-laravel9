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
    <a href="{{url('/data-show')}}" class="btn btn-success">showdata</a>
    <div class="row justify-content-center">
        <div class="col-md-6">

        @if (session('status'))
        <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif

            <div class="card">
                <div class="card-header">
                    <h4>Add Student</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <form action="{{ url('payment') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for=""><b>Student Name</br></label>
                            <select name="name" class="form-control">

                                <option>Please Select a Category</option>
                            
                    @foreach ($student as $item)

                                <option name="id" value="{{$item->id}}">{{$item->name}}</option>
                               
                                @endforeach
                               
                            </select></br>

                            
                            
                              
                       
                        </div>
                        
                        <div class="form-group mb-3">
                            <label><b>payment</br></label>
                     <input  class="" type="text" class="form-control" name="payment">
                   
                        </div>
                        <input type="submit" class="btn btn-success" value="submit">
                       
                     
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
  </body>
</html>