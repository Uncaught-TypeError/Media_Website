@extends('layouts.app')
@push('userindexstyle')
    <link rel="stylesheet" href="{{ URL::asset('css/userindex.css'); }}">
@endpush   
@section('content')
<div class="contentbg">
    <div class="container-fluid">
        <div class="container">
            <div class="d-flex align-items-center">
                <div class="p-2">
                    <p class="categoryname">{{ $user->name }}</p>
                </div>
            </div>
            <div class="container">
                <div class="d-block extranav-border">
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Trending</a>
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Latest</a>
                    <a href="" class="d-inline-block text-black text-decoration-none navextra">Best</a>
                </div>
            </div>
            @foreach($user->posts as $key=>$u)
                <div class="container d-flex mt-3">
                    <div class="left-box">
                        <div class="borderbline">
                            <div class="d-flex p-1 gap-1 ">
                                <a href="{{ route('category.show',$u->category_id) }}" class="categoryname-small text-decoration-none">{{ $u->category->cat_name }}</a>
                                <span class="create-at-span">.</span>
                                <p>
                                    {{ $u->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="">
                                <a href="{{ route('posts.show',$u->id) }}" class="text-decoration-none text-black titlename">{{ $u->title }}</a>
                            </div>
                            <div class="post-detail-box">
                                <p class="post-detail">{{ $u->description }}</p>
                            </div>
                            <div class="p-1">
                                <a href="{{ route('category.show',$u->category_id) }}" class="post-category text-decoration-none p-1">{{ $u->category->cat_name }}</a>
                                <a href="" class="create-at text-decoration-none" style="">{{ $u->created_at->format('g:i A') }} read</a>
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