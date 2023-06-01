@extends('layouts.app')
@push('catindexstyle')
    <link rel="stylesheet" href="{{ URL::asset('css/catindex.css'); }}">
@endpush   
@section('content')
<div class="contentbg">
    <div class="container-fluid">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="tag-box d-flex flex-column justify-content-start">
                    <div class="border-tag">
                        <img src="{{url('/icons/icons8-tag-24.png')}}" height="20px" alt="">
                    </div>
                </div>
                <div class="p-2">
                    <p class="categoryname">{{ $category->cat_name }}</p>
                </div>
            </div>
            <div class="container">
                <div class="d-block extranav-border">
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Trending</a>
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Latest</a>
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Best</a>
                </div>
            </div>
            @foreach($category->post as $key=>$c)
                <div class="container d-flex mt-3">
                    <div class="left-box">
                        <div class="borderbline">
                            <div class="d-flex p-1 gap-1 ">
                                <a href="{{ route('users.show',$c->user_id) }}" class="text-decoration-none username">{{ $c->user->name }}</a>
                                <span class="username-span">in</span>
                                <a href="{{ route('category.show',$c->category_id) }}" class="categoryname-small text-decoration-none">{{ $c->category->cat_name }}</a>
                                <span class="create-at-span">.</span>
                                <p>
                                    {{ $c->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="">
                                <a href="{{ route('posts.show',$c->id) }}" class="text-decoration-none text-black titlename">{{ $c->title }}</a>
                            </div>
                            <div class="post-detail-box">
                                <p class="post-detail">{{ $c->description }}</p>
                            </div>
                            <div class="p-1">
                                <a href="{{ route('category.show',$c->category_id) }}" class="post-category text-decoration-none p-1">{{ $c->category->cat_name }}</a>
                                <a href="" class="create-at text-decoration-none" style="">{{ $c->created_at->format('g:i A') }} read</a>
                            </div>
                            <div class="whitespace p-1">
                                White
                            </div>
                        </div>
                    </div>
                    <div class="right-box d-flex justify-content-center align-items-center">
                        <img src="https://picsum.photos/200/300?grayscale" height="150px" width="150px" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection