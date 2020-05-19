
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Bài viết
@endsection
@section('content')
	<h1>Danh sách Bài viết</h1>
	<div>
        <ul class="breadcrumb">
			<li>
				<p>Bạn đang ở </p>
			</li>
			<li><a href="{{route('blog.list')}}" class="active">Quản lý Bài viết</a> </li>
		</ul>
		<hr>
    <div class="row-fluid grid"></div>
    <div class="box-header ">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach

            </div>
        @endif
        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
    </div>
</div>
<div>
    <ul class="breadcrumb ">
        <li><a href="{{route('blog.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm Bài viết"></a> </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Mã bài viết</th>
                            <th class="col-md-2">Tên Bài viết</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_blog as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td class="center">
                                <a href="{{route('blog.edit', ['id_blog' => $item->id])}}"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('blog.delete', ['id_blog' => $item->id])}}" onclick="return confirm('Hành động sẽ xóa Chủ đề bài viết này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div>
    <ul class="breadcrumb ">
        <li><a href="{{route('cate_blog.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm Chủ đề Bài viết"></a> </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Mã chủ đề bài viết</th>
                            <th class="col-md-2">Tên chủ đề bài viết</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_cate_blog as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td class="center">
                                <a href="{{route('cate_blog.edit', ['id_cate_blog' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('cate_blog.delete', ['id_cate_blog' => $item->id])}}" onclick="return confirm('Hành động sẽ xóa Chủ đề bài viết này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            </td>
                            {{--<td class="center">
                                <a href="{{route('permission.edit', ['id_permission' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('permission.delete', ['id_permission'=> $item->id])}}" onclick="return confirm('Hành động sẽ xóa Chủ đề bài viết này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            </td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection