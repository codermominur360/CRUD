@extends('master.layout')
@section('content')
<div class="modal fade" id="create-add-product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="products" method="post" class="create-product-form" >
                    @csrf
                    <ul class="errors alert alert-danger" style="display: none;"></ul>
                    <div class="row">
                        <div class="form-group">
                            <div class="col">
                                <label for="product-name">Product Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Product name">
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter Quantity"  name="quantity">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Enter unit" name="unit">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Price" name="price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
