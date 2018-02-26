@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-bold">
                    <i class="fa fa-align-justify"></i> View Page&nbsp;&nbsp;
                    <a href="{{url('/page')}}" class="btn btn-link btn-sm">Back To List</a>
                </div>
                <div class="card-block">
                    <form 
                    >
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="title" class="control-label col-lg-12 col-sm-12">
                            	<aside class="text-primary">Title</aside>
                                <aside>{{$announcement->title}}</aside>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="short_description" class="control-label col-lg-12 col-sm-12">
                                <aside class="text-primary">Short Description</aside>
                                <aside>{{$announcement->short_description}}</aside>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="control-label col-lg-12 col-sm-12">
                            <aside class="text-primary">URL</aside>
                            <aside>{{$announcement->url}}</aside>
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="url" class="control-label col-lg-12 col-sm-12">
                            <aside class="text-primary">Description</aside>
                            <aside>{!!$announcement->description!!}</aside>
                            </label>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection