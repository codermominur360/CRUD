@extends('master.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Product List</h3>
        <button class="btn btn-primary float-right add-product-btn">+</button>
    </div>
    <div class="card-body">
        @if(!$products->all())
            <div class="alert alert-danger">No Product in the database</div>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->quantity}} {{$product->unit}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <buttom class="btn btn-primary " id="action" data-target="{{$product->id}}" >Action</buttom>
                        </td>
                    </tr>
                 @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="card-footer">
        <div class="text-center">CopyRight mominur rahman@kfkf</div>
    </div>
</div>

@endsection
