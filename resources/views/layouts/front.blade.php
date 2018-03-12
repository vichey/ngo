<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Khmer Youth Association">
        <meta name="keyword" content="KYA, Khmer Youth Association">

        <title>Khmer Youth Assiciation</title>
        <link rel="icon" type="image/gif" href="{{asset('img/favicon.gif')}}" >
        <script type="text/javascript" src="{{asset('front/css/jq.js')}}"></script>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('front/css/b.css')}}" rel="stylesheet">
        <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <script src="{{asset('front/css/owl.carousel.min.js')}}"></script>
        <!-- Custom styles for this template -->
        <link href="{{asset('front/css/4-col-portfolio.css')}}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluit top-background">
        <div class="container">
            <div class="col-md-12">
                <div class="row">   
                    <div class="col-md-12">   
                       <a href="{{url('/')}}"><img src="{{asset('front/img/kya-logo.png')}}" class="logo"></a> 
                       <div class="float-right c-lang">
                            <a href="#" class="text-default" onclick="chLang(event,'km')">
                                <img class="lang" src="{{asset('front/img/kh.png')}}"
                             width="40">ភាសារខ្មែរ</a>
                            <a href="#" class="text-default" onclick="chLang(event,'en')"><img class="lang" src="{{asset('front/img/en.png')}}" width="40"> English</a>
                        </div>
                    </div>
                    <div class="col-md-" style="margin-top: 50px;">
                       
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="col-md-12">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">{{trans('labels.home')}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{trans('labels.about')}}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/page/1')}}">{{trans('labels.history')}}</a>
                                <a class="dropdown-item" href="{{url('/page/2')}}">{{trans('labels.vision')}}</a>
                                <a class="dropdown-item" href="{{url('/page/3')}}">{{trans('labels.chart')}}</a>
                                <a class="dropdown-item" href="{{url('/page/board-member')}}">{{trans('labels.board')}}</a>
                                <a class="dropdown-item" href="{{url('/page/staff')}}">{{trans('labels.staff')}}</a>
                                <a class="dropdown-item" href="{{url('/page/4')}}">{{trans('labels.report')}}</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/page/5')}}">{{trans('labels.where_we_work')}}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{trans('labels.our_program')}}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/page/6')}}">{{trans('labels.youth_participation')}}</a>
                                <a class="dropdown-item" href="{{url('/page/7')}}">{{trans('labels.youth_employment')}}</a>
                                <a class="dropdown-item" href="{{url('/page/8')}}">Improved Social Well-Being and Youth Engagement in Human Rights and Sustainable Development</a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{trans('labels.involve')}}
                            </a>
                            <div class="dropdown-menu">
                                {{--  <a class="dropdown-item" href="{{url('/page/12')}}">{{trans('labels.case_study')}}</a>  --}}
                                <a class="dropdown-item" href="{{url('/page/9')}}">{{trans('labels.volunteer')}}</a>
                                {{--  <a class="dropdown-item" href="#">Announcements</a>  --}}
                                <a class="dropdown-item" href="{{url('/page/13')}}">{{trans('labels.event')}}</a>
                                <a class="dropdown-item" href="{{url('/page/14')}}">{{trans('labels.job')}}</a>
                                
                            </div>
                        </li>
                        {{--  <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Announcements
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </li>  --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                              Resources
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"> Case Study</a>
                                <a class="dropdown-item" href="{{url('/page/15')}}"> {{trans('labels.elibrary')}}</a>
                                {{--  <a class="dropdown-item" href="{{url('/page/16')}}">Photo Library</a>  --}}
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{trans('labels.contact')}}
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/page/17')}}">{{trans('labels.hq')}}</a>
                                <a class="dropdown-item" href="{{url('/page/18')}}">{{trans('labels.province_office')}}</a>
                            </div>
                        </li>
                    </ul>  
                    <ul class="ml-auto">
                        <form class="form-inline">
                            <input type="text" class="form-control mr-sm-1 search-box" placeholder="Search..." >
                            <button type="submit" class="btn btn-primary btn-c"><img src="{{asset('front/img/search-icon.png')}}"></button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    @yield('content')
        <?php
            $donors = DB::table('partners')->where('active',1)->orderBy('sequence')->get();
        ?>
        <div class="our-donor">
            <h4 align="center">
                <img src="{{asset('front/img/partner.png')}}"> <b>Our Donors</b> <hr>
            </h4>
            <div class="col-md-12 border-custom"> 
                <div class="swiper-viewport">
                    <div id="carousel0" class="swiper-container">
                        <div class="swiper-wrapper"> 
                            <div class="swiper-slide text-center">
                                <?php $i=1;?>
                                @foreach($donors as $d)
                                    @if($i++==1)
                                        <img src="{{asset('partners/'.$d->logo)}}" alt="{{$d->name}}" class="img-responsive"/ width="130"></div>
                                    @else
                                        <div class="swiper-slide text-center"><img src="{{asset('partners/'.$d->logo)}}" alt="{{$d->name}}" class="img-responsive" width="130"/></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-pager">
                            <div class="swiper-button-next"></div>  
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div><hr>
            </div>
        </div>
    </div>

<script type="text/javascript">
$('#carousel0').swiper({
mode: 'horizontal',
slidesPerView: 5,
pagination: '.carousel0',
paginationClickable: true,
nextButton: '.swiper-button-next',
prevButton: '.swiper-button-prev',
autoplay: 2500,
loop: true
});
</script>

<div class="container-fluit b">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="foot">
                <h6>CONTACT INFO</h6><br>
                Nº. 32D, St. 562, Sangkat Boeng kak I, Khan Toul Kork, Phnom Penh, CAMBODIA<br>
                Phone/Fax: 855 23 884 306<br>
                Email: admin@kya-cambodia.org
                </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="foot">
                        <h6>FIND US</h6>
                        <p>
                            <a href="https://www.facebook.com/khmeryouthassociationkh" target="_blank">
                                <img src="{{asset('front/img/f.png')}}" height="28"> 
                            </a>
                          
                            <img src="{{asset('front/img/l.png')}}" height="28"> 
                            <a href="https://twitter.com/intent/tweet?text=Khmer%20Youth%20Association&source=sharethiscom&related=sharethis&url=http%3A%2F%2Fkya-cambodia.org%2Fsite%2F%23sthash.ra2zGiVV.uxfs" target="_blank">
                                <img src="{{asset('front/img/t.png')}}" height="28">
                            </a>
                            <img src="{{asset('front/img/e.png')}}" height="28"> 
                            <img src="{{asset('front/img/fl.png')}}" height="28"> 
                        </p>
                        <p>
                            <div class="socail">
                                <a href="https://www.facebook.com/khmeryouthassociationkh" target="_blank">
                                    <img src="{{asset('front/img/ff.png')}}" >
                                </a>
                            </div>
                        </p>
                        <p>
                            <div class="socail">
                                <a href="https://www.youtube.com/channel/UCBIDarOtRqINLw-CIryck9Q" target="_blank">
                                    <img src="{{asset('front/img/y.jpg')}}">
                                </a>
                            </div>   
                        <p>
                    </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="foot">
                    <div class="fb-like-box fb_iframe_widget" 
                    data-href="https://www.facebook.com/khmeryouthassociationkh"
                     data-width="250" data-show-faces="true" data-stream="false"
                      data-header="true" fb-xfbml-state="rendered" 
                      fb-iframe-plugin-query="app_id=&amp;container_width=250&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkhmeryouthassociationkh&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=200"><span style="vertical-align: bottom; width:250px; height: 188px;">
                          <iframe name="f24aff432ffcfc" width="250px" 
                          height="1000px" frameborder="0" allowtransparency="true" 
                          allowfullscreen="true" scrolling="no" 
                          title="fb:like_box Facebook Social Plugin" 
                          src="https://www.facebook.com/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df2a218e77737814%26domain%3Dwww.kya-cambodia.org%26origin%3Dhttp%253A%252F%252Fwww.kya-cambodia.org%252Ff13c442bd725f4%26relation%3Dparent.parent&amp;container_width=250&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkhmeryouthassociationkh&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=250px" style="border: none; visibility: visible; width: 250px; height: 200px;" class="">
                        </iframe>
                    </span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script>
     function chLang(evt, ln)
        {

            evt.preventDefault();
  
            $.ajax({
                type: "GET",
                url: "{{url('/')}}" + "/language/" + ln,
                success: function(sms){
                    if(sms>0)
                    {
                        location.reload();
                    }
                }
            });
        }
</script>
</body>
</html>