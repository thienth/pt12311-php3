<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container bg-success">
		@yield('content')
	</div>
	<script type="text/javascript" src="{{ asset('plugins/tinymce/tinymce.min.js') }}"></script>
	@yield('js')
</body>
</html>