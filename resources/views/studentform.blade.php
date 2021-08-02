<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container"></div>
    <h1>Student Entrolment Form</h1>
    
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch student form
</button>
<button type="button" class="btn btn-secondary" onclick="window.location='{{url('home')}}'">Back</button>
@if(\Session::has('error'))
    <div class="alert alert-success">
        <p> {{ \Session::get('error')}}</p>
    </div>
    @endif
@if(\Session::has('success'))
    <div class="alert alert-success">
        <p> {{ \Session::get('success')}}</p>
    </div>
    @endif
<!-- start add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ action('App\Http\Controllers\studentcontroller@store') }}" method="POST">
      {{ csrf_field() }}
      <div class="modal-body">
        <!-- form start -->
        
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"   placeholder="Enter Name">
    <span>@error('name'){{$message}}@enderror</span>
   </div>
   <div class="form-group">
    <label>DOB</label>
    <input type="date" name="dob" class="form-control">
    <span>@error('dob'){{$message}}@enderror</span>
   </div>
   <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control"   placeholder="Enter email">
    <span>@error('email'){{$message}}@enderror</span>
   </div>
   <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"   placeholder="Enter address">
    <span>@error('address'){{$message}}@enderror</span>
   </div>
   <div class="form-group">
    <label>phoneno</label>
    <input type="text" name="phoneno" class="form-control"   placeholder="Enter phoneno">
    <span>@error('phoneno'){{$message}}@enderror</span>
   </div>
   <div class="form-group">
    <label>Department</label>
    <select  name="department" class="form-control"   placeholder="Enter Department">
    <option value="CSE">CSE</option>
     <option value="ECE">ECE</option>
     <option value="IT">IT</option>
     <option value="EEE">EEE</option>
</select>
    <span>@error('department'){{$message}}@enderror</span>
   </div>
 

        <!-- form end -->
      </div>
      <div class="modal-footer">
      
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
<!-- End add model -->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>