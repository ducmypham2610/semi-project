@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href={{"listCategories"}}>Categories</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="/project-laravel/public/updateCategory" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['category_id']}}">
                </div>
                <div class="form-group">
                	<label>Category name</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Category name" value="{{$data['category_name']}}" required />
                </div>
                <div class="form-group">
                    <label>Category description</label>
                    <input type="text" name="category_description" class="form-control" placeholder="Description" value="{{$data['category_description']}}"" required />
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
