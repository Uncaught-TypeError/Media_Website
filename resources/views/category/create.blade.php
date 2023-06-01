@extends('layouts.app')
@push('catcreatestyle')
    <link rel="stylesheet" href="{{ URL::asset('css/catcreate.css'); }}">
@endpush   
@section('content')
<div class="contentbg">
    <div class="container-fluid" style="">
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="container first-container" style="">
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-outline-success m-2" style="">Create</button>
                </div>
                <div class="m-2">
                    <input type="text" name="cat_name" value="{{ old('cat_name') }}" placeholder="Category Name" class="cat-name border-0 pcolor" style="">
                </div>
            </div>
        </form>
        <div class="container d-flex justify-content-center cat-section" style="">
            <div class="cat-box" style="">
                <h4>Categories on Medium</h4>
                <div class="p-3 gap-2">
                    @foreach($categories as $c)
                    <a href="{{ route('category.show',$c->id) }}" class="catname m-1 d-inline-block text-decoration-none p-1" style="">{{ $c->cat_name }}</a>
                    @endforeach  
                </div>    
            </div>  
        </div>
    </div>
</div>
@endsection