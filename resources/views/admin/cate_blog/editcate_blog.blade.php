<!-- <h1>Add catedory Blog</h1> -->
@extends('admin.layouts.master')
@section('title','Sửa Chủ đề Bài viết')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="{{route('blog.list')}}" class="active">Sửa Chủ đề Bài viết</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Sửa Chủ đề Bài viết</div>
        <div class="panel-body">

        	<form role="form" action="{{route('cate_blog.edit.post', ['id_cate_blog' => $cate_blog->id])}}" method="post" enctype="multipart/form-data">
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
	                        <label>Nhập chủ đề bài viết</label>
							<input type="text" name="name" placeholder="Nhập chủ đề bài viết" class="form-control" value="{{$cate_blog->name}}">
	                    </div>
	                    <div class="form-group">
	                        <label>slug</label>
							<input type="text" name="slug" class="form-control" value="{{$cate_blog->slug}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0" {{$cate_blog->active == 0? 'selected' : '' }} >Ẩn </option>
	                            <option value="1" {{$cate_blog->active == 1? 'selected' : '' }} >Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>HIển thị trong mục menu</label>
	                        <select name="id_cate_menu" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $cate_menu as $item)
								<option value="{{$item->id}}" {{$cate_blog->id_cate_menu == $item->id? 'selected' : '' }}>{{$item->name}}</option>
								@endforeach
	                        	{{--@foreach($category as $item)
	                            	<option value="{{$item->id}}" {{$cate_blog->id_cate_menu == $item->id? 'selected' : '' }} >{{$item->name}}</option>
	                            @endforeach
	                            --}}
							</select>
						</div>
						
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
							<label>Ảnh chủ đề bài viết</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="assets/img_cate_blog/{{$cate_blog->image}}">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Mô tả chủ đề bài viết</label>
								<textarea placeholder="Nhập Tóm tắt bài viết" name="description" id="content1">{{$cate_blog->description}}</textarea>
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
