@extends('layouts.app')
@push('createstyle')
    <link rel="stylesheet" href="{{ URL::asset('css/create.css'); }}">
@endpush   
@section('content')
    <div class="contentbg">
        <div class="container" style="width: 70%;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="container-fluid" style="">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="container" style="">
                    <div class="d-flex justify-content-end">
                        <div class="m-2 d-flex justify-content-end align-items-center">
                            <select name="category_id" id="category" class="select-box" style="">
                                <option disabled>Choose a Category</option>
                                @foreach ($categories as $c)
                                    <option value="{{ $c->id }}">{{ $c->cat_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success m-2" style="">Publish</button>
                    </div>
                    <div class="m-2">
                        <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="border-0 pcolor title-text" autocomplete="off">
                    </div>
                    <div class="m-2">
                        <input type="text" value="{{ old('description') }}" name="description" placeholder="Tell your story..." class="border-0 pcolor description-text" autocomplete="off">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection