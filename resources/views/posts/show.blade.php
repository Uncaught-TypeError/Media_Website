@extends('layouts.app')
@push('showstyle')
    <link rel="stylesheet" href="{{ URL::asset('css/show.css'); }}">
@endpush   
@section('content')
    <div class="contentbg">
        <div class="container-fluid" style="">
            <div class="container-md first-container" style="">
                <div class="container mb-3">
                    <p href="" class="post-title text-decoration-none text-dark" style="">{{ $post->title }}</p>
                </div>
                <div class="container mb-2">
                    <div>
                        <a href="{{ route('users.show',$post->user_id) }}" class="post-username text-decoration-none text-black" style="">{{ $post->user->name }}</a>
                    </div>
                    <div>
                        Published in
                        <a href="{{ route('category.show',$post->category_id) }}" class="publishin text-decoration-none text-dark">{{ $post->category->cat_name }}</a>
                    </div>
                </div>
                <div class="container">
                    <p class="post-desc">{{ $post->description }}</p>
                </div>
                <div class="container">
                    <form action="{{ route('comments.store2',$post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="p-2">
                            <span class="post-comment">Comment</span>
                        </div>
                        <div class="p-2" style="width: 100%;">
                            <textarea type="text" name="user_comm" id="" class="cmt-textarea"></textarea>
                        </div>
                        <div class="d-flex justify-content-end p-2">
                            <input type="submit" value="Send" class="btn btn-outline-dark">
                        </div>
                    </form>
                </div>
                <div class="container">
                    <h2 style="font-family: 'Cambria';">Discussions</h2>
                    @foreach($post->comment as $key=>$c)
                        <div class="card p-1 d-flex mb-2" style="border: 1px solid rgb(203, 203, 203)">
                            <h6 class="text-black" style="">{{ ++$key }}.</h6>
                            <div class="d-flex usercmt-box" style="">
                                <h3 class="text-black usercmt" style="">{{ $c->user_comm }}</h3>
                            </div>
                            <p class="text-black cmtby" style="">Commented by <a href="{{ route('users.show',$c->user_id) }}" class="text-decoration-none text-black" style="font-weight: bold">{{ $c->user->name }}</a></p>
                            <div class="datetime-box d-flex justify-content-between" style="">
                                <div>
                                    <a href="" class="createdat text-decoration-none" style="">{{ $c->created_at->format('M d') }}</a>
                                        <span class="datetime-span">.</span>
                                    <a href="" class="datetime text-decoration-none" style="">{{ $c->created_at->diffForHumans() }}</a>
                                </div>
                            </div>
                            <div class="container replysection" style="">
                                <div class="d-flex justify-content-end reply" style="">
                                    <img src="{{url('/icons/icons8-message-50.png')}}" alt="" height="18px" style="cursor: pointer;">
                                </div>
                                <form action="{{ route('comments.store3',$c->id) }}" method="post" enctype="multipart/form-data" class="reply-container">
                                    @csrf
                                    <div class="p-2">
                                        <span class="reply-box">Comment</span>
                                    </div>
                                    <div class="p-2" style="width: 100%;">
                                        <textarea type="text" name="sub_comm" id="" class="reply-textarea"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-end p-2">
                                        <input type="submit" value="Send" class="btn btn-outline-dark">
                                    </div>
                                </form>
                            </div>
                            @foreach($c->subcomment as $key=>$sc)
                                <div class="container mt-2 d-flex user-reply-box" style="">
                                    <div style="width: 80%;">
                                        <div class="d-flex align-items-center gap-1">
                                            <h5 class="user-reply-number text-black" style="">{{ ++$key }}.</h5>
                                            <h5 class="user-reply">
                                                {{ $sc->sub_comm }}
                                            </h5>
                                        </div>
                                        <div class="reply-cmtby-box">
                                            <h6 class="reply-cmtby text-black" style=""> (Commented by <a href="{{ route('users.show',$c->user_id) }}" class="text-decoration-none text-black" style="font-weight: bold">{{ $sc->user->name }}</a>)</h6>
                                        </div>
                                        <div class="reply-datetime-box">
                                            <a href="" class="reply-datetime text-decoration-none" style="">{{ $sc->created_at->format('M d') }}</a>
                                                <span style="color: rgb(225, 225, 225);">.</span>
                                            <a href="" class="reply-createat-box text-decoration-none" style="">{{ $sc->created_at->diffForHumans() }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection