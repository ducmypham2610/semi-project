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
        	<form action="/project-laravel/public/updateUser" method="POST" role="form">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['user_id']}}">
                </div>
                <div class="form-group">
                	<label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" value="{{$data['username']}}" required />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{$data['email']}}" required />
                </div>
                <div class="form-group">
                	<label>Role</label>
                    <input type="text" name="role" class="form-control" placeholder="role" value="{{$data['role']}}" required />
                </div>
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </form>
        </div>
    </div>
</div>
@stop
