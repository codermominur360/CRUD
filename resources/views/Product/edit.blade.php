@extends('master.layout')
@section('content')
<div class="modal fade" id="edit-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit{{$product->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('products')}}" method="post" id="edit-product-form" >
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <div class="col">
                                <label for="product-name">Product Name</label>
                                <input type="text" class="form-control" name="name" value="{{$product->name}}" >
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" value="{{$product->quantity}}"  name="quantity" >
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" value="{{$product->unit}}" name="unit" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" value="{{$product->price}}" name="price" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        @method('PUT')
                        <button type="submit" class="btn btn-warning" id="edit-product-btn" data-target="{{$product->id}}" >Update</button>

                </form>
                <form action=" " method="post" id="delete-product-form" data-target="{{$product->id}}">
                    @csrf
                    @method('DELETE')
                    <div type="submit" class="btn btn-danger">Delete</div>
                </form>
            </div>
            </div>

        </div>
    </div>
</div>
@endsection
