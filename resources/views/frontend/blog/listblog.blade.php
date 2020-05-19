<!-- <h1>List blog</h1> -->

@extends('frontend.layouts.master')

@section('title')
	Danh sách bài viết
@endsection
@section('content')
<!-- Begin Li's Breadcrumb Area -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"><a href="{{route('client.blog.list')}}">Bài viết</a></li>
                @if($cate_blog != null)
                <li class="active"><a href="{{route('client.blog.list.cate_blog', ['slug'=>$cate_blog->slug])}}">{{$cate_blog->name}}</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- Begin Li's Main Blog Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Main Content Area -->
            <div class="col-lg-12">
                {{--<div class="row li-main-content">
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/2.jpg" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog image post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-gallery-slider slick-dot-style">
                                <div class="li-blog-banner">
                                    <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/1.jpg" alt=""></a>
                                </div>
                                <div class="li-blog-banner">
                                    <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/2.jpg" alt=""></a>
                                </div>
                                <div class="li-blog-banner">
                                    <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog gallery post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner embed-responsive embed-responsive-16by9">
                                <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/300107209&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog audio post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner embed-responsive embed-responsive-16by9">
                                <iframe src="https://www.youtube.com/embed/DR2c266yWEA" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog video post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/5.jpg" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog fifth post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="blog-details-left-sidebar.html"><img class="img-full" src="images/blog-banner/6.jpg" alt=""></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="blog-details-left-sidebar.html">blog second post</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i> 25 nov 2018</a>
                                    </div>
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Cras pretium arcu ex.</p>
                                    <a class="read-more" href="blog-details-left-sidebar.html">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Begin Li's Pagination Area -->
                    <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="li-pagination-box">
                                        <li><a class="Previous" href="#">Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a class="Next" href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Pagination End Here Area -->
                </div>--}}
                <div class="row li-main-content">
                	@foreach($list_blog as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="li-blog-single-item pb-25">
                            <div class="li-blog-banner">
                                <a href="{{route('client.blog.detail', ['slug'=> $item->slug])}}"><img class="img-full" src="assets/img_blog/{{$item->image}}" alt="{{$item->name}}"></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="{{route('client.blog.detail', ['slug'=> $item->slug])}}">{{$item->name}}</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>By Admin</a>
                                        {{--<a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>--}}
                                        <a class="post-time" href="{{route('client.blog.detail', ['slug'=> $item->slug])}}"><i class="fa fa-calendar"></i> {{$item->created_at}}</a>
                                    </div>
                                    <p>{!!$item->short_description!!}</p>
                                    <a class="read-more" href="{{route('client.blog.detail', ['slug'=> $item->slug])}}">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Begin Li's Pagination Area -->
                    <div class="col-lg-12">
                        <div class="li-paginatoin-area text-center pt-25">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div style="content: center;">{{ $list_blog->links() }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Li's Pagination End Here Area -->
                </div>
            </div>
            <!-- Li's Main Content Area End Here -->
        </div>
    </div>
</div>
<!-- Li's Main Blog Page Area End Here -->
@endsection