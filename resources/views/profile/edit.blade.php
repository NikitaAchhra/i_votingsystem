{{-- @extends('layouts.app')
@section('content') --}}

{{-- @include('inc.navbar') --}}
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

  <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
              <a class="navbar-brand" href="#">I VOTE</a>
          </div>
          <ul class="nav navbar-nav" id="navbar">
          <li><a href="#">Home</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Class Election</a></li>
              <li><a href="#">College Election</a></li>
          <li><a href="/user/{{$user2->user_id}}/edit">Complete/Edit Profile</a></li>
              <li><a href="/user/show">View Profile</a></li>
          </ul>
      </div>
  </nav>
  

    
{!! Form::open(['action' => ['UserController@update',$user2->user_id],'method' => 'POST']) !!}

 @csrf
<div class="form-group">
  <label for="user_name">Name:</label>
  <input type="text" class="form-control" id="user_name" name="user_name"  aria-describedby="name" placeholder="Enter name"> 
</div>

<div class="form-group">
  <label for="user_email">Email:</label>
  <input type="email" class="form-control" id="user_email" name="user_email" value={{$user2->user_email}}  aria-describedby="email"  placeholder="Enter email" disabled > 
</div>

<div class="form-group">
  <label for="exampleFormControlSelect1">Gender</label>
  <select class="form-control" id="user_gender" name='user_gender'>
    <option>male</option>
    <option>female</option>
    <option>other</option>
  </select>
</div>

<div class="form-group">
  <label for="exampleFormControlSelect1">Department</label>
  <select class="form-control" id="dept_id_fk" name='dept_id_fk'>
    <option>Computer Engineering</option>
    <option>Information Technology</option>
  </select>
</div>

<div class="form-group">
  <label for="exampleFormControlSelect1">Class</label>
  <select class="form-control" id="class_id_fk" name='class_id_fk'>
    <option>D12A</option>
    <option>D12B</option>
  </select>
</div>


<div class="form-group">
  <label for="user_pic">Choose Profile Pic</label>
  <input type="file" class="form-control-file" id="user_pic" name='user_pic'>
</div>

{{Form::hidden('_method','PUT')}}
<input type="submit" class="btn btn-primary" value="Submit">

{!! Form::close() !!}

</body>

{{-- @endsection --}}