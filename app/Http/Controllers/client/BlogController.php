<?php

namespace App\Http\Controllers\client;
// namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Blog;


class BlogController extends Controller
{
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
    public function getBlog($slug)
    {
    	// echo 'getBlog';
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
