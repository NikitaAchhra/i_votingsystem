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
                &nbsp;
            </div>
            <ul class="nav navbar-nav" id="navbar">
                <li><a onclick="myFunction1()">ADD DEPARTMENT</a></li>
                <li><a onclick="myFunction2()">ADD CLASS</a></li>
                <li><a onclick="myFunction3()">ADD COUNCIL</a></li>
                <li><a onclick="myFunction4()">ADD POSITION</a></li>
                <li><a onclick="myFunction5()">ADD ADMIN</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{-- <li><a href="/user/show">Complete/Edit Profile</a></li>
                <li><a href="/user/show">View Profile</a></li> --}}
            </ul>
        </div>
    </nav>
    <div class="alert alert-success" role="alert">
        <p style="text-align: center"><b>Welcome!</b> You Have Admin Rights</p>
    </div>
    <br>
    <div id='1' class="container-fluid" style="display:none;">

        {!! Form::open(['action' => ['AdminController@store'],'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
            <label for="user_name">Department Name:</label>
            <input type="text" class="form-control" id="dept_name" name="dept_name"  aria-describedby="name" placeholder="Enter Department Name"> 
            </div>

            {{-- {{Form::hidden('_method','PUT')}} --}}
            <input type="submit" name='form1' class="btn btn-primary" value="Submit">

        {!! Form::close() !!}
    </div>
    <div id='2' class="container-fluid" style="display:none;">

        {!! Form::open(['action' => ['AdminController@store'],'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
            <label for="user_name">Class Name:</label>
            <input type="text" class="form-control" id="class_name" name="class_name"  aria-describedby="name" placeholder="Enter Class Name"> 
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Department</label>
                <select class="form-control" id="dept_name" name='dept_name'>
                  <option>Computer Engineering</option>
                  <option>Information Technology</option>
                </select>
            </div>

            {{-- {{Form::hidden('_method','PUT')}} --}}
            <input type="submit" name='form2' class="btn btn-primary" value="Submit">

        {!! Form::close() !!}
    </div>
    <div id='3' class="container-fluid" style="display:none;">

        {!! Form::open(['action' => ['AdminController@store'],'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
            <label for="user_name">Council Name:</label>
            <input type="text" class="form-control" id="coun_name" name="coun_name"  aria-describedby="name" placeholder="Enter Council Name"> 
            </div>

            {{-- {{Form::hidden('_method','PUT')}} --}}
            <input type="submit" name='form3' class="btn btn-primary" value="Submit">

        {!! Form::close() !!}
    </div>
    <div id='4' class="container-fluid" style="display:none;">

        {!! Form::open(['action' => ['AdminController@store'],'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
            <label for="user_name">Position Name:</label>
            <input type="text" class="form-control" id="pos_name" name="pos_name"  aria-describedby="name" placeholder="Enter Position Name"> 
            </div>

            {{-- {{Form::hidden('_method','PUT')}} --}}
            <input type="submit" name='form4' class="btn btn-primary" value="Submit">

        {!! Form::close() !!}
    </div>
    <div id='5' class="container-fluid" style="display:none;">

        {!! Form::open(['action' => ['AdminController@store'],'method' => 'POST']) !!}
            @csrf
            <div class="form-group">
                <label for="user_name">Name:</label>
                <input type="text" class="form-control" id="user_name" name="user_name"  aria-describedby="name" placeholder="Enter name"> 
              </div>
              
              <div class="form-group">
                <label for="user_email">Email:</label>
                <input type="email" class="form-control" id="user_email" name="user_email"   aria-describedby="email"  placeholder="Enter email"  > 
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
                <label for="user_pic">Choose Profile Pic</label>
                <input type="file" class="form-control-file" id="user_pic" name='user_pic'>
              </div>
              {{-- {{Form::hidden('_method','PUT')}} --}}
            <input type="submit" name='form5' class="btn btn-primary" value="Submit">

        {!! Form::close() !!}
    </div>
    

    <script>
        function myFunction1() {
         document.getElementById("1").style.display = "block";
         document.getElementById("2").style.display = "none";
         document.getElementById("3").style.display = "none";
         document.getElementById("4").style.display = "none";
         document.getElementById("5").style.display = "none";
        
      }
      function myFunction2() {
        document.getElementById("1").style.display = "none";
        document.getElementById("2").style.display = "block";
        document.getElementById("3").style.display = "none";
        document.getElementById("4").style.display = "none";
        document.getElementById("5").style.display = "none";
      }
      function myFunction3() {
        document.getElementById("1").style.display = "none";
        document.getElementById("2").style.display = "none";
        document.getElementById("3").style.display = "block";
        document.getElementById("4").style.display = "none";
        document.getElementById("5").style.display = "none";
      }
      function myFunction4() {
        document.getElementById("1").style.display = "none";
        document.getElementById("2").style.display = "none";
        document.getElementById("3").style.display = "none";
        document.getElementById("4").style.display = "block";
        document.getElementById("5").style.display = "none";
      }
      function myFunction5() {
        document.getElementById("1").style.display = "none";
        document.getElementById("2").style.display = "none";
        document.getElementById("3").style.display = "none";
        document.getElementById("4").style.display = "none";
        document.getElementById("5").style.display = "block";
      }
      </script>

  </body>