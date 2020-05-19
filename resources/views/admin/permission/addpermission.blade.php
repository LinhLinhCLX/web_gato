@extends('admin.layouts.master')
@section('title','Thêm Quyền truy cập')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="admin/product" class="active">Thêm uyền truy cập hệ thống</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Thêm quyền truy cập hệ thống</div>
        <div class="panel-body">

        	<form role="form" action="{{route('permission.add.post')}}" method="post" enctype="multipart/form-data">
        		@csrf
				<div class="row">
	                <div class="col-md-12">
	                	<div class="form-group">
							@if(session('thongbao'))
							<div class="alert alert-danger">
								{{session('thongbao')}}
							</div>
							@endif
						</div>
	                    <div class="form-group">
	                        <label>Tên quyền truy cập</label>
							<input type="text" name="name" placeholder="Nhập tên quyền truy cập" class="form-control" value="">
	                    </div>
	                    
					</div>
				</div>
				<div class="row">
	                <div class="col-md-6 col-xs-12">		
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" class="form-check-input" name="view_post" value="1">Xem bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_post" class="form-check-input" value="1">Thêm bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_post" class="form-check-input" value="1">Sửa bài viết
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_post" class="form-check-input" value="1">Xóa bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_category_post" class="form-check-input" value="1">Hiển thị danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_category_post" class="form-check-input" value="1">Thêm danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_category_post" class="form-check-input" value="1">Sửa danh mục bài viết
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_category_post" class="form-check-input" value="1">Xóa danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_tag_post" class="form-check-input" value="1">Xem tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_tag_post" class="form-check-input" value="1">Thêm tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_tag_post" class="form-check-input" value="1">Sửa tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_tag_post" class="form-check-input" value="1">Xóa tag bài viết
						  </label>
						</div>
	                </div>
	                <div class="col-md-6 col-xs-12">
	                    <div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_product" class="form-check-input" value="1">Danh sách sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_product" class="form-check-input" value="1">Thêm sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_product" class="form-check-input" value="1">Sửa sản phẩm
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_product" class="form-check-input" value="1">Xóa sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_category_product" class="form-check-input" value="1">Xem danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_category_product" class="form-check-input" value="1">Thêm danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_category_product" class="form-check-input" value="1">Sửa danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_category_product" class="form-check-input" value="1">Xóa danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_permission" class="form-check-input" value="1">Xem quyền
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_permission" class="form-check-input" value="1">Thêm quyền
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_permission" class="form-check-input" value="1">Sửa quyền truy cập
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_permission" class="form-check-input" value="1">Xóa quyền truy cập
						  </label>
						</div>
						{{--
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1">Option 1
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1">Option 2
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1">Option 1
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1">Option 2
						  </label>
						</div>
							--}}
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
