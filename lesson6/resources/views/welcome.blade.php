@extends('layouts.main')
@section('content')
	<form action="" method="get">
		<input type="text" name="keyword" value="">
		<button type="submit">Search</button>
	</form>
	<table class="table">
		<thead>
			<tr>
				<th>Post ID</th>
				<th>Post Title</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach ($posts as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->title}}</td>
				<td>
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