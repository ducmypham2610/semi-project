<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
#navbar{
	margin-top:50px;}
#tbl-first-row{
	font-weight:bold;}
#logout{
	padding-right:30px;}
</style>
</head>
<body>

<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href={{"listCategories"}}>Home</a></li>
                        <li><a href={{"listCategories"}}>Categories</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="/project-laravel/public/category/update" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['category_id']}}">
                </div>
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Username" value="{{$data['category_name']}}" required />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="category_description" class="form-control" placeholder="Description" value="{{$data['category_description']}}"" required />
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>

</body>
</html>
    {{-- <form action="/project-laravel/public/category/update" method="POST" role="form">
            @csrf
            <input type="hidden" name="id" value="{{$data['category_id']}}">
            <input type="text" name="category_name" value="{{$data['category_name']}}"> <br><br>
            <input type="text" name="category_description" value="{{$data['category_description']}}"> <br><br>
            <input type="submit" name="submit" value="Save">
    </form> --}}
