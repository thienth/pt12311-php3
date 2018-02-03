<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	Xin chao {{Auth::user()->name}},
	<strong>Bạn không có quyền truy cập vào đường dẫn này!</strong>
	<br>
	<a href="{{ route('logout') }}" title="">Đăng xuất</a> 
	<a href="{{ route('homepage') }}" title="">Trang chủ</a>
</body>
</html>