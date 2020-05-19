@extends('admin.layouts.master')
@section('title','Thêm người dùng')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="admin/product" class="active">Thêm người dùng</a> </li>
	</ul>
	<hr>
    <div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach

                </div>

            @endif
         
    </div>
</div>

<div class="col-xs-12 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm người dùng</div>
        <div class="panel-body">

        	<form role="form" action="{{route('admin_user.add.post')}}" method="post" enctype="multipart/form-data">
        		@csrf
        		
				<div class="row">
	                <div class="col-md-8">
	                	<div class="form-group">
							@if(session('thongbao'))
							<div class="alert alert-danger">
								{{session('thongbao')}}
							</div>
							@endif
						</div>
						<div class="form-group">
	                        <label>Email</label>
							<input type="text" name="email" placeholder="Nhập email người dùng" class="form-control" value="">
	                    </div>
						<div class="form-group">
	                        <label>Tên người dùng</label>
							<input type="text" name="name" placeholder="Nhập tên người dùng" class="form-control" value="">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Số điện thoại</label>
							<input type="text" name="phone" placeholder="Nhập Số điện thoại" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Mật khẩu</label>
							<input type="password" name="password" placeholder="Nhập mật khẩu" class="form-control" value="">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0">Vô hiệu hóa</option>
	                            <option value="1">Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>Danh mục quyền truy cập</label>
	                        <select name="level" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $list_permission as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>
								@endforeach
	                        	{{--@foreach($category as $item)
	                            	<option value="{{$item->id}}">{{$item->name}}</option>
	                            @endforeach
	                            --}}
							</select>
						</div>
						
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
							<label>Ảnh Người dùng</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/import-img.png">
	                    </div>
	                </div>
	            {{--    
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Thông tin sản phẩm</label>
								<textarea placeholder="Nhập thông tin sản phẩm" name="information" id="content1"></textarea>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Thông số kĩ thuật</label>
								<textarea placeholder="Nhập thông số kĩ thuật" name="thongso" id="content2"></textarea>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Hướng dẫn sử dụng</label>
								<textarea placeholder="Nhập hướng dẫn sử dụng" name="huongdan" id="content3"></textarea>
	                        </div>
	                    </div>
	                </div>
	            --}}    
	        	</div>
	        	<div class="col-md-12">
	                <div class="form-actions">
	                    <div class="pull-right">
	                        <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
	                        {{-- <button type="button" class="btn btn-white btn-cons">Cancel</button> --}}
	                    </div>
	                </div>
	            </div>

        		
            </form>
        </div>
    </div>
</div>


@endsection
