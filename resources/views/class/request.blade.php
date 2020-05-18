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
		<style>
			.leftside, .rightside{
				height:100vmin;
				width:100%;
			}

			
			.leftside{
				background:rgba(149, 188, 224, 0.897);
			}

      .b1, .b2{
        margin: 40px;
      }
			
			.rightside{
				background:rgb(240, 145, 145);
			}
			
			.centered {
						  position: absolute;
						  top: 50%;
						  left: 50%;
						  transform: translate(-50%, -50%);
						  text-align: center;
			}
			
			#myDIV2 .card {
				margin-bottom: 12px;
			}

      .card-header{
        color:black;
      }


			body {
			  font-family: Arial;
			  color: white;
			}
			
			
		</style>
	</head>
	
	<body>
		
				<nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
					<a class="navbar-brand" href="#">I VOTE</a>
					<ul class="navbar-nav ">
						
						<li class="nav-item">
						  <a class="nav-link" href="/user/{{$user3->user_id}}/edit">Complete/Edit Profile</a>
						</li>
						<li class="nav-item">
						  <a  class="nav-link" href="/user/{{$user3->user_id}}">View Profile</a>
						</li>
						@if($user3->status==1)
						<li class="nav-item"  id="3">
							<a  class="nav-link" href="/user/show">Generate Results</a>
						</li>
						<li class="nav-item"  id="4">
							<a  class="nav-link" href="/teacher/{{$user3->user_id}}">Pending Request</a>
						</li>
						@else
						<li id="1" class="nav-item" >
							<a   class="nav-link" href="/class/{{$user3->user_id}}">Class Election</a>
						</li>
						<li  id="2" class="nav-item" >
							<a class="nav-link" href="#">College Election</a>
						</li>
            		@endif
					</ul>
				</nav>
		
		<div class='row no-gutters' >
			
			<div class='col no-gutters' >
				<div class='leftside'>
					<div class="centered">
					  <button class ="b1" onclick="myFunction1()">Request</button>
					  <button class ="b2" onclick="myFunction2()">Vote</button>
					</div>
				</div>
			</div>
			
			<div class='col no-gutters'>
				<div class='rightside'>
				
				<div class="centered">
					<div id="myDIV1" style="display:none;">
						{!! Form::open(['action' => ['ClassElectionController@update',$user3->user_id],'method' => 'POST']) !!}

							@csrf
							<div class="form-group">
								<label for="exampleFormControlSelect1">Select Council</label>
								<select class="form-control" id="coun_id_fk" name='coun_id_fk'>
									<option>Class Representative</option>
									<option>Cultural Council</option>
									<option>Music Council</option>
									<option>Sort Council</option>
									<option>Sports Council</option>
								</select>
							</div>
							{{Form::hidden('_method','PUT')}}
							<input type="submit" class="btn btn-primary" value="Submit">
          
						{!! Form::close() !!}
				
					</div>
					
              <div id="myDIV2" style="display:none;">
                
                <div class="card">
                  <div class="card-header">
                    Class Representative
                  </div>
                  <div class="card-body">
                        
		{!! Form::open(['action' =>['RequestController@show_list',$user3->user_id],'method' => 'GET']) !!}
							{{-- {{Form::hidden('_method','PUT')}} --}}
		<input type="submit" name='form1' class="btn btn-primary" value="Go Vote">

		{!! Form::close() !!}
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    Cultural Council
                  </div>
                  <div class="card-body">
{!! Form::open(['action' =>['RequestController@show_list',$user3->user_id],'method' => 'GET']) !!}
                    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form2' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    Sort Council
                  </div>
                  <div class="card-body">
{!! Form::open(['action' =>['RequestController@show_list',$user3->user_id],'method' => 'GET']) !!}
                    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form3' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
                  </div>
                </div>


                <div class="card">
                  <div class="card-header">
                    Sports Council
                  </div>
                  <div class="card-body">
{!! Form::open(['action' =>['RequestController@show_list',$user3->user_id],'method' => 'GET']) !!}
                    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form4' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
                  </div>
                </div>

                <div class="card">
                  <div class="card-header">
                    Music Council
                  </div>
                  <div class="card-body">
{!! Form::open(['action' =>['RequestController@show_list',$user3->user_id],'method' => 'GET']) !!}
                    {{-- {{Form::hidden('_method','PUT')}} --}}
<input type="submit" name='form5' class="btn btn-primary" value="Go Vote">

{!! Form::close() !!}
                  </div>
                </div>






							</div>
					
					
					
				</div>
				
				</div>
			</div>
			
		</div>
		<script>
				function myFunction1() {
				   document.getElementById("myDIV1").style.display = "block";
				   document.getElementById("myDIV2").style.display = "none";
				  
				}
				function myFunction2() {
				   document.getElementById("myDIV2").style.display = "block";
				   document.getElementById("myDIV1").style.display = "none";
				}
		</script>
	</body>
</html>