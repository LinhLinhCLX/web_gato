<?php

namespace App\Http\Controllers\client;
// namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Blog;


class BlogController extends HomeController
{
    public function __construct()

    {

        parent::__construct();

    }
    //
    public function getListBlog()
    {
    	// echo 'getListBlog';
    	$dataView['cate_blog'] = null;
    	$dataView['list_blog'] = DB::table('blog')->where([
    		['active', '=', '1'],
    	])->paginate(6);
    	// dd($dataView);
    	return view('frontend.blog.listblog', $dataView);
    }
    public function getBlogDetail($slug, Request $request)
    {
    	// echo 'getBlog';
        // dd($request->slug);
        if(!$request->session()->has($request->slug))
        {
            DB::table('blog')->where('slug',$request->slug)->increment('count_view',1);
        }
    	$blog = Blog::where([
    		['active', '=', '1'],
    		['slug', '=', $slug],
    	])->first();
    	$dataView['blog'] = $blog;
    	$dataView['blog_admin'] = $blog->admin_table;
    	// dd($dataView);
    	return view('frontend.blog.detailblog', $dataView);
    }
    public function getListCategoryBlog($slug)
    {
    	// dd($slug);
    	$dataView['cate_blog'] = DB::table('cate_blog')->where([
    		['active', '=', '1'],
    		['slug', '=', $slug],
    	])->first();
    	$dataView['list_blog'] = DB::table('blog')->where([
    		['active', '=', '1'],
    		['id_cate_blog', '=', $dataView['cate_blog']->id],
    	])->paginate(6);

    	// $blog = $cate_blog->blog;
    	// $dataView['cate_blog'] = $cate_blog;
    	// $dataView['blog'] = $blog();
    	// dd($dataView);
    	return view('frontend.blog.listblog', $dataView);
    }
}
