@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Product</h3>

        <div class="box-tools">
          <form action="" method="get">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Image</th>
              <th>Description</th>
              <th>Price</th>
              <th>Category</th>
              <th>
                <a href="{{route('product.add')}}" class="btn btn-sm btn-success">Add</a>
              </th>
            </tr>
            @foreach($dsSP as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>
                <img src="{{$item->feature_image}}" width="100" >
              </td>
              <td>{{$item->description}}</td>
              <td>{{$item->price}}$</td>
              <td>{{$item->category->name}}</td>
              <td>
                <a href="{{route('product.edit', 
                ['id' => $item->id])}}" class="btn btn-sm btn-danger" title="">Sửa</a>
              </td>
              <td>
                <a href="{{route('product.remove', 
                ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" class="btn btn-sm btn-danger" title="">Xoa</a>
              </td>
            </tr>
            @endforeach 
            <tr>
              <td colspan="4" class="text-center">
                {{ $dsSP->links() }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@endsection