
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
<h1>Chi tiết đơn hàng - {{$order->id}} - Tổng hóa đơn: {{number_format($order->sub_total_pay)}} VNĐ</h1>
{{----}}
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <!-- <th>Mã sản phẩm</th> -->
                            <th class="col-md-2">Tên sản phẩm</th>
                            <th>Ảnh</th>
                            <th>Giá sản phẩm x Số lượng</th>
                            <!-- <th></th> -->
                            <th>Số tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($details_order as $item)
                        <tr class="odd gradeX">
                            <!-- <td>{{$item->id}}</td> -->
                            <td>{{$item->name}}</td>
                            <td><img src="assets/img_product/{{$item->image}}" style="height: 60px;" alt="{{$item->name}}"></td>
                            <td>{{number_format($item->price_order)}} VNĐ x {{$item->quantity_order}}</td>
                            <!-- <td></td> -->
                            <td>{{$item->quantity_order*$item->price_order}} VNĐ</td>
                            <!-- <td class="center">
                                <a href="#"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i>Chi tiết sản phẩm</button></a>
                                <a href="#" onclick="return confirm('Hành động sẽ xóa menu này này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            </td> -->
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                        <tr>Tổng hóa đơn: {{number_format($order->sub_total_pay)}} VNĐ</tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection