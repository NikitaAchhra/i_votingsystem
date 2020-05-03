<!DOCTYPE html>
<html>
<head>
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col sm-4">
            <img style="width:80%;height:90%" class="avatar img-circle img-thumbnail" src="/storage/images/{{$user7->user_pic}}">
        </div>
        <div class="col-md-4 col sm-4">
            <h1>{{$user7->user_name}}</h1>
            <h1>{{$user7->user_email}}</h1>
        </div>
    </div>
</div>
</body>
</html>