@extends('base')

@section('content')

<nav class="navbar navbar-expand-lg navbar-secondary bg-dark">
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
          <a class="nav-link box text-white" href="/dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link box text-white" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
</nav>
<div class="container">
    <div class="mt-2" style="float:center; ">   
        <h1 class="text-white text-center">Activity Log</h1>
    </div>
    <table class="table table-borderless table-secondary text-center">
        <thead class="theadstyle">
            <th>Timestamp</th>
            <th>Log Entry</th>
        </thead>
        <tbody>
    
            @foreach($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->log_entry}}</td>
            </tr>
            @endforeach
    
        </tbody>
    </table> 
</div>
@stop