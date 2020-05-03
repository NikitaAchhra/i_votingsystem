<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles --> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
                <li><a href="/class/{{$user1->user_id}}">Class Election</a></li>
                <li><a href="#">College Election</a></li>
            <li><a href="/user/{{$user1->user_id}}/edit">Complete/Edit Profile</a></li>
            
                <li><a href="/user/{{$user1->user_id}}">View Profile</a></li>
            </ul>
        </div>
    </nav>
    
    <main style="display:block" class="py-4"> 
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Dashboard</div>
                        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                            You are logged in as {{$user1->user_email}}
                            
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div>
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div> --}} 
    </main>
    
</body>
</html>
