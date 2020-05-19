<!-- <h1>Add catedory Blog</h1> -->
@extends('admin.layouts.master')
@section('title','Thêm menu')
@section('content')

<div>
	<ul class="breadcrumb">
		<li>
			<p>YOU ARE HERE</p>
		</li>
		<li><a href="{{route('cate_menu.add')}}" class="active">Thêm menu</a> </li>
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
        <div class="panel-heading" style="font-size:16px">Sửa menu</div>
        <div class="panel-body">

        	<form role="form" action="{{route('cate_menu.edit.post', ['id_cate_menu' => $cate_menu->id])}}" method="post" enctype="multipart/form-data">
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
	                        <label>Nhập menu</label>
							<input type="text" name="name" placeholder="Nhập tên menu" class="form-control" value="{{$cate_menu->name}}">
	                    </div>

	                    <div class="form-group">
	                        <label>Trạng thái</label>
	                        <select name="active" class="form-control">
	                            <option value="0" {{$cate_menu->active == 0? 'selected' : ''}}>Ẩn bài viết</option>
	                            <option value="1" {{$cate_menu->active == 1? 'selected' : ''}}>Hoạt động</option>
	                        </select>
						</div>
						<div class="form-group">
	                        <label>Số thứ tự HIển thị trong mục menu</label>
	                        <select name="number_order" class="form-control">
								@for($i = 1; $i<= $count_cate_menu; $i++)
								<option value="{{$i}}" {{$cate_menu->number_order == $i? 'selected' : ''}}>{{$i}}</option>
								@endfor
							</select>
						</div>
						
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Mô tả menu</label>
								<textarea placeholder="Nhập Tóm tắt bài viết" name="description" id="content1">{{$cate_menu->description}}</textarea>
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
