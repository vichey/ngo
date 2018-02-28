<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Khmer Youth Association">
        <meta name="keyword" content="KYA, Khmer Youth Association">

        <title>Khmer Young Assiciation</title>
        <link rel="icon" type="image/gif" href="{{asset('img/favicon.gif')}}" >
        <script type="text/javascript" src="{{asset('front/css/jq.js')}}"></script>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('front/css/b.css')}}" rel="stylesheet">
        <script src="{{asset('front/css/owl.carousel.min.js')}}"></script>
        <!-- Custom styles for this template -->
        <link href="{{asset('front/css/4-col-portfolio.css')}}" rel="stylesheet">
    </head>
    <body>
    <div class="container-fluit">
        <div class="container">
            <div class="col-md-12">
                <div class="row">   
                    <div class="col-md-9">   
                        <img src="{{asset('front/img/kya-logo.png')}}" height="130" style="margin-bottom: 5px; margin-top: -5px;">
                    </div>
                    <div class="col-md-3" style="margin-top: 50px;">
                        <div class="float-right">
                        <a href="" class="text-default"><img class="lang" src="{{asset('front/img/kh.png')}}" width="40">ភាសារខ្មែរ</a>
                        <a href="" class="text-default"><img class="lang" src="{{asset('front/img/en.png')}}" width="40"> English</a>
                        </div>
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
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                About Us
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('/page/1')}}">Our History</a>
                                <a class="dropdown-item" href="{{url('/page/2')}}">Vision, Mission, Core Values</a>
                                <a class="dropdown-item" href="{{url('/page/3')}}">Organizational Chart</a>
                                <a class="dropdown-item" href="#">BOD members</a>
                                <a class="dropdown-item" href="#">Staff</a>
                                <a class="dropdown-item" href="{{url('/page/4')}}">Annual & Financial Reports</a>
                                
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Where We Work</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Our Programs
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Youth Participation in Decision-Making Processes</a>
                                <a class="dropdown-item" href="#">Youth Employment Opportunities</a>
                                <a class="dropdown-item" href="#">Improved Social Well-Being and Youth Engagement in Human Rights and Sustainable Development</a>
                            </div>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Get Involved
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Case Study</a>
                                <a class="dropdown-item" href="#">Volunteer With Us</a>
                                {{--  <a class="dropdown-item" href="#">Announcements</a>  --}}
                                <a class="dropdown-item" href="#">Events</a>
                                <a class="dropdown-item" href="#">Job Announcements</a>
                                
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
                                E-Library 
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Document Library</a>
                                <a class="dropdown-item" href="#">Photo Library</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Contact Us 
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Head Office in Phnom Penh</a>
                                <a class="dropdown-item" href="#">Provincial Office</a>
                            </div>
                        </li>
                    </ul>  
                </div>
            </div>
        </div>
    </nav>
    
    @yield('content')

    <h4 align="center">
        <img src="{{asset('front/img/partner.png')}}"> <b>Our Donors</b> <hr>
    </h4>
    <div class="col-md-12 border-custom"> 
        <div class="">
            <div class="swiper-viewport">
            <div id="carousel0" class="swiper-container">
            <div class="swiper-wrapper"> 
                <div class="swiper-slide text-center">
            <img src="{{asset('front/img/logo.png')}}" width="150" alt="NFL"/></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="RedBull" width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Sony"  width="150"/></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Coca Cola" width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Burger King" width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Canon" width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Harley Davidson"  width="150"/></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Dell" width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Disney"  width="150" /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Starbucks" width="150"  /></div>
            <div class="swiper-slide text-center"><img src="{{asset('front/img/logo.png')}}" alt="Nintendo" width="150" /></div>
            </div>
        </div>
        <div class="swiper-pager">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    </div>
</div><hr><br><br><br>
</div>
</div>
<style type="text/css">
.swiper-button-next, .swiper-button-prev {
position: absolute;
top: 69%;
width: 40px;
height: 26px;
margin-top: -22px;
}
</style>

<script type="text/javascript"><!--
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
            <div class="col-md-3 text-center">
                <div class="foot">
                <h6>CONTACT INFO</h6><br>
                Address: 184 Main Collins Street West Victoria 8007 <br>
                +1800-222-3333<br>
                +1833-232-3443<br>
                contact@greennaturewp.com
                </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="foot">
                        <h6>FIND US</h6>
                        <p>
                            <img src="{{asset('front/img/f.png')}}" height="28"> 
                            <img src="{{asset('front/img/l.png')}}" height="28"> 
                            <img src="{{asset('front/img/t.png')}}" height="28">
                            <img src="{{asset('front/img/e.png')}}" height="28"> 
                        </p>
                        <p><img src="{{asset('front/img/ff.png')}}" ></p>
                        <p><img src="{{asset('front/img/y.jpg')}}"><p>
                    </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="foot">
                    <div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/khmeryouthassociationkh" data-width="200" data-show-faces="true" data-stream="false" data-header="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;container_width=200&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkhmeryouthassociationkh&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=200"><span style="vertical-align: bottom; width: 200px; height: 188px;"><iframe name="f24aff432ffcfc" width="200px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="https://www.facebook.com/plugins/like_box.php?app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FlY4eZXm_YWu.js%3Fversion%3D42%23cb%3Df2a218e77737814%26domain%3Dwww.kya-cambodia.org%26origin%3Dhttp%253A%252F%252Fwww.kya-cambodia.org%252Ff13c442bd725f4%26relation%3Dparent.parent&amp;container_width=200&amp;header=true&amp;href=https%3A%2F%2Fwww.facebook.com%2Fkhmeryouthassociationkh&amp;locale=en_US&amp;sdk=joey&amp;show_faces=true&amp;stream=false&amp;width=200px" style="border: none; visibility: visible; width: 200px; height: 188px;" class=""></iframe></span></div>
                </div>
            </div>
            <div class="col-md-3 text-center"><div class="foot">
                <a href="https://www.worldflagcounter.com/details/dTc">
                <img src="https://www.worldflagcounter.com/dTc/" alt="Flag Counter" height="188" width="200"></a></a></div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('front/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>