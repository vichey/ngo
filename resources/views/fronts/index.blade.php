@extends('layouts.front')
@section('content')
<?php 
    $slides = DB::table('slides')->orderBy('order', 'asc')->where('active', 1)->get();
    $j = 1;
    $i = 1;
?>
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        @foreach($slides as $s)
        @if($i == 1) 
            <li data-target="#demo" data-slide-to="{{$j}}" class="active"></li>
        @else
            <li data-target="#demo" data-slide-to="{{$j}}"></li>
        @endif
        <?php $i++; $j++;?>
        @endforeach
    </ul>
    <div class="carousel-inner">
        <?php $v = 1; ?>
        @foreach($slides as $s)
            @if($v == 1) 
            <div class="carousel-item active">
                <img src="{{asset('front/slides/'.$s->photo)}}" alt="{{$s->name}}" width="100%">
            </div>
            @else
            <div class="carousel-item">
                <img src="{{asset('front/slides/'.$s->photo)}}" alt="{{$s->name}}" width="100%">
            </div>
            @endif
        <?php $v++;?>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
    <div class="container-fluit b-image">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6">  
                    <div class="greennature-action-ads-item-1">
                        <h2 class="text-warning"><b>Our Mission</b></h2>
                        <hr class="hr-m">  
                        <span class="text-white">
                            Our vision is to be potential youth,<br> working with and for youth, for social positive change bad to good and good to better.
                        </span>
                    </div>
                </div>
                <div class="col-md-6 ">  
                    <div class="greennature-action-ads-item">
                        <h2 class="text-success"><b>Our Vision:</b></h2>
                        <hr class="hr-v">  
                        <span class="text-white">
                            Our mission is to upgrade and promote your participation human rights, democracy, peace building, health, gender equality, education and vocational training for young people in Cambodia. 
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $news = DB::Table('posts')->orderBy('id', 'desc')->where('active',1)->get(); ?>
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <h4 class="my-3">
                    <img src="{{asset('front/img/Insights.png')}}" width="40"> 
                    <b>Recent News</b> 
                    <span class="more">More Recents News >></span>
                </h4>
                <hr class="hr-c">
                <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

<!--Controls-->
<div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><</a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next">></a></a>
</div>
<!--/.Controls-->

<!--Slides-->
<div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">
    <div class="row">
        @for($i=0;$i<count($news);$i++)
            <div class="col-md-3">
                <div class="card mb-2">
                    <img class="img-fluid" src="{{asset('front/img/'.$news[$i]->featured_image)}}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title"><a href="#">{{$news[$i]->title}}</a></h4>
                        <p class="card-text">{{$news[$i]->short_description}}</p>
                        <a class="btn btn-primary" href="#">Read More</a>
                    </div>
                </div>
            </div>
            <?php 
                if($i==3)
                {
                    break;
                }
            ?>
        @endfor
        
    </div>
    </div>
    <!--/.First slide-->

    <!--Second slide-->
<div class="carousel-item">
<div class="row">
    @if(count($news)>4)
    @for($i=4;$i<count($news);$i++)
    <div class="col-md-3">
        <div class="card mb-2">
            <img class="img-fluid" src="{{asset('front/img/'.$news[$i]->featured_image)}}" alt="Card image cap">
            <div class="card-body">
            <h4 class="card-title"><a href="{{url('/recent-news/detail/'.$news[$i]->id)}}">{{$news[$i]->title}}</a></h4>
                <p class="card-text">{{$news[$i]->short_description}}</p>
                <a class="btn btn-primary" href="#">Read More</a>
            </div>
        </div>
    </div>
    <?php 
        if($i==7)
        {
            break;
        }
    ?>
@endfor
    @endif
        
       
        </div>
    </div>
    <!--/.Second slide-->



</div>
<!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->
                    
                {{--  <div class="row">
                    @foreach($news as $n)
                    <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
                        <div class="card new-card h-100">
                            <a href="{{url('recent-news/detail/'.$n->id)}}"><img class="card-img-top" src="{{asset('front/img/'.$n->featured_image)}}" alt=""></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                    <a href="{{url('recent-news/detail/'.$n->id)}}" class="title" style="text-decoration: none;">{{$n->title}}</a>
                                </h6>
                                <a href="{{url('recent-news/detail/'.$n->id)}}" style="text-decoration: none;"><p class="card-text">{{$n->short_description}}</p></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>  --}}
            </div>
        </div>
    </div>
    <div class="container-fluit d-image">
        <div class="container">
            <div class="row"> 
                <div class="col-md-12 text-center">  
                    <h1 class="text-white"><b>The only way to make this happened is to take action!</b></h1>
                    <hr class="hr-d">  <br>
                    <button class="btn btn-lg-c btn-warning-c text-white ">
                        <b>Donate Now</b>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluit s-image">
        <div class="container">
            <div class="row"> 
                <div class="col-md-6">  
                    <h1 class="text-white"><b>Subscribe To Newsletter</b></h1> <hr class="hr-d" align="left">
                    <br> 
                    
                    <form>
                    <div class="form-inline ">
                    <input type="text" name="" class="form-control" placeholder="please fill your email"> &nbsp;&nbsp;&nbsp;
                    <button class="btn btn-success text-white "> 
                        <b>SUBSCRIBE!</b>
                    </button>
                    </div>
                    </form>
                    </div>
                    <div class="col-md-6">  
                    <h1 class="text-primary"><b>Member Login</b> 
                    <span class="to">To become a KYA member please</span></h1> <hr class="hr-r" align="left">
                    <form action="" >
                        <input type="email" placeholder="E-mail" class="form-control" name="email" required><br>
                        <input type="password" placeholder="Password" class="form-control" name="password" required><br>
                        <button class="btn btn-primary text-white"> 
                            <b>Sing In!</b>
                        </button>
                        <button class="btn btn-warning text-white float-right"> 
                            <b>Sing Up!</b>
                        </button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container-fluit announcements">
        <div class="container">
        <h1 class="text-white text-center"><b>Up Comming</b></h1> <hr class="hr-d">
        <hr>
        <div class="row text-white">
            <div class="col-sm-12 text-center"><hr class="hr-a">
                <p>Angkor Youth Camp 8th​​ 2016 - <span class="text-warning">October 29, 2016 </span></p>
                <hr class="hr-a">
            </div>
            <div class="col-sm-12 text-center">
                <p>KYA Youths Case Studies (Mr. Tin Soklim Team Leader YFY)- <span class="text-warning">October 29, 2016</span></p>
                <hr class="hr-a">
            </div>
        </div>
        <hr>
    </div>
</div><br><br>
@endsection