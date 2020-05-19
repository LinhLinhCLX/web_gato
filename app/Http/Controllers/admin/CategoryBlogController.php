<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryBlogController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index');
    }
    public function getListCategoryBlog()
    {
    	return redirect()->route('blog.list');
    }
    public function getAddCategoryBlog()
    {
    	 // echo'getAddCategoryBlog leu leu';
        $dataView['cate_menu'] = DB::table('cate_menu')->get();
        return view('admin.cate_blog.addcate_blog', $dataView);
    }
    public function postAddCategoryBlog(Request $request)
    {
    	 // echo'postAddCategoryBlog blala';

        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'id_cate_menu' =>'required',
        ],[
            'name.required' => 'Tên chủ đề bài viết không được bỏ trống',
            'name.min' => 'Tên chủ đề bài viết dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để bài viết',
            'id_cate_menu.required' => 'Chọn mục hiển thị trên menu cho chủ để bài viết',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_cate_blog/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_cate_blog/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('cate_blog')->insert([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'description' => $request->description,
            'active' => $request->active,
            'image' => $file_name,
            'id_cate_menu' => $request->id_cate_menu,
            'created_at' => now(),
        ]);
        return redirect()->route('blog.list')->with('thongbao', 'Thêm chủ đề bài viết thành công!!');
    }
    public function getEditCategoryBlog($id_cate_blog)
    {
        // echo 'getEditCategoryBlog';
        $dataView['cate_blog'] = DB::table('cate_blog')->find($id_cate_blog);
        $dataView['cate_menu'] = DB::table('cate_menu')->get();
        return view('admin.cate_blog.editcate_blog', $dataView);
    }
    public function postEditCategoryBlog(Request $request, $id_cate_blog)
    {
        // echo 'postEditCategoryBlog';
        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'id_cate_menu' =>'required',
        ],[
            'name.required' => 'Tên chủ đề bài viết không được bỏ trống',
            'name.min' => 'Tên chủ đề bài viết dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để bài viết',
            'id_cate_menu.required' => 'Chọn mục hiển thị trên menu cho chủ để bài viết',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_cate_blog/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_cate_blog/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('cate_blog')->where('id', $id_cate_blog)->update([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'description' => $request->description,
            'active' => $request->active,
            'image' => $file_name,
            'id_cate_menu' => $request->id_cate_menu,
            'updated_at' => now(),
        ]);
        return redirect()->route('blog.list')->with('thongbao', 'Sửa chủ đề bài viết thành công!!');

    }
    public function getDeleteCategoryBlog($id_cate_blog)
    {
        // echo 'getDeleteCategoryBlog';

        $cate_blog = DB::table('cate_blog')->where('id', '=', $id_cate_blog)->delete();
        return redirect()->route('blog.list')->with('thongbao', 'Xóa chủ đề bài viết thành công!!');
    }
}
