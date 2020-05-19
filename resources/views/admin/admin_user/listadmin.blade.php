
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Danh sach quản trị viên 
@endsection
@section('content')
	<h1>Danh sách quản trị viên</h1>
	<div>
        <ul class="breadcrumb">
				<li>
					<p>YOU ARE HERE</p>
				</li>
				<li><a href="admin/admin" class="active">Người quản trị</a> </li>
			</ul>
			<hr>
    <ul class="breadcrumb">
        <li><a href="{{route('admin_user.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm người dùng"></a> </li>
    </ul>
    <div class="box-header">
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
                            <th>Mã Admin</th>
                            <th class="col-md-2">Tên Admin</th>
                            <th>Email</th>
                            <th>Active</th>
                            <!-- <th>Cấp bậc quyền</th> -->
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_admin as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            @if($item->active == 1)
                            <td> 
                               Hiển thị
                            </td>
                            @else
                            <td> 
                               Ẩn
                            </td>
                            @endif
                            <!-- <td>Quyền truy cập</td> -->
                            <td class="center">
                                <a href="{{route('admin_user.edit', ['id' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                                <a href="{{route('admin_user.delete', ['id_admin' => $item->id])}}" onclick="return confirm('Hành động sẽ xóa người dùng này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                                
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