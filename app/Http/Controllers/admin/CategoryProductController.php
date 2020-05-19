<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryProductController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index');
    }
    public function getListCategoryProduct()
    {
    	// echo'getListCategoryProduct';
        $dataView['list_cate_product'] = DB::table('cate_product')->get();
        return view('admin.cate_product.listcate_product', $dataView);
    }
    public function getAddCategoryProduct()
    {
        // echo'getAddCategoryProduct';
        $dataView['cate_menu'] = DB::table('cate_menu')->get();
        return view('admin.cate_product.addcate_product', $dataView);
    }
    public function postAddCategoryProduct(Request $request)
    {
        // echo'postAddCategoryProduct';
        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'id_cate_menu' =>'required',
        ],[
            'name.required' => 'Tên Danh mục sản phẩm không được bỏ trống',
            'name.min' => 'Tên Danh mục sản phẩm dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để bài viết',
            'id_cate_menu.required' => 'Chọn mục hiển thị trên menu cho chủ để bài viết',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_cate_product/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_cate_product/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('cate_product')->insert([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'description' => $request->description,
            'active' => $request->active,
            'image' => $file_name,
            'id_cate_menu' => $request->id_cate_menu,
            'created_at' => now(),
        ]);
        return redirect()->route('cate_product.list')->with('thongbao', 'Thêm Danh mục sản phẩm thành công!!');
    }
    public function getEditCategoryProduct($id_cate_product)
    {
        // echo'getEditCategoryProduct';
        $dataView['cate_product'] = DB::table('cate_product')->find($id_cate_product);
        $dataView['cate_menu'] = DB::table('cate_menu')->get();
        return view('admin.cate_product.editcate_product', $dataView);
    }
    public function postEditCategoryProduct(Request $request, $id_cate_product)
    {
        // echo'postEditCategoryProduct';
        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'id_cate_menu' =>'required',
        ],[
            'name.required' => 'Tên danh mục sản phẩm không được bỏ trống',
            'name.min' => 'Tên danh mục sản phẩm dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để bài viết',
            'id_cate_menu.required' => 'Chọn mục hiển thị trên menu cho chủ để bài viết',
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_cate_product/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_cate_product/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('cate_product')->where('id', $id_cate_product)->update([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'description' => $request->description,
            'active' => $request->active,
            'image' => $file_name,
            'id_cate_menu' => $request->id_cate_menu,
            'updated_at' => now(),
        ]);
        return redirect()->route('cate_product.list')->with('thongbao', 'Sửa danh mục sản phẩm thành công!!');
    }
    public function getDeleteCategoryProduct($id_cate_product)
    {
        // echo'getDeleteCategoryProduct';
        $cate_menu = DB::table('cate_product')->where('id', '=', $id_cate_product)->delete();
        return redirect()->route('cate_product.list')->with('thongbao', 'Xóa danh mục sản phẩm thành công!!');
    }
}
