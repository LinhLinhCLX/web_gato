<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function getListAdmin()
    {
    	$dataView['list_admin'] = DB::table('admin_table')->get();
    	return view('admin.admin_user.listadmin',$dataView);
    }
    public function getAddAdmin()
    {
    	$dataView['list_permission'] = DB::table('permission')->get();
    	return view('admin.admin_user.addadmin', $dataView);
    }
    public function postAddAdmin(Request $request)
    {
        // echo 'Post add user_admin';
        $this->validate($request, [
            'name' =>'required|min:3|unique:admin_table',
            'email' =>'required|min:3|unique:admin_table|email',
            'password' =>'required|min:3',
            'phone' =>'required|min:3|numeric',
            'active' =>'required|numeric',
            'level' =>'required|numeric',

        ],[
            'name.required' => 'Tên người dùng không được bỏ trống',
            'name.min' => 'Tên người dùng dưới 3 ký tự',
            'name.unique' => 'Tên người dùng không được trùng lặp',
            'email.required' => 'Email người dùng không được bỏ trống',
            'email.min' => 'Email người dùng dưới 3 ký tự',
            'email.unique' => 'Email người dùng không được trùng lặp',
            'email.email' => 'Email người dùng không phải dạng email',
            'password.required' => 'Mặt khẩu người dùng không được bỏ trống',
            'password.min' => 'Mặt khẩu người dùng dưới 3 ký tự',
            'phone.required' => 'Số điện thoại người dùng không được bỏ trống',
            'phone.min' => 'Số điện thoại người dùng dưới 3 ký tự',
            'phone.numeric' => 'Số điện thoại người dùng không được có kí tự chữ',
            'active.required' => 'Chọn trạng thái hoạt động của người dùng',
            'level.required' => 'Chọn quyền truy cập hệ thống',
        ]);
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_user/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_user/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('admin_table')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
            'phone' => $request->phone,
            'active' => $request->active,
            'level' => $request->level,
            'image' => $file_name,
            'created_at'=> now(),
        ]);

        return redirect()->route('admin_user.list')->with('thongbao', 'Add Success');
    }
    public function getEditAdmin($id_admin)
    {
        $dataView['admin_user'] = DB::table('admin_table')->find($id_admin);
        $dataView['list_permission'] = DB::table('permission')->get();
        // dd($dataView);
    	return view('admin.admin_user.editadmin', $dataView);
    }
    public function postEditAdmin(Request $request, $id_admin)
    {
        $this->validate($request, [
            'name' =>'required|min:3',
            'email' =>'required|min:3|email',
            // unique:admin_table|
            // 'password' =>'required|min:3',
            'phone' =>'required|min:3|numeric',
            'active' =>'required|numeric',
            'level' =>'required|numeric',

        ],[
            'name.required' => 'Tên người dùng không được bỏ trống',
            'name.min' => 'Tên người dùng dưới 3 ký tự',
            // 'name.unique' => 'Tên người dùng không được trùng lặp',
            'email.required' => 'Email người dùng không được bỏ trống',
            'email.min' => 'Email người dùng dưới 3 ký tự',
            // 'email.unique' => 'Email người dùng không được trùng lặp',
            'email.email' => 'Email người dùng không phải dạng email',
            // 'password.required' => 'Mặt khẩu người dùng không được bỏ trống',
            // 'password.min' => 'Mặt khẩu người dùng dưới 3 ký tự',
            'phone.required' => 'Số điện thoại người dùng không được bỏ trống',
            'phone.min' => 'Số điện thoại người dùng dưới 3 ký tự',
            'phone.numeric' => 'Số điện thoại người dùng không được có kí tự chữ',
            'active.required' => 'Chọn trạng thái hoạt động của người dùng',
            'level.required' => 'Chọn quyền truy cập hệ thống',
        ]);
        
        if ($request->hasFile('image')) 
        {
            $file = $request->file('image');
            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_img_" . $name;
            while (file_exists('assets/img_user/' . $image)) {
                $image = str_random(4) . "_img_" . $name;
            }
            $file->move('assets/img_user/', $image);
            $file_name = $image;
            if (file_exists('assets/img_user/' . $image_update[0]) && $image_update[0] != '') {
                unlink('assets/img_user/' . $image_update[0]);
            }
        } else {
            $file_name = DB::table('admin_table')->where('id', '=', $id_admin)->pluck('image')->first();

        }
        DB::table('admin_table')->where('id', '=', $id_admin)->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password'=> bcrypt($request->password),
            'phone' => $request->phone,
            'active' => $request->active,
            'level' => $request->level,
            'image' => $file_name,
            'updated_at'=> now(),
        ]);
        return redirect()->route('admin_user.list')->with('thongbao', 'Edit Success');
    	echo 'Post edit user_admin';
    }
    public function getDeleteAdmin($id_admin)
    {
        // echo 'delete admin user ';
        $admin = DB::table('admin_table')->where('id','=', $id_admin)->delete();
        return redirect()->route('admin_user.list')->with('thongbao','Xóa thành công!');
    }
}
