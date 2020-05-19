<!-- <h1>view edit cate product</h1> -->
<!-- <h1>Add catedory cate_product</h1> -->
@extends('admin.layouts.master')
@section('title','Sửa Danh mục sản phẩm')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="{{route('cate_product.list')}}" class="active">Sửa Danh mục sản phẩm</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Sửa Danh mục sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="{{route('cate_product.edit.post', ['id_cate_product' => $cate_product->id])}}" method="post" enctype="multipart/form-data">
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
	                        <label>Nhập Danh mục sản phẩm</label>
							<input type="text" name="name" placeholder="Nhập Danh mục sản phẩm" class="form-control" value="{{$cate_product->name}}">
	                    </div>
	                    <div class="form-group">
	                        <label>slug</label>
							<input type="text" name="slug" class="form-control" value="{{$cate_product->slug}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0" {{$cate_product->active == 0? 'selected' : '' }} >Ẩn </option>
	                            <option value="1" {{$cate_product->active == 1? 'selected' : '' }} >Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>HIển thị trong mục menu</label>
	                        <select name="id_cate_menu" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $cate_menu as $item)
								<option value="{{$item->id}}" {{$cate_product->id_cate_menu == $item->id? 'selected' : '' }}>{{$item->name}}</option>
								@endforeach
	                        	{{--@foreach($category as $item)
	                            	<option value="{{$item->id}}" {{$cate_product->id_cate_menu == $item->id? 'selected' : '' }} >{{$item->name}}</option>
	                            @endforeach
	                            --}}
							</select>
						</div>
						
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
							<label>Ảnh Danh mục sản phẩm</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="assets/img_cate_product/{{$cate_product->image}}">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Mô tả Danh mục sản phẩm</label>
								<textarea placeholder="Nhập mô tả danh mục sản phẩm" name="description" id="content1">{{$cate_product->description}}</textarea>
	                        </div>
	                    </div>
					</div>
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
