@extends('layouts.main')
@section('content')
<form action="{{route('category.add')}}" method="post" enctype="multipart/form-data" novalidate>
	@csrf
	<div class="form-group">
		<label for="">Tên danh mục</label>
		<input type="text" name="name" class="form-control" value="{{old('name','')}}" placeholder="">
		@if($errors->first('name'))
		<span class="text-danger">{{$errors->first('name')}}</span>
		@endif
	</div>
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('category')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>
@endsection