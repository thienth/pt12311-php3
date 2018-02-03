@extends('layouts.main')
@section('title', 'Create new post')
@section('content')
	{{$supersayan}}
	<form action="{{ route('post.save') }}" method="post" class="col-md-6 col-md-offset-3">
		{{csrf_field()}}
		<input type="hidden" name="id" value="{{$model->id}}">
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" value="{{$model->title}}" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Content</label>
			<textarea class="form-control" name="content">{{$model->content}}</textarea>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-success">Save</button>
			<a href="{{ route('homepage') }}" class="btn btn-danger">Cancel</a>
		</div>
	</form>
@endsection