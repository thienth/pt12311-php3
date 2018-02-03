@extends('layouts.main')
@section('content')
	{{$supersayan}}
	@auth
		<h2>Hello, mr. {{Auth::user()->name}}</h2>

		<a href="{{ route('logout') }}" title="">Logout</a>
	@endauth

	<form action="" method="get">
		<input type="text" name="keyword" value="">
		<button type="submit">Search</button>
	</form>
	<table class="table">
		<thead>
			<tr>
				<th>Post ID</th>
				<th>Post Title</th>
				<th>
					<a href="{{ route('post.add') }}" class="btn btn-success" title="">Add new</a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->title}}</td>
				<td>
					<a href="{{ route('post.update', ['id' => $p->id]) }}" class="btn btn-primary btn-sm">Update</a>
					<a class="btn btn-sm btn-danger" href="{{ route('post.remove', ['id' => $p->id]) }}" title="">Remove</a>
				</td>
			</tr>
			@endforeach
			<tr>
				<td colspan="2" class="text-center">
					{{$posts->links()}}
				</td>
			</tr>
		</tbody>
	</table>
@endsection