@extends('admin.layouts.master')
@section('content')

<div class="container d-flex flex-column">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default bg-dark">
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
        	<form action="/project-laravel/public/addProduct" role="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                	<label>Name</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Product's name" required />
                </div>
                <div class="form-group">
                	<label>Description</label>
                    <input type="text" name="product_description" class="form-control" placeholder="Product's description" required />
                </div>
                <div class="form-group">
                	<label>Price</label>
                    <input type="text" name="product_price" class="form-control" placeholder="Product's price" required />
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
                <input type="submit" name="submit" value="Add" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
