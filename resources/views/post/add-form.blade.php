@extends('layouts.main')
@section('content')
<form action="{{route('post.add')}}" method="post" enctype="multipart/form-data" novalidate>
	@csrf
	<div class="form-group">
		<label for="">Tiêu đề</label>
		<input type="text" name="title" class="form-control" value="{{old('title','')}}" placeholder="">
		@if($errors->first('title'))
		<span class="text-danger">{{$errors->first('title')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="image" value="{{old('image')}}" class="form-control">
		@if($errors->first('image'))
		<span class="text-danger">{{$errors->first('image')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Nội dung</label>
		<textarea name="content" rows="10" class="form-control">{{old('content')}}</textarea>
		@if($errors->first('content'))
		<span class="text-danger">{{$errors->first('content')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Tác giả</label>
		<input type="text" name="author" value="{{old('author')}}" class="form-control">
		@if($errors->first('author'))
		<span class="text-danger">{{$errors->first('author')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Ngày đăng</label>
		<input type="date" name="publish_date" value="{{old('publish_date')}}" class="form-control" placeholder="">
		@if($errors->first('publish_date'))
		<span class="text-danger">{{$errors->first('publish_date')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Danh mục</label>
		<select name="cate_id" class="form-control">
			option
			@foreach($cates as $item)
			<option value="{{$item->id}}">{{$item->name}}</option>
			@endforeach
		</select>
		@if($errors->first('cate_id'))
		<span class="text-danger">{{$errors->first('cate_id')}}</span>
		@endif
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="1" name="status"> Active
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('homepage')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>
@endsection