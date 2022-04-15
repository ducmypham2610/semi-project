@include('admin.layouts.head')
<body>
	@include('admin.layouts.navbar')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		@yield('content');
	</div>

    @include('admin.layouts.js')
</body>

</html>
