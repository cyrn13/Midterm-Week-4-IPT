@extends('base')

@section('content')
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:2;">
    <a class="navbar-brand" href="{{url('/')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/register')}}">Register</a>
        </li>
      </ul>
    </div>
</nav>

</div>

<body>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-3">
            <div class="card-header bg-secondary text-white">
                <h3 class="card-title">Login Form</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                {{csrf_field()}}
                
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Login</button>
                <button class="btn btn-danger" type="submit">Cancel</button>
            </form>
            </div>
        </div>
    </div>
</div>
</body>

<style>
    body{
        background-color: lightblue;
    }
</style>


@stop