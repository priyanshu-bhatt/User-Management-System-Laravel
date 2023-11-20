@extends('layouts.adminLayout')

@section('content')
<body style="background-image: url('https://images.unsplash.com/photo-1511367461989-f85a21fda167?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');background-size: cover; background-repeat: no-repeat;"></body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--Success Msg--}}
            @if (session('msg_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('msg_success')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="text-center">
                <h1 class="display-4" style="color: white;">Users Count</h1>
                <h1 class="display-3" style="color: yellow;">{{$users_count}}</h1>
            </div>
        </div>
    </div>
</div>
@endsection
