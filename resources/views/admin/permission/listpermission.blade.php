
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Danh sách các quyền truy cập hệ thống 
@endsection
@section('content')
	<h1>Danh sách quyền đăng nhập quản trị viên</h1>
	<div>
        <ul class="breadcrumb">
				<li>
					<p>Bạn đang ở </p>
				</li>
				<li><a href="admin/admin" class="active">Quyền quản trị</a> </li>
			</ul>
			<hr>
    <ul class="breadcrumb ">
        <li><a href="{{route('permission.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm quyền truy cập"></a> </li>
    </ul>
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
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Mã quyền</th>
                            <th class="col-md-2">Tên quyền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_permission as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td class="center">
                                <a href="{{route('permission.edit', ['id_permission' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('permission.delete', ['id_permission'=> $item->id])}}" onclick="return confirm('Hành động sẽ xóa quyền này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                                
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