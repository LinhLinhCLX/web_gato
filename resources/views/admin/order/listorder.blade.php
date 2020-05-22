
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Đơn hàng
@endsection
@section('content')
	<h1>Danh sách đơn hàng</h1>
	<div>
        <ul class="breadcrumb">
			<li>
				<p>Bạn đang ở </p>
			</li>
			<li><a href="{{route('order.list')}}" class="active">Quản lý đơn hàng</a> </li>
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
<h1>Danh sách đơn hàng</h1>
{{----}}
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th class="col-md-2">Giá trị đơn hàng</th>
                            <th>Mã khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($list_order as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->id}}</td>
                            <td>{{$item->sub_total_pay}}</td>
                            <td>{{$item->id_user}}</td>
                            <td>{{$item->status}}</td>
                            <td class="center">
                                <a href="{{route('order.details', ['id_order' => $item->id])}}"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i>Chi tiết đơn hàng</button></a>
                                <!-- <a href="{{route('cate_menu.delete', ['id_cate_menu' => $item->id])}}" onclick="return confirm('Hành động sẽ xóa menu này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a> -->
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