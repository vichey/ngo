@extends('layouts.front')
@section('content')   
<p><br></p>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                @foreach($news as $n)
                <div class="col-md-3">
                    <div class="card card-c mb-2">
                        <a href="{{url('recent-news/detail/'.$n->id)}}"><img class="img-fluid" src="{{asset('uploads/posts/250x250/'.$n->featured_image)}}" width="100%" alt=""></a>
                        <div class="card-body">
                            <a style="text-decoration:none;" href="{{url('recent-news/detail/'.$n->id)}}"><aside class="title">{{$n->title}}</aside></a>
                        <p class="card-text"> <a style="text-decoration:none; color: #666;" href="{{url('recent-news/detail/'.$n->id)}}">{{$n->short_description}}</a></p>
                            <a class="btn btn-info btn-readmore" href="{{url('recent-news/detail/'.$n->id)}}">Read More</a>
                        </div>
                    </div>
                    <p></p>
                </div>
                @endforeach
            </div>
            {{$news->links()}}
      </div>
    </div>
    <p><br></p>
    <p><br></p>
@endsection