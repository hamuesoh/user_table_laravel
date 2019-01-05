<!DOCTYPE html>
<html>
<head>
  <title>USER LIST</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron text-center">
    <h1>STAFF</h1>
  </div>
  <div class="row text-center">
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/user") }}'">Go to Add User</button>
  </div>
  <form method="POST" action="/delcheck" enctype="multipart/form-data">
    <button type="submit" class="btn btn-danger">DELETE CHECK</button>
    
                                                                                  
  <div class="table-responsive col-md-12 center">
  <table class="table table-hover center">
    <thead>
      <tr>
        <th>#</th>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Position</th>
        <th>Create Date</th>
        <th class="col-md-2 text-center">Action</th>
      </tr>
    </thead>
    <tbody>
          @foreach($users as $user)
            <tr>
              <td><input type="checkbox" name="checkboxs[]" value="{{$user->id}}"></td>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->lastname }}</td>
              <td>{{ $user->position }}</td>
              <td>{{ $user->create_date}}</td>
              <td>
                <div class="form-group">
                  <div class="col-md-6">
                    <form method="POST" action="/del" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{ csrf_field() }}
                          <button type="submit" class="btn btn-warning" value="{{$user->id}}" name="del">UPDATE</button>
                    </form>                    
                  </div>
                  <div class="col-md-6">
                    <form method="POST" action="/del" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger" value="{{$user->id}}" name="del">DELETE</button> 
                    </form> 
                  </div>             
                </div>
              </td>
            </tr>
          @endforeach
    </tbody>
  </table>
  </div>
</form> 
</div>

</body>


</html>
