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
             <a class="nav-link box text-white" href="/logs">Logs</a>
          </li>
        <li class="nav-item">
          <a class="nav-link box text-white" href="/logout">Logout</a>
        </li>
      </ul>
    </div>
</nav>


<h1 class="text-dark text-center m-3">List of Items</h1>
  <div class="container">
    <div class="mt-2" style="float: right; ">
      <a href="{{url('dashboard/new')}}" class="btn btn-info m-2" style="float:right;">Add Item</a>
    </div>
    
      
        <table class="table table-borderless table-secondary text-center">
            <thead class="theadstyle">
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach($items as $item)
        
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td class="text-center" style="width: 150px;">
                        <a href="{{ url('dashboard/edit/' . $item->id) }}" class="btn btn-primary btn-sm d-inline">Edit</a>
                        <a href="{{ url('dashboard/delete/' . $item->id) }}" class="btn btn-danger btn-sm" type="submit">Delete</a>
                    </td>
                </tr>
        
                @endforeach
            </tbody>
        </table> 
  </div>

    
@endsection

