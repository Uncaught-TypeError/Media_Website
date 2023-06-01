@extends('layouts.app')
@push('publishstyle')
    <link rel="stylesheet" href="{{ URL::asset('css/publish.css'); }}">
@endpush   
@section('content')
<div class="contentbg">
    <div class="container-fluid first-container" style="">
        <div class="d-flex justify-content-center flex-row">
            <div class="container inner-first-container" style="">
                <div class="card-body left-card-body" style="">
                    <h1 class="publish-title">Publish, grow, and earn, all in one place.</h1>
                    <p class="card-text publish-text" style="">If you have a story to tell, knowledge to share, or a perspective to offer — welcome home. Sign up for free so your writing can thrive in a network supported by millions of readers — not ads..</p>
                    <a href="{{ route('posts.create') }}" class="btn btn-dark mt-3 post-create-btn" style="">Start Writing</a>
                    <a href="{{ route('category.create') }}" class="btn btn-dark mt-3 post-create-btn" style="">Create Category</a>
                </div>
            </div>
            <div class="container position-relative" style="width:30%;">
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


@endsection