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

                    <form action="{{ url('insert-info') }}" method="POST" enctype="multipart/form-data">
                        @csrf
               
                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <select name="name" class="form-control">

                                <option>Please Select a Category</option>
                            
                    @foreach ($imageup as $item)

                                <option $find=value="{{$item->id}}">{{$item->name}}</option>
                               
                              @endforeach
                                
                               
                            </select>


                           
                            <tr>
                               
                                
                            </tr>
                            
    
                             
                              
                       
                          
                      
                       
                     
                       
                            <label for="">Student payment</label>
                            <input type="text" name="paymet" class="form-control">
                   
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