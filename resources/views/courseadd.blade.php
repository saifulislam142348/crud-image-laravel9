<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> show data</title>
  </head>
  <body>




<div class="container">
<a href="{{url('/insert-info')}}" class="btn btn-success">add_data</a>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> show the database</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Course</th>
                                <th>Section</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imageup as $ite)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td><img  height="30px" weight="40px" src="{{asset($ite->image)}}" class="img-thumbnail"></td>
                                <td>{{ $ite->name }}</td>
                                <td>{{ $ite->email }}</td>
                                <td>{{ $ite->course }}</td>
                                <td>{{ $ite->section }}</td>
                              
                            
                                <td>
                                    <a href="{{url('edit-data/'.$ite->id)}}" class="btn btn-primary btn-ms">Edit</a>
                                  
                                </td>
                                <td>
                                <a href="{{url('delete-student/'.$ite->id)}}" class="btn btn-danger btn-ms">delete</a> 
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>