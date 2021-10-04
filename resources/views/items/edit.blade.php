@extends('base')

@section('content')

<style>
    .col-md-4{
        margin-top: 7%;
    }
    body{
        background-color: lightpink
    }

</style>

<body>
    <div class="container">
            <div class="col-md-4 offset-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white">
                        <h3>Edit Item</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/dashboard/edit/' . $item->id)}}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name"  value="{{$item->name}}" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="description" name="description" value="{{$item->description}}" id="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price">Price</label>
                                <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                            </div>
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn btn-success" type="submit">Done</button>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>

</body>

@endsection