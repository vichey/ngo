@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> Detail Ebook&nbsp;&nbsp;
                    <a href="{{url('/ebook')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    <div class="form-group row">
                        <label for="title" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">Title</aside>
                            <aside>{{$ebook->title}}</aside>
                        </label>
                        <label for="url" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">Category</aside>
                            <aside>{{$ebook->category}}</aside>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="url" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">File Name</aside>
                            <a href="">
                                {{$ebook->file_name}}
                            </a>
                        </label>
                        <label for="url" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">Creation Date</aside>
                            <aside><small class="text-success">{{$ebook->create_at}}</small></aside>
                        </label>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">Description</aside>
                            <aside>{!!$ebook->description!!}</aside>
                        </label>
                        <label for="description" class="control-label col-lg-6 col-sm-6">
                            <aside class="text-primary">Feature Image</aside>
                            <img src="{{asset('public/uploads/ebooks/'.$ebook->featured_photo)}}" alt="" width="150">
                        </label>
                    </div>       
                </div>
            </div>
        </div>
    </div>
@endsection