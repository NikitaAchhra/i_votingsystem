<!DOCTYPE html>
<html>
<head>
			
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>

  <div class="container">
    <br><br>
    <div class="row">
   <div class="col-md-4">   
    <div class="card">
    <div class="card-header">
      Class Representative
    </div>
    <div class="card-body">
          
{!! Form::open(['action' =>['TeacherController@show_list',$user_s->user_id],'method' => 'POST']) !!}
      {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form1' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card">
  <div class="card-header">
    Cultural Council
  </div>
  <div class="card-body">
        
{!! Form::open(['action' =>['TeacherController@show_list',$user_s->user_id],'method' => 'POST']) !!}
    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form2' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
  </div>
</div>
</div>

<div class="col-md-4">
<div class="card">
  <div class="card-header">
    Sort Council
  </div>
  <div class="card-body">
        
{!! Form::open(['action' =>['TeacherController@show_list',$user_s->user_id],'method' => 'POST']) !!}
    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form2' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
    </div>
</div>
</div>
    </div>
</body>
</html>