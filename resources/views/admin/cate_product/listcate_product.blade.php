
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Dah mục sản phẩm
@endsection
@section('content')
	<h1>Danh sách danh mục sản phẩm</h1>
	<div>
        <ul class="breadcrumb">
			<li>
				<p>Bạn đang ở </p>
			</li>
			<li><a href="{{route('cate_product.list')}}" class="active">Quản lý danh mục sản phẩm</a> </li>
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
        <li><a href="{{route('cate_product.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm Danh mục sản phẩm"></a> </li>
    </ul>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Mã danh mục sản phẩm</th>
                            <th class="col-md-2">Tên danh mục sản phẩm</th>
                            <th> Số hiển trên menu</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_cate_product as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->id_cate_menu}}</td>
                            <td>{{$item->active}}</td>
                            <td class="center">
                                <a href="{{route('cate_product.edit', ['id_cate_product' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('cate_product.delete', ['id_cate_product' => $item->id])}}" onclick="return confirm('Hành động sẽ xóa danh mục sản phẩm này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection