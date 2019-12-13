
@extends('admin.layouts.master')

@section('title')
	AdminWeb_gato - Dashboard 
@endsection
@section('content')
	<h1>DDaay laf trang danh sachs sanr phaarm </h1>
	<div>
        <ul class="breadcrumb">
				<li>
					<p>YOU ARE HERE</p>
				</li>
				<li><a href="admin/product" class="active">Sản phẩm</a> </li>
			</ul>
			<hr>
    <ul class="breadcrumb">
        <li><a href="#" class="active"><input type="button" class="btn btn-success" value="Thêm Sản phẩm"></a> </li>
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
                            <th>Mã sp</th>
                            <th class="col-md-2">Tên sp</th>
                            <th>Giá</th>
                            <th>Giá sale</th>
                            <th>Danh mục</th>
                            <th>Nổi bật</th>
                            <th>Trạng thái</th>
                            <th>Lượt xem</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                   	  
                        <tr class="odd gradeX">
                            <td>Mã code sản phẩm </td>
                            <td>Tên sản phẩm </td>
                            <td>{{-- number_format( $item->price,0,"","," )--}} 200000</td>
                            <td class="center">0</td>
                            {{-- <td><img id="avatar" class="thumbnail" width="100px" height="auto" src="assets/img_product/banh1.jpg"></td> --}}
                   
                            <td class="center">Tên sản phẩm </td>
                            <td> 
                                Có
                            </td>
                            <td>
                                HIển thị
                            </td>
                            
                            <td><img src="assets/img_product/banh1.jpg" width="60px" height="auto" alt=""></td>
                            
                            <td><i class="fa fa-eye" aria-hidden="true"> </i>200view</td>
                            <td class="center">
                            	<a href="#" onclick="return confirm('Hành động sẽ xóa sản phẩm này! bạn có muốn tiếp tục?')" ><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            	<a href="#"  ><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                            </td>
                        </tr>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection