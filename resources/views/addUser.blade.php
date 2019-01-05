<!DOCTYPE html>
<html>
<head>
  <title>ADD USER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="jumbotron text-center">
    <h1>Add User</h1>
  </div>
  <div class="col-md-12 text-center">
    <button type="button" class="btn btn-primary" onclick="window.location='{{ url("/") }}'">Go to User Table</button>
  </div>
  <div class="form-group">
    <form name="addform" onsubmit="return validateForm()" method="POST" action="/adduser" accept-charset="UTF-8" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="row">
        <div class="col-md-3">
          <label>First Name</label>
          <input type="text" name="fname">
        </div>
        <div class="col-md-3">
          <label>Last Name</label>
          <input type="text" name="lname">
        </div>
        <div class="col-md-3">
          <label>Position</label>
          <input type="text" name="position">
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-success" name="submit" value="add_data">ADD</button>
        </div>
      </div>
    </form>
  </div> 

</div>

</body>
<script type="text/javascript">
    function validateForm()
    {
        var a=document.forms["addform"]["fname"].value;
        var b=document.forms["addform"]["lname"].value;
        var c=document.forms["addform"]["position"].value;
        if (a==null || a=="",b==null || b=="",c==null || c=="")
        {
            alert("Please Fill All Required Field");
            return false;
        }
    }
</script>
</html>
