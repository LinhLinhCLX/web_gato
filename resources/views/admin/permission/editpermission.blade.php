@extends('admin.layouts.master')
@section('title','Sửa Quyền truy cập')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="admin/product" class="active">Sửa uyền truy cập hệ thống</a> </li>
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

<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Sửa quyền truy cập hệ thống</div>
        <div class="panel-body">

        	<form role="form" action="{{route('permission.edit.post', ['id_permission' => $permission->id])}}" method="post" enctype="multipart/form-data">
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
							<input type="text" name="name" placeholder="Nhập tên quyền truy cập" class="form-control" value="{{$permission->name}}">
	                    </div>
	                    <!-- $view_tag_post = ($request->view_tag_post ==1 ) ? 1 : 0; -->
	                    <!-- permission -->
					</div>
				</div>
				<div class="row">
	                <div class="col-md-6 col-xs-12">		
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" class="form-check-input" name="view_post" value="1" {{$permission->view_post == 1? 'checked' : ''}} > Xem bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_post" class="form-check-input" value="1" {{$permission->add_post == 1? 'checked' : ''}} >Thêm bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_post" class="form-check-input" value="1" {{$permission->edit_post == 1? 'checked' : ''}} >Sửa bài viết
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_post" class="form-check-input" value="1" {{$permission->delete_post == 1? 'checked' : ''}} >Xóa bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_category_post" class="form-check-input" value="1" {{$permission->view_category_post == 1? 'checked' : ''}} >Hiển thị danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_category_post" class="form-check-input" value="1" {{$permission->add_category_post == 1? 'checked' : ''}} >Thêm danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_category_post" class="form-check-input" value="1" {{$permission->edit_category_post == 1? 'checked' : ''}} >Sửa danh mục bài viết
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_category_post" class="form-check-input" value="1" {{$permission->delete_category_post == 1? 'checked' : ''}} >Xóa danh mục bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_tag_post" class="form-check-input" value="1" {{$permission->view_tag_post == 1? 'checked' : ''}} >Xem tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_tag_post" class="form-check-input" value="1" {{$permission->add_tag_post == 1? 'checked' : ''}} >Thêm tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_tag_post" class="form-check-input" value="1" {{$permission->edit_tag_post == 1? 'checked' : ''}} >Sửa tag bài viết
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_tag_post" class="form-check-input" value="1" {{$permission->delete_tag_post == 1? 'checked' : ''}} >Xóa tag bài viết
						  </label>
						</div>
	                </div>
	                <div class="col-md-6 col-xs-12">
	                    <div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_product" class="form-check-input" value="1" {{$permission->view_product == 1? 'checked' : ''}} >Danh sách sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_product" class="form-check-input" value="1" {{$permission->add_product == 1? 'checked' : ''}} >Thêm sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_product" class="form-check-input" value="1" {{$permission->edit_product == 1? 'checked' : ''}} >Sửa sản phẩm
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_product" class="form-check-input" value="1" {{$permission->delete_product == 1? 'checked' : ''}} >Xóa sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_category_product" class="form-check-input" value="1" {{$permission->view_category_product == 1? 'checked' : ''}} >Xem danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_category_product" class="form-check-input" value="1" {{$permission->add_category_product == 1? 'checked' : ''}} >Thêm danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_category_product" class="form-check-input" value="1" {{$permission->edit_category_product == 1? 'checked' : ''}} >Sửa danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_category_product" class="form-check-input" value="1" {{$permission->delete_category_product == 1? 'checked' : ''}} >Xóa danh mục sản phẩm
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="view_permission" class="form-check-input" value="1" {{$permission->view_permission == 1? 'checked' : ''}} >Xem quyền
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="add_permission" class="form-check-input" value="1" {{$permission->add_permission == 1? 'checked' : ''}} >Thêm quyền
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="edit_permission" class="form-check-input" value="1" {{$permission->edit_permission == 1? 'checked' : ''}} >Sửa quyền truy cập
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="delete_permission" class="form-check-input" value="1" {{$permission->delete_permission == 1? 'checked' : ''}} >Xóa quyền truy cập
						  </label>
						</div>
						{{--
						<div class="form-check form-group">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1" >Option 1
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1" >Option 2
						  </label>
						</div>
						<div class="form-check">
						  <label class="form-check-label">
						    <input type="checkbox" name="" class="form-check-input" value="1" >Option 1
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
