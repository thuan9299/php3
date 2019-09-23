@extends('layouts.main')
@section('content')
<form action="{{route('product.add')}}" method="post" enctype="multipart/form-data" novalidate>
	@csrf
	<div class="form-group">
		<label for="">Tên sản phẩm</label>
		<input type="text" name="name" class="form-control" value="{{old('name','')}}" placeholder="">
		@if($errors->first('name'))
		<span class="text-danger">{{$errors->first('name')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Slug</label>
		<input type="text" value="{{old('slug')}}" name="slug" class="form-control">
		@if($errors->first('slug'))
		<span class="text-danger">{{$errors->first('slug')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Price</label>
		<input type="text" value="{{old('price')}}" name="price" class="form-control">
		@if($errors->first('price'))
		<span class="text-danger">{{$errors->first('price')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label>Image</label>
		<input type="file" name="feature_image" value="{{old('feature_image')}}" class="form-control">
		@if($errors->first('feature_image'))
		<span class="text-danger">{{$errors->first('feature_image')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Mô tả</label>
		<textarea name="description" rows="10" class="form-control">{{old('description')}}</textarea>
		@if($errors->first('description'))
		<span class="text-danger">{{$errors->first('description')}}</span>
		@endif
	</div>
	<div class="form-group">
		<label for="">Danh mục</label>
		<select name="cate_id" class="form-control">
			@foreach($cates as $item)
			<option value="{{$item->id}}">{{$item->name}}</option>
			@endforeach
		</select>
		<!-- @if($errors->first('cate_id'))
		<span class="text-danger">{{$errors->first('cate_id')}}</span>
		@endif -->
	</div>
	<div class="checkbox">
		<label>
			<input type="checkbox" value="1" name="status"> Active
		</label>
	</div>
	<div>
		<button type="submit" class="btn btn-sm btn-success">Lưu</button>
		<a href="{{route('product')}}" class="btn btn-sm btn-danger">Hủy</a>
	</div>

</form>
@endsection