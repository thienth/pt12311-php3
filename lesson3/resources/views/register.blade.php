<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="save-register" method="post" enctype="multipart/form-data">


		user name:<input type="text" name="username" value="{{old('username', 'thienth')}}" placeholder="">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('username')}}</span>
		@endif
		<br>
		email: <input type="text" name="email" value="{{old('email')}}" placeholder="">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('email')}}</span>
		@endif
		<br>
		password: <input type="password" name="password" value="" placeholder="">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('password')}}</span>
		@endif
		<br>
		confirm password <input type="password" name="cfpassword" value="" placeholder="">
		@if (count($errors) > 0)
			<span style="color: red">{{$errors->first('cfpassword')}}</span>
		@endif
		<button type="submit">Save</button>
	</form>
	
</body>
</html>