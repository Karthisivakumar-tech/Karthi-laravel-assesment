<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
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
<div class="container">
    <h1>Student Detail Table</h1>
    <table class="table table-bordered table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Std_Name</th>
      <th scope="col">Std_Dob</th>
      <th scope="col">Std_Email</th>
      <th scope="col">Std_Address</th>
      <th scope="col">Std_Phoneno</th>
      <th scope="col">Std_Department</th>
      <th scope="col">Accept</th>
      <th scope="col">Reject</th>
    </tr>
  </thead>
  <tbody>
      @foreach($student as $studentdata)
    <tr>
      <th>{{$studentdata -> id }}</th>
      <td>{{$studentdata -> std_name}}</td>
     <td>{{$studentdata -> std_dob}}</td>
      <td>{{$studentdata -> std_email}}</td>
      <td>{{$studentdata -> std_address }}</td>
      <td>{{$studentdata -> std_phoneno}}</td>
      <td>{{$studentdata->std_department}}</td>
      <td>
      <form action="{{ action('App\Http\Controllers\studentview@edit', $studentdata['id'])}}" method="get">
              {{csrf_field() }}
              <input type="hidden" name="_method" value="ACCEPT">
              <button type="submit" name="submit" class="btn btn-success">Accept</button>
</form>
</td>
<td>
          <form action="{{ action('App\Http\Controllers\studentview@destroy', $studentdata['id'])}}" method="post">
              {{csrf_field() }}
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit" name="submit" class="btn btn-danger">Reject</button>
</form>

</td>
     </tr>
     @endforeach
  </tbody>
</table>
<button type="button" class="btn btn-secondary" onclick="window.location='{{url('/admin/home')}}'">Back</button>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>