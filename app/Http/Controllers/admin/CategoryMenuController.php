<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryMenuController extends Controller
{
    //
    public function index()
    {
    	return view('admin.index');
    }
    public function getListCategoryMenu()
    {
    	// echo'getListCategoryMenu';
        $dataView['list_cate_menu'] = DB::table('cate_menu')->orderBy('number_order', 'asc')->get(); //desc or asc
        // dd($dataView);
        return view('admin.cate_menu.listcate_menu', $dataView);
    }

    public function getAddCategoryMenu()
    {
        // echo'getAddCategoryMenu';
        $dataView['count_cate_menu'] = DB::table('cate_menu')->count();
        // dd($dataView);
        return view('admin.cate_menu.addcate_menu', $dataView);
    }
    public function postAddCategoryMenu(Request $request)
    {
        // echo'postAddCategoryMenu';
        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'number_order' =>'required|numeric',
        ],[
            'name.required' => 'Tên chủ đề menu không được bỏ trống',
            'name.min' => 'Tên chủ đề menu dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để menu',
            'number_order.required' => 'Chọn mục hiển thị trên menu cho chủ để menu',
            'number_order.numeric' => 'Tên chủ đề menu dưới 3 ký tự',
        ]);
        DB::table('cate_menu')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'active' => $request->active,
            'number_order' => $request->number_order,
            'created_at' => now(),
        ]);
        //load AJAX sau khi đổi vị trí hiển thị
        // dd($dataView);
        return redirect()->route('cate_menu.list')->with('thongbao', 'Thêm chủ đề menu thành công!!');
    }
    public function getEditCategoryMenu($id_cate_menu)
    {
        // echo'getEditCategoryMenu';
        $dataView['count_cate_menu'] = DB::table('cate_menu')->count();
        // dd($dataView);
        $dataView['cate_menu'] = DB::table('cate_menu')->where('id', $id_cate_menu)->first();
        // dd($dataView);
        return view('admin.cate_menu.editcate_menu', $dataView);
    }
    public function postEditCategoryMenu(Request $request, $id_cate_menu)
    {
        // echo'postEditCategoryMenu';
        $this->validate($request, [
            'name' =>'required|min:3',
            'active' =>'required',
            'number_order' =>'required|numeric',
        ],[
            'name.required' => 'Tên chủ đề menu không được bỏ trống',
            'name.min' => 'Tên chủ đề menu dưới 3 ký tự',
            'active.required' => 'Chọn trạng thái cho chủ để menu',
            'number_order.required' => 'Chọn mục hiển thị trên menu cho chủ để menu',
            'number_order.numeric' => 'Tên chủ đề menu là kiểu số',
        ]);
        DB::table('cate_menu')->where('id', $id_cate_menu)->update([
            'name' => $request->name,
            'description' => $request->description,
            'active' => $request->active,
            'number_order' => $request->number_order,
            'updated_at' => now(),
        ]);
        // dd($dataView);
        return redirect()->route('cate_menu.list')->with('thongbao', 'Sửa chủ đề menu thành công!!');
    }
    public function getDeleteCategoryMenu($id_cate_menu)
    {
        // echo'getDeleteCategoryMenu';
        $cate_menu = DB::table('cate_menu')->where('id', '=', $id_cate_menu)->delete();
        return redirect()->route('cate_menu.list')->with('thongbao', 'Xóa chủ đề trên menu thành công!!');
    }
}
