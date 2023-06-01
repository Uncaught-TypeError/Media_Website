@extends('layouts.app')
@push('homestyle')
    <link rel="stylesheet" href="{{ URL::asset('css/home.css'); }}">
@endpush   
@section('content')
<div class="contentbg">
    <div class="container-fluid first-container" style="">
        <div class="d-flex justify-content-center flex-row" >
            <div class="container left-container" style="">
                <div class="card-body">
                    <h1 class="lc-header-one">Stay curious.</h1>
                    <p class="card-text" style="">Discover stories, thinking, and expertise from writers on any topic.</p>
                    <a class="btn btn-dark mt-3 buttondark" href="#posts">Start Reading</a>
                </div>
            </div>
            <div class="container position-relative right-container" style="">
                <h4 class="c1">Python</h4>
                <h5 class="c2">C++</h5>
                <h6 class="c3">Java</h6>
                <h3 class="c4">Vue</h3>
                <h4 class="c5">C#</h4>
                <h5 class="c6">Laravel</h5> 
                <h6 class="c7">Javascript</h6> 
                <h2 class="c8">Ruby</h2>
                <h1 class="c9">Css</h1>
                <h3 class="c10">Php</h3>
            </div>
        </div>
    </div>
</div>

<div class="trend-container">
    <div class="container d-flex gap-2 p-2 trend-title-container" style="">
        <img src="{{url('/icons/icons8-trend-64.png')}}" height="25px" alt="">
        <h4>Trending on Medium</h4>
    </div>
    <div class="container-fluid d-flex align-items-center justify-content-center trend-post-container" style="">
        <div class="row m-0 p-0 d-flex align-items-center justify-content-center gap-2">
            @foreach ($posts as $key=>$p)
            <div class="tpost-container col-lg-4 col-md-6 col-12" style="">
                <div class="card tcard" style="">
                    <div class="card-body d-flex">
                        <div class="pt-1">
                            <p class="tpnumber" style="">{{ ++$key }}</p>
                        </div>
                        <div class="p-3 single-tpost" style="">
                            <h6>
                                <a href="{{ route('users.show',$p->user_id) }}" class="text-decoration-none username" style="">{{ $p->user->name }}</a>
                                    <span class="username-span">in</span> 
                                <a href="{{ route('category.show',$p->category_id) }}" class="categoryname text-decoration-none" style="">{{ $p->category->cat_name }}</a>
                            </h6>
                            <h5 class="card-title">
                                <a href="{{ route('posts.show',$p->id) }}" class="titlename text-decoration-none text-dark" style="">{{ $p->title }}</a>
                            </h5>
                            <p class="card-text">
                                <b>
                                    <a href="" class="create-at text-decoration-none" style="">{{ $p->created_at->format('M d') }}</a>
                                        <span class="create-at-span">.</span>
                                    <a href="" class="daymonth text-decoration-none" style="">{{ $p->created_at->diffForHumans() }}</a>
                                </b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid mt-5 opacity-0" id="posts">
    White Space
</div>
<div class="container-fluid" >
    <div class="container d-flex" style="">
        <div class="p-1 left-container-two" style="">
            @foreach ($viewposts as $key=>$p)
            <div class="mt-5 d-flex">
                <div class="inner-post-left" style="">
                    <div>
                        <a href="{{ route('users.show',$p->user_id) }}" class="post-username text-decoration-none" style="">{{ $p->user->name }}</a>
                    </div>
                    <div>
                        <a href="{{ route('posts.show',$p->id) }}" class="post-title text-decoration-none" style="">{{ $p->title }}</a>
                    </div>
                    <div>
                        <a href="" class="post-detail text-decoration-none" style="">What is this about?</a>
                    </div>
                    <div class="mt-2">
                        <b>
                            <a href="" class="create-at text-decoration-none" style="">{{ $p->created_at->format('M d') }}</a>
                                <span class="create-at-span">.</span>
                            <a href="" class="daymonth text-decoration-none" style="">{{ $p->created_at->diffForHumans() }} .</a>
                        </b>
                        <a href="{{ route('category.show',$p->category_id) }}" class="post-category text-decoration-none p-1" style="">{{ $p->category->cat_name }}</a>
                    </div>
                </div>
                <div class="bg-secondary" style="">
                    <img src="https://picsum.photos/200/300?grayscale" height="150px" width="100%" alt="">
                </div>
            </div>
            @endforeach
        </div>
        <div class="right-container-two position-relative" style="">
            <div class="sticky-top" style="top: 40px">
                <p class="discover">Discover more of what matters to you</p>
                <div class="d-flex justify-content-center">
                    <div class="postcat-box">
                        @foreach($category as $c)
                            <a href="{{ route('category.show',$c->id) }}" class="post-category2 text-decoration-none p-2 d-inline-block m-1" style="">{{ $c->cat_name }}</a>
                        @endforeach     
                    </div>  
                </div>
                <a href="" class="text-decoration-none seemore">See more topics</a>
                <div class="d-flex justify-content-center">
                    <div class="borderline"></div>
                </div>
                <div class="p-4">
                    <div class="inline-block">
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Help</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Status</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Writers</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Blog</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Careers</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Privacy</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Terms</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">About</a>
                        <a href="" class="inline-block text-decoration-none p-2 m-2 extras">Text to speech</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
