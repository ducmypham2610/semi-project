@extends('admin.layouts.master')
@section('content')

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href={{"listProducts"}}>Products</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="{{ url('updateProduct') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['product_id']}}">
                </div>
                <div class="form-group">
                	<label>Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Username" value="{{$data['product_name']}}" required />
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="product_description" class="form-control" placeholder="Description" value="{{$data['product_description']}}" required />
                </div>
                <div class="form-group">
                	<label>Price</label>
                    <input type="text" name="product_price" class="form-control" placeholder="Product's price" value="{{$data['product_price']}}" required />
                </div>
                <div class="form-group">
                	<label>Image</label>
                    <input type="file" name="product_image" class="form-control" placeholder="Product's image" required />
                </div>
                <div class="form-group">
                	<label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->category_id}}">{{$category->category_id}}-{{$category->category_name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
