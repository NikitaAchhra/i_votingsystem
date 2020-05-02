<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  
</head>
<style>

#myDIV1{
  text-align: center;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
  margin-top: 80px;
}
/* Control the left side */
.left {
  left: 0;
  background-color:burlywood;
}
#left1{
  width: 30%;
}
#left2{
  width: 70%;
}
/* Control the right side */
.right {
  right: 0;
  background-color: lightpink;
}

#myDIV2 #card {
    margin-bottom: 12px;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 150px;
  border-radius: 50%;
}
body {
  font-family: Arial;
  color: white;
}
.button:b3,b4,b5,b6,b7{
    background-color: darkblue;
    border: none;
    color: white;
    padding: 30px;
    text-align: center;
    text-decoration: none;
    
    font-size: 20px;
    cursor: pointer;
    border-radius: 50%;
    
}
</style>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">I VOTE</a>
            </div>
            <ul class="nav navbar-nav" id="navbar">
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="/class/{{$user3->user_id}}">Class Election</a></li>
                <li><a href="#">College Election</a></li>
            <li><a href="/user/{{$user3->user_id}}/edit">Complete/Edit Profile</a></li>
                <li><a href="/user/show">View Profile</a></li>
            </ul>
        </div>
    </nav>
  
  <div class="split left" id="left1">
    <div class="centered">
      
      <button class ="b1" onclick="myFunction1()">Request</button>
      <br>
      <br>
      <br>
      <br>
      <br>
      <button class ="b2" onclick="myFunction2()">Vote</button>
    </div>
  </div>
  
  <div class="split right" id="left2">
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
      <div id='card' class="card" style="width:400px">
        <div class="card-body">
          <h4 style="color:black" class="card-title">Class Representative</h4>
          <p class="card-text"></p>
          <a href="google.com" class="btn btn-primary stretched-link">VOTE</a>
        </div>
      </div>
      <div id='card' class="card" style="width:400px">
        <div class="card-body">
            <h4 style="color:black" class="card-title">Cultural Council</h4>
          <p class="card-text"></p>
          <a href="google.com" class="btn btn-primary stretched-link">VOTE</a>
        </div>
      </div>
      <div id='card' class="card" style="width:400px">
        <div class="card-body">
          <h4 style="color:black" class="card-title">Music Council</h4>
          <p class="card-text"></p>
          <a href="google.com" class="btn btn-primary stretched-link">VOTE</a>
        </div>
      </div>
      <div id='card' class="card" style="width:400px">
        <div class="card-body">
          <h4 style="color:black" class="card-title">Sort Council</h4>
          <p class="card-text"></p>
          <a href="google.com" class="btn btn-primary stretched-link">VOTE</a>
        </div>
      </div>
      <div id='card' class="card" style="width:400px">
        <div class="card-body">
          <h4 style="color:black" class="card-title">Sports Council</h4>
          <p class="card-text"></p>
          <a href="google.com" class="btn btn-primary stretched-link">VOTE</a>
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