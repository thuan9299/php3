@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Posts</h3>

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
              <th>Title</th>
              <th>Category name</th>
              <th>Image</th>
              <th>Publish_date</th>
              <th>
                <a href="{{route('post.add')}}" class="btn btn-sm btn-success">Add</a>
              </th>
            </tr>
            @foreach($dsBaiViet as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->title}}</td>
              <td>{{$item->category->name}}</td>
              <td>
                <img src="{{$item->image}}" width="100" >
              </td>
              <td>{{Carbon\Carbon::parse($item->publish_date)->format('d/m/Y')}}</td>
              <td>
                <a href="{{route('post.edit', 
                ['id' => $item->id])}}" class="btn btn-sm btn-danger" title="">Sửa</a>
              </td>
              <td>
                <a href="{{route('post.remove', 
                ['id' => $item->id])}}" onclick="return confirm('Bạn có chắc chắn xóa không ?')" class="btn btn-sm btn-danger" title="">Xoa</a>
              </td>
            </tr>
            @endforeach 
            <tr>
              <td colspan="6" class="text-center">
                {{ $dsBaiViet->links() }}
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