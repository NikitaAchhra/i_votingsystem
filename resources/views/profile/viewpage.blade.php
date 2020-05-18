<!DOCTYPE html>
<html>
<head>
      
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<style>
body{
    background-color: yellow; 
}
.box{
    background:white;
    padding:2em;
    position :absolute;
    width:70%;
    top:20%;
    left:15%;
    box-shadow: 0 0 25px 0
                 rgba(0,0,0, .25);
}
    </style>
</head>
<body>

    <nav class="navbar sticky-top navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">I VOTE</a>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link" href="/user/{{$userv->user_id}}/edit">Complete/Edit Profile</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="/user/{{$userv->user_id}}">View Profile</a>
          </li>
          @if($userv->status==1)
                <li class="nav-item"  id="3">
                    <a  class="nav-link" href="/user/show">Generate Results</a>
                </li>
                <li class="nav-item"  id="4">
                    <a  class="nav-link" href="/teacher">Pending Request</a>
                </li>
                @else
                <li id="1" class="nav-item" >
                    <a   class="nav-link" href="/class/{{$userv->user_id}}">Class Election</a>
                  </li>
                  <li  id="2" class="nav-item" >
                    <a class="nav-link" href="#">College Election</a>
                  </li>
                @endif
        </ul>
      </nav>




 <div class="container">   
<div class="box">
    <div class="row">
        <div class="col sm-5" style="width:250px;height:300px">
            <img style="width:80%;height:95%"  src="/storage/images/{{$userv->user_pic}}">
        </div>
        <div class="col sm-7">
            <h1>{{$userv->user_name}}</h1>
            @if($studentv->class_id_fk == 1)
            <h6>Computer Engineering Department</h6>
            @elseif($studentv->class_id_fk ==2)
            <h2> Information Technology Department</h2>
            @endif
            <h1>{{$userv->user_email}}</h1>
        </div>
    </div>
</div>
 </div>
</body>
</html>