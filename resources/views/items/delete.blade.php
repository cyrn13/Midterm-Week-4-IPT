@extends('base')

@section('content')

<style>
    .col-md-4{
        margin-top: 7%;
    }

  body{
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(109,109,193,1) 35%, rgba(0,212,255,1) 100%);
    }
</style>

<div class="container">
    <div class="col-md-4 offset-4">
        <div class="card">
            <div class="card-header bg-warning text-dark text-center ">
                <h3>Delete Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <h5 class="mt-2 mb-3">Are you sure you want to delete this item? <br> <br> {{ $item->name }} </h5>
                    
                    <div class="text-center">
                        <button class="btn btn-danger" type="submit">Delete</button>
                        <a href="{{ url('/dashboard') }}" class="btn btn-secondary text-white">Cancel</a>   
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection