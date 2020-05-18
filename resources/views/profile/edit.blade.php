{{-- @extends('layouts.app')
@section('content') --}}

{{-- @include('inc.navbar') --}}
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

  <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">I VOTE</a>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="/user/{{$user2->user_id}}/edit">Complete/Edit Profile</a>
      </li>
      <li class="nav-item">
        <a  class="nav-link" href="/user/{{$user2->user_id}}">View Profile</a>
      </li>
      @if($user2->status==1)
            <li class="nav-item"  id="3">
                <a  class="nav-link" href="/user/show">Generate Results</a>
            </li>
            <li class="nav-item"  id="4">
                <a  class="nav-link" href="/teacher/{{$user2->user_id}}">Pending Request</a>
            </li>
            @else
            <li id="1" class="nav-item" >
                <a   class="nav-link" href="/class/{{$user2->user_id}}">Class Election</a>
              </li>
              <li  id="2" class="nav-item" >
                <a class="nav-link" href="#">College Election</a>
              </li>
            @endif
    </ul>
  </nav>
  

    
{!! Form::open(['action' => ['UserController@update',$user2->user_id],'method' => 'POST','enctype'=>'multipart/form-data']) !!}
<div class="container">
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
</div>
{!! Form::close() !!}

</body>

{{-- @endsection --}}