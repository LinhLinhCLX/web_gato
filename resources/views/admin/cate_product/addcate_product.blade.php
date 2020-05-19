<!-- <h1>Add catedory cate_product</h1> -->
@extends('admin.layouts.master')
@section('title','Thêm danh mục sản phẩm')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="{{route('cate_product.list')}}" class="active">Thêm danh mục sản phẩm</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Thêm danh mục sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="{{route('cate_product.add.post')}}" method="post" enctype="multipart/form-data">
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
	                        <label>Nhập danh mục sản phẩm</label>
							<input type="text" name="name" placeholder="Nhập Tiêu đề sản phẩm" class="form-control" value="">
	                    </div>
	                    {{--<div class="form-group">
	                        <label>slug</label>
							<input type="text" name="slug" placeholder="Nhập Tiêu đề sản phẩm" class="form-control" value="">
	                    </div>--}}

	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0">Ẩn sản phẩm</option>
	                            <option value="1">Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>HIển thị trong mục menu</label>
	                        <select name="id_cate_menu" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $cate_menu as $item)
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
							<label>Ảnh danh mục sản phẩm</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="assets/import_image.png">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Mô tả danh mục sản phẩm</label>
								<textarea placeholder="Nhập Mô tả danh mục sản phẩm" name="description" id="content1"></textarea>
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
