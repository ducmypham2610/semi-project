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
                        <li><a href="#">Home</a></li>
                        <li><a href={{"listCategories"}}>Categories</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="/project-laravel/public/category/create" role="form" method="POST">
                @csrf
                <div class="form-group">
                	<label>Category's name</label>
                    <input type="text" name="category_name" class="form-control" placeholder="Category's name" required />
                </div>
                <div class="form-group">
                	<label>Category's description</label>
                    <input type="text" name="category_description" class="form-control" placeholder="Category's description" required />
                </div>
                <input type="submit" name="submit" value="Add" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>

</body>
</html>

    {{-- <form action="/project-laravel/public/category/create" role="form" method="POST">
        @csrf
        <label for="category_name">Name</label>
        <input type="text" name="category_name" placeholder="Category's name">
        <label for="category_description">Description</label>
        <input type="text" name="category_description" placeholder="Category's description">
        <input type="submit" value="Add">
    </form> --}}
