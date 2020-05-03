@extends('layouts.app')

@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{sesion('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
{!! Form::open(['action' => 'UserController@store','method' => 'post','enctype'=>'multipart/form-data']) !!}

  <div class="form-group">
    <label for="user_name">Name:</label>
    <input type="text" class="form-control" id="user_name" name="user_name" value={{$user->user_name}} aria-describedby="name" placeholder="Enter name"> 
  </div>


  <div class="form-group">
    <label for="user_email">Email:</label>
    <input type="email" class="form-control" id="user_email" name="user_email"  aria-describedby="email" placeholder="Enter email"> 
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


  <input type="submit" class="btn btn-primary" value="Submit">


{!! Form::close() !!}



@endsection