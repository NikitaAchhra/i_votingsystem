<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
            {{-- <li><a href="#">Home</a></li> --}}

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Class Election</a></li>
                <li><a href="#">College Election</a></li>
            <li><a href="/user/{{$user2->user_id}}/edit">Complete/Edit Profile</a></li>
                <li><a href="/user/show">View Profile</a></li>
            </ul>
        </div>
    </nav>
    
</body>
</html>