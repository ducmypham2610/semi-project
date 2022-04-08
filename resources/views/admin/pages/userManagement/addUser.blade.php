@extends('admin.layouts.master')
@section('content')
<div class="container">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href={{"listUsers"}}>Users</a></li>
                	</ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	<form action="addUser" method="post">
                @csrf
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required />
                </div>
                <div class="form-group">
                	<label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required />
                </div>
                <div class="form-group">
                	<label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" required />
                </div>
                <input type="submit" name="submit" value="Add" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
