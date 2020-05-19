@extends('admin.layouts.master')
@section('title','Sửa Bài viết')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="{{route('blog.list')}}" class="active">Sửa Bài viết</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Sửa Bài viết</div>
        <div class="panel-body">

        	<form role="form" action="{{route('blog.edit.post', ['id_blog'=> $blog->id])}}" method="post" enctype="multipart/form-data">
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
	                        <label>Tiêu đề bài viết</label>
							<input type="text" name="name" placeholder="Nhập Tiêu đề bài viết" class="form-control" value="{{$blog->name}}">
	                    </div>
	                    <div class="form-group">
	                        <label>slug</label>
							<input type="text" name="slug" placeholder="Nhập Tiêu đề bài viết" class="form-control" value="{{$blog->slug}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0" {{$blog->active == 1? 'selected' : '' }} >Ẩn bài viết</option>
	                            <option value="1" {{$blog->active == 1? 'selected' : '' }}>Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>Chủ đề bài viết</label>
	                        <select name="id_cate_blog" class="form-control">
								<option value="0">---Chọn---</option>
								@foreach( $list_cate_blog as $item)
								<option value="{{$item->id}}" {{$blog->id_cate_blog == $item->id? 'selected' : '' }}>{{$item->name}}</option>
								@endforeach
	                        	{{--@foreach($category as $item)
	                            	<option value="{{$item->id}}" >{{$item->name}}</option>
	                            @endforeach
	                            --}}
							</select>
						</div>
						
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
							<label>Ảnh bài viết</label>
							
	                        <input id="img" type="file" name="image" value=""  class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="assets/img_blog/{{$blog->image}}">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Tóm tắt bài viết</label>
								<textarea placeholder="Nhập Tóm tắt bài viết" name="short_description" id="content1" >
									{{$blog->short_description}}
								</textarea>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Nội dung bài viết</label>
								<textarea placeholder="Nhập Nội dung bài viết" name="full_description" id="content2">
									{{$blog->full_description}}
								</textarea>
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
