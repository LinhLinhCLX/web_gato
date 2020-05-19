<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class BlogController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index');
    }
    public function getListBlog()
    {
        // echo'getListBlog';
    	$dataView['list_cate_blog'] = DB::table('cate_blog')->get();
        $dataView['list_blog'] = DB::table('blog')->get();
        // dd($dataView);
    	return view('admin.blog.listblog',$dataView);
    }
    public function getAddBlog()
    {
         // echo'getAddBlog';
         $dataView['list_cate_blog'] = DB::table('cate_blog')->get();
         // dd($dataView);
        return view('admin.blog.addblog',$dataView);

    }
    public function postAddBlog(Request $request)
    {
        // echo'postAddBlog blala';
        $this->validate($request, [
            'name' =>'required|min:3|unique:blog',
            'short_description' =>'required|min:3',
            'full_description' =>'required|min:3',
            // 'image' =>'required|min:3',
            'active' =>'required|numeric',
            'id_cate_blog' =>'required|numeric',
        ],[
            'name.required' => 'Tên Bài viết không được bỏ trống',
            'name.min' => 'Tên Bài viết dưới 3 ký tự',
            'name.unique' => 'Tên Bài viết không được trùng lặp',

            'short_description.required' => 'Tóm tắt Bài viết không được bỏ trống',
            'short_description.min' => 'Tóm tắt Bài viết dưới 3 ký tự',
            'full_description.required' => 'Nội dung Bài viết không được bỏ trống',
            'full_description.min' => 'Nội dung Bài viết dưới 3 ký tự',
            // 'image.required' => 'Chọn Ảnh Bài viết',
            // 'image.min' => 'Ảnh Bài viết không hợp lệ',
            'active.required' => 'Chọn trạng thái hoạt động của Bài viết',
            'id_cate_blog.required' => 'Chọn Chủ đề bài viết',
            'id_cate_blog.numeric' => 'Chọn Chủ đề bài viết',
        ]);
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $name = str_slug($file->getClientOriginalName());
            $image = str_random(2) . "_blog_" . $name;
            while (file_exists('assets/img_blog/' . $image)) {
                $image = str_random(2) . "_blog_" . $name;
            }
            $file->move('assets/img_blog/', $image);
            $file_name = $image;

        } else {
            $file_name = 'import_image.png';
        }
        DB::table('blog')->insert([
            'name'=>$request->name,
            'slug'=> str_slug($request->name, '-'),
            'short_description'=>$request->short_description,
            'full_description'=>$request->full_description,
            'active'=>$request->active,
            'image'=>$file_name,
            'id_admin'=>1,
            'id_cate_blog'=>$request->id_cate_blog,
            'created_at'=> now(),
        ]);
        return redirect()->route('blog.list')->with('thongbao', 'Add Success');
    }
    public function getEditBlog($id_blog)
    {
        // echo'getEditBlog';
        $dataView['blog'] = DB::table('blog')->where('id',$id_blog)->first();
        $dataView['list_cate_blog'] = DB::table('cate_blog')->get();
        // dd($dataView);
        return view('admin.blog.editblog', $dataView);
    }
    public function postEditBlog(Request $request, $id_blog)
    {
        // echo'postEditBlog';
        $this->validate($request, [
            'name' =>'required|min:3|unique:blog',
            'short_description' =>'required|min:3',
            'full_description' =>'required|min:3',
            // 'image' =>'required|min:3',
            'active' =>'required|numeric',
            'id_cate_blog' =>'required|numeric',
        ],[
            'name.required' => 'Tên Bài viết không được bỏ trống',
            'name.min' => 'Tên Bài viết dưới 3 ký tự',
            'name.unique' => 'Tên Bài viết không được trùng lặp',

            'short_description.required' => 'Tóm tắt Bài viết không được bỏ trống',
            'short_description.min' => 'Tóm tắt Bài viết dưới 3 ký tự',
            'full_description.required' => 'Nội dung Bài viết không được bỏ trống',
            'full_description.min' => 'Nội dung Bài viết dưới 3 ký tự',
            // 'image.required' => 'Chọn Ảnh Bài viết',
            // 'image.min' => 'Ảnh Bài viết không hợp lệ',
            'active.required' => 'Chọn trạng thái hoạt động của Bài viết',
            'id_cate_blog.required' => 'Chọn Chủ đề bài viết',
            'id_cate_blog.numeric' => 'Chọn Chủ đề bài viết',
        ]);
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(3) . "_img_" . $name;
            while (file_exists('assets/img_blog/' . $image)) {
                $image = str_random(3) . "_img_" . $name;
            }
            $file->move('assets/img_blog/', $image);
            $file_name = $image;
            if (file_exists('assets/img_blog/' . $image_update[0]) && $image_update[0] != '') {
                unlink('assets/img_blog/' . $image_update[0]);
            }
        } else {
            $file_name = DB::table('blog')->where('id', '=', $id_blog)->pluck('image')->first();

        }
        DB::table('blog')->where('id', '=', $id_blog)->update([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'short_description' => $request->short_description,
            'full_description' => $request->full,
            'id_cate_blog' => $request->id_cate_blog,
            'active' => $request->active,
            'image' => $file_name,
            'updated_at'=> now(),
        ]);
        return redirect()->route('blog.list')->with('thongbao', 'Edit Success');
        
    }
    public function getDeleteBlog($id_blog)
    {
        // echo'getDeleteBlog';
        $blog = DB::table('blog')->where('id',$id_blog)->delete();
        return redirect()->route('blog.list')->with('thongbao', 'Xóa bài viết thành công');
    }
}
