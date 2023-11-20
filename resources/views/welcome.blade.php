<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Management System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        {{-- css --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body style="display: flex; justify-content: center; align-items: center; height: 100vh;background-image: url('https://images.unsplash.com/photo-1511367461989-f85a21fda167?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-size: cover; background-repeat: no-repeat;">
        
        <div class="container-fluid text-center heading-custom">
            <h1 class="display-4" style="text-align: center;color:white;font-weight: bold">User Management System</h1>
            <a class="btn btn-primary" href="{{ route('register') }}">User Registration</a>
            <a class="btn btn-secondary " href="{{ route('login') }}">User/Admin Login</a>
        </div>

        {{-- js --}}
        <link rel="stylesheet" href="{{ asset('js/app.js') }}">
        <link rel="stylesheet" href="{{ asset('js/style.js') }}">
    </body>
</html>
