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
 
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <h4 class="my-3">
                    <img src="{{asset('front/img/Insights.png')}}" width="40"> 
                    <b>Recent News</b> 
                    <span class="more">More Recents News >></span>
                </h4>
                <hr class="hr-c">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
                        <div class="card new-card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('front/img/1.jpg')}}" alt=""></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                <a href="#" class="title">Climate Change</a>
                                </h6>
                                <p class="card-text">To urge community people, youth, local authorities and other stakeholder to be clearly aware of the relation between climate change and the process of community development...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
                        <div class="card new-card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('front/img/2.jpg')}}" alt=""></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                <a href="{{url('recent-news/detail/')}}" class="title">Community Youth Network (CYN) Annual Reflection</a>
                                </h6>
                                <p class="card-text">June10 - 12, 2015, CYN Annual Reflection workshop had brought together over 50 CYN...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
                        <div class="card new-card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('front/img/3.jpg')}}" alt=""></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                <a href="#" class="title">KYA 9TH GENERAL ASSEMBLY ON 18 DECEMBER, 2014</a>
                                </h6>
                                <p class="card-text">Phase 1៖ Memerendum of Understanding between POE, DOE including four target communes...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
                        <div class="card new-card h-100">
                            <a href="#"><img class="card-img-top" src="{{asset('front/img/4.png')}}" alt=""></a>
                            <div class="card-body">
                                <h6 class="card-title">
                                <a href="#" class="title">ENGERY CONSERVATION</a>
                                </h6>
                                <p class="card-text">School holidays are here! What a joy! Finally, after all those months of hard study you have some free time. While many of you will spend it at home and rest, for others these holidays...</p>
                            </div>
                        </div>
                    </div>
                </div>
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