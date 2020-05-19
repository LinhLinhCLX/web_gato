<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    
    public function index()
    {
    	return view('admin.index');
    }
    public function getListPermission()
    {
    	$dataView['list_permission'] = DB::table('permission')->get();
    	// dd($dataView);
    	return view('admin.permission.listpermission',$dataView);
    }
    public function getAddPermission()
    {
    	return view('admin.permission.addpermission');
    }
    public function postAddPermission(Request $request)
    {
    	$this->validate($request, [
    		'name' =>'required|min:3',
    	],[
    		'name.required' => 'Tên sản phẩm không được bỏ trống',
            'name.min' => 'Tên sản phẩm dưới 3 ký tự',
    	]);
    	// dd($request->view_product);
    	// dd($request);
    	$view_post = ($request->view_post ==1 ) ? 1 : 0;
    	$add_post = ($request->add_post ==1 ) ? 1 : 0;
    	$edit_post = ($request->edit_post ==1 ) ? 1 : 0;
    	$delete_post = ($request->delete_post ==1 ) ? 1 : 0;
    	$approve_post = ($request->approve_post ==1 ) ? 1 : 0;

    	$view_category_post = ($request->view_category_post ==1 ) ? 1 : 0;
    	$add_category_post = ($request->add_category_post ==1 ) ? 1 : 0;
    	$edit_category_post = ($request->edit_category_post ==1 ) ? 1 : 0;
    	$delete_category_post = ($request->delete_category_post ==1 ) ? 1 : 0;

    	$view_tag_post = ($request->view_tag_post ==1 ) ? 1 : 0;
    	$add_tag_post = ($request->add_tag_post ==1 ) ? 1 : 0;
    	$edit_tag_post = ($request->edit_tag_post ==1 ) ? 1 : 0;
    	$delete_tag_post = ($request->delete_tag_post ==1 ) ? 1 : 0;

    	$view_product = ($request->view_product ==1 ) ? 1 : 0;
    	$add_product = ($request->add_product ==1 ) ? 1 : 0;
    	$edit_product = ($request->edit_product ==1 ) ? 1 : 0;
    	$approve_product = ($request->approve_product ==1 ) ? 1 : 0;
    	$delete_product = ($request->delete_product ==1 ) ? 1 : 0;

    	$view_category_product = ($request->view_category_product ==1 ) ? 1 : 0;
    	$add_category_product = ($request->add_category_product ==1 ) ? 1 : 0;
    	$edit_category_product = ($request->edit_category_product ==1 ) ? 1 : 0;
    	$delete_category_product = ($request->view_post ==1 ) ? 1 : 0;

    	$view_permission = ($request->view_permission ==1 ) ? 1 : 0;
    	$add_permission = ($request->add_permission ==1 ) ? 1 : 0;
    	$edit_permission = ($request->edit_permission ==1 ) ? 1 : 0;
    	$delete_permission = ($request->delete_permission ==1 ) ? 1 : 0;
    	
    	DB::table('permission')->insert([
            'name' => $request->name,
            'view_post' => $view_post,
            'add_post' => $add_post,
            'edit_post' => $edit_post,
            'delete_post' => $delete_post,
			'approve_post' => $approve_post,

            'view_category_post' => $view_category_post,
            'add_category_post' => $add_category_post,
            'edit_category_post' => $edit_category_post,
            'delete_category_post' => $delete_category_post,

            'view_tag_post' => $view_tag_post,
            'add_tag_post' => $add_tag_post,
            'edit_tag_post' => $edit_tag_post,
            'delete_tag_post' => $delete_tag_post,

            'view_product' => $view_product,
            'add_product' => $add_product,
            'edit_product' => $edit_product,
            'approve_product' => $approve_product,
            'delete_product' => $delete_product,

            'view_category_product' => $view_category_product,
            'add_category_product' => $add_category_product,
            'edit_category_product' => $edit_category_product,
            'delete_category_product' => $delete_category_product,

            'view_permission' => $view_permission,
            'add_permission' => $add_permission,
            'edit_permission' => $edit_permission,
            'delete_permission' => $delete_permission,
            'created_at'=>now(),
        ]);
    	return redirect()->route('permission.list')->with('thongbao', 'Add Success');
    }
    public function getEditPermission($id_permission)
    {
    	// echo 'Get add permission';
    	$dataView['permission'] = DB::table('permission')->find($id_permission);
    	// dd($dataView);
    	
    	return view('admin.permission.editpermission', $dataView);
    }
    public function postEditPermission(Request $request, $id_permission)
    {
    	// echo 'Post edit permission';unique:name
    	$this->validate($request, [
    		'name' =>'required|min:3',
    	],[
    		'name.required' => 'Tên  quyền hạn không được bỏ trống',
            'name.min' => 'Tên quyền hạn dưới 3 ký tự',
    	]);
    	// dd($id_permission);
    	// dd($request);
    	$view_post = ($request->view_post ==1 ) ? 1 : 0;
    	$add_post = ($request->add_post ==1 ) ? 1 : 0;
    	$edit_post = ($request->edit_post ==1 ) ? 1 : 0;
    	$delete_post = ($request->delete_post ==1 ) ? 1 : 0;
    	$approve_post = ($request->approve_post ==1 ) ? 1 : 0;

    	$view_category_post = ($request->view_category_post ==1 ) ? 1 : 0;
    	$add_category_post = ($request->add_category_post ==1 ) ? 1 : 0;
    	$edit_category_post = ($request->edit_category_post ==1 ) ? 1 : 0;
    	$delete_category_post = ($request->delete_category_post ==1 ) ? 1 : 0;

    	$view_tag_post = ($request->view_tag_post ==1 ) ? 1 : 0;
    	$add_tag_post = ($request->add_tag_post ==1 ) ? 1 : 0;
    	$edit_tag_post = ($request->edit_tag_post ==1 ) ? 1 : 0;
    	$delete_tag_post = ($request->delete_tag_post ==1 ) ? 1 : 0;

    	$view_product = ($request->view_product ==1 ) ? 1 : 0;
    	$add_product = ($request->add_product ==1 ) ? 1 : 0;
    	$edit_product = ($request->edit_product ==1 ) ? 1 : 0;
    	$approve_product = ($request->approve_product ==1 ) ? 1 : 0;
    	$delete_product = ($request->delete_product ==1 ) ? 1 : 0;

    	$view_category_product = ($request->view_category_product ==1 ) ? 1 : 0;
    	$add_category_product = ($request->add_category_product ==1 ) ? 1 : 0;
    	$edit_category_product = ($request->edit_category_product ==1 ) ? 1 : 0;
    	$delete_category_product = ($request->view_post ==1 ) ? 1 : 0;

    	$view_permission = ($request->view_permission ==1 ) ? 1 : 0;
    	$add_permission = ($request->add_permission ==1 ) ? 1 : 0;
    	$edit_permission = ($request->edit_permission ==1 ) ? 1 : 0;
    	$delete_permission = ($request->delete_permission ==1 ) ? 1 : 0;
    	
    	DB::table('permission')->where('id', '=', $id_permission)->update([
            'name' => $request->name,
            'view_post' => $view_post,
            'add_post' => $add_post,
            'edit_post' => $edit_post,
            'delete_post' => $delete_post,
			'approve_post' => $approve_post,

            'view_category_post' => $view_category_post,
            'add_category_post' => $add_category_post,
            'edit_category_post' => $edit_category_post,
            'delete_category_post' => $delete_category_post,

            'view_tag_post' => $view_tag_post,
            'add_tag_post' => $add_tag_post,
            'edit_tag_post' => $edit_tag_post,
            'delete_tag_post' => $delete_tag_post,

            'view_product' => $view_product,
            'add_product' => $add_product,
            'edit_product' => $edit_product,
            'approve_product' => $approve_product,
            'delete_product' => $delete_product,

            'view_category_product' => $view_category_product,
            'add_category_product' => $add_category_product,
            'edit_category_product' => $edit_category_product,
            'delete_category_product' => $delete_category_product,

            'view_permission' => $view_permission,
            'add_permission' => $add_permission,
            'edit_permission' => $edit_permission,
            'delete_permission' => $delete_permission,
            'updated_at' => now(),
        ]);
    	return redirect()->route('permission.list')->with('thongbao', 'Edit Success');
    }
    public function getDeletePermission($id_permission)
    {
    	// echo "delete permission";
    	// $permission = DB::table('permission')->where('id', $id_permission)->get();
    	// dd($permission);
    	// $permission->delete();
    	$permission = DB::table('permission')->where('id','=', $id_permission)->delete();
        return redirect()->route('permission.list')->with('thongbao','Xóa thành công!');
    }

}
