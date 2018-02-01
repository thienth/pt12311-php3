<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{ route('login') }}" method="post" >
		{{csrf_field()}}
		@if (session('errMsg') != "")
			<p style="color: red;">{{session('errMsg')}}</p>
		@endif
		Email: <input type="text" name="email" value="" placeholder="">
		<br>
		Password: <input type="password" name="password" value="" placeholder="">
		<br>
		<input type="checkbox" name="remember" value="1"> Remember me
		<br>
		<button type="submit">Login</button> 
	</form>
</body>
</html>