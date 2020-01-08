<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }
    public function getListProduct()
    {
        $dataView['list_product'] = DB::table('product')->get();
        // dd($dataView);
    	return view('admin.product.listproduct', $dataView);
    }
    public function getAddProduct()
    {
        $dataView['list_cate_product'] = DB::table('cate_product')->get();
        // dd($dataView);
    	return view('admin.product.addproduct', $dataView);
    }
    public function postAddProduct(Request $request)
    {
        $this->validate($request, [
            'name' =>'requiered:min:3',
            'image' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            'active' => 'required',
            // 'count_view' => 'required',//mặc định bằng 0
            // 'count_sale' => 'required',//mặc định bằng 0
            'short_description' => 'required',
            'full_description' => 'required',
            'id_cate_product' => 'required',
            'size' => 'required',
        ],[
            'name.required' => 'Tên sản phẩm không được bỏ trống',
            'name.min' => 'Tên sản phẩm dưới 3 ký tự',
            'image.required' => 'Không được bỏ trống',
            'price.required' => 'Không được bỏ trống',
            'sale_price.required' => 'Không được bỏ trống',
            'active.required' => 'Không được bỏ trống',
            'count_view.required' => 'Không được bỏ trống',
            'count_sale.required' => 'Không được bỏ trống',
            'short_description.required' => 'Không được bỏ trống',
            'full_description.required' => 'Không được bỏ trống',
            'id_cate_product.required' => 'Không được bỏ trống',
            'size.required' => 'Không được bỏ trống',
        ]);
        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4) . "_image_" . $name;
            while (file_exists('assets/img_product/' . $image)) {
                $image = str_random(4) . "_image_" . $name;
            }
            $file->move('assets/img_product/', $image);
            $file_name = $image;

        } else {
            $file_name = 'logo1.png';
        }

        DB::table('product')->insert([
            'name' => $request->name,
            'slug' => str_slug($request->name),
            'image' => $file_name,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'active'=>1,
            'count_view' => 0,
            'count_sale' => 0,
            'short_description' => $request->short_description,
            'full_description' => $request->full_description,
            'news' => $request->news,
            'active'=>1,
            'id_cate_product' => $request->id_cate_product,
            'size' => $request->size,
            'created_at' => now(),
        ]);

        return redirect()->back()->with('thongbao', 'Add Success');
    }
    public function getEditProduct()
    {
        echo "Đây là phương thức getEditProduct";
    }
    public function postEditProduct()
    {
        echo "Đây là phương thức postEditProduct";
    }
    public function getDeleteProduct()
    {
        echo "Đây là phương thức getDeleteProduct";
    }
}
