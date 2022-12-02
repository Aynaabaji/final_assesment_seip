@extends('backend.master.mastering')


@section('content')


<div class="container">
    <div class="row m-4">
        <div class="col-md-12 border border-info rounded pb-2">
            <h1>Add Product</h1>
            <form action="{{ route('insertmul') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input class="name form-control mt-2" type="text" name="name" placeholder="Enter Product Name..." required>
                </div>
                <div class="form-group">
                    <input class="cat_name form-control mt-2" type="text" name="cat_name" placeholder="Enter Category Name..." required>
                </div>
                <div class="form-group">
                    <input class="brand_name form-control mt-2" type="text" name="brand_name" placeholder="Enter Brand Name..." required>
                </div>
                <div class="form-group">
                    <input class="desc form-control mt-2" type="text" name="desc" placeholder="Enter Description..." required>
                </div>
                <div class="form-group">
                    <input class="sin_img form-control mt-2" type="file" name="images" placeholder="Choose image..." required>
                </div>
                <div class="form-group">
                    <input class="form-control mt-2" type="file" name="gallaries[]" required multiple>
                </div>
                <div class="form-group">
                    <select class="item_status form-control mt-2" name="status">
                        <option value="1" selected>Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button class="save btn btn-success mt-2 form-control">Save</button>
                <button class="update btn btn-success mt-2" style="display:none">Update</button>
            </form>
        </div>
    </div>
</div>


@endsection