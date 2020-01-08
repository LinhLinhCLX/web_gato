@extends('admin.layouts.master')
@section('title','Thêm Sản phẩm')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="admin/product" class="active">Sản phẩm</a> </li>
	</ul>
	<hr>
    <div>
            {{-- @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach

                </div>

            @endif --}}
         
    </div>
</div>

<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="" method="post" enctype="multipart/form-data">
        		@csrf
        		
				<div class="row">
	                <div class="col-md-8">
	                	<div class="form-group">
	                        <label>Danh mục sản phẩm</label>
	                        <select name="id_category" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $list_cate_product as $item)
								<option value="{{$item->id}}">{{$item->name}}</option>
								@endforeach
	                        	{{--@foreach($category as $item)
	                            	<option value="{{$item->id}}">{{$item->name}}</option>
	                            @endforeach
	                            --}}
							</select>
							@if(session('thongbao'))
							<div class="alert alert-danger">
								{{session('thongbao')}}
							</div>
							@endif
						</div>
						<div class="form-group">
	                        <label>Mã sản phẩm</label>
							<input type="text" name="code_name" placeholder="Nhập mã sản phẩm" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Tên sản phẩm</label>
							<input type="text" name="name" placeholder="Nhập tên sản phẩm" class="form-control" value="">
							
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Giá sản phẩm</label>
							<input type="text" name="price" placeholder="Nhập giá sản phẩm" class="form-control" value="">
							
	                    </div>
	                    <div class="form-group">
	                        <label>Giá sale</label>
							<input type="text" placeholder="ex : 0% ,10%" name="sale_price" class="form-control" value="">
							
	                    </div>
	                    <div class="form-group">
	                        <label>Sản phẩm nổi bật</label>
	                        <select name="state" class="form-control">
	                            <option value="0">Không</option>
	                            <option value="1">Có</option>
	                        </select>
						</div>
						
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
							<label>Ảnh sản phẩm</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/import-img.png">
	                    </div>
	                </div>
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
