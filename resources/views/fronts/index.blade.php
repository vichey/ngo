@extends('layouts.front')
@section('content')
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
               <span class="text-white">Our mission is to upgrade and promote your participation human rights, democracy, peace building, health, gender equality, education and vocational training for young people in Cambodia. 
               </span>
       </div></div>
          </div>
         </div>
     </div>

</div>

<div class="container">
<div class="row"> 
<div class="col-md-12">

       <h4 class="my-3">
           <img src="{{asset('front/img/Insights.png')}}" width="40"> <b>Recent News</b> <span class="more">More Recents News >></span>
       </h4><hr class="hr-c">
       <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
              <div class="card new-card h-100">
                  <a href="#"><img class="card-img-top" src="img/d.jpg" alt=""></a>
                  <div class="card-body">
                    <h6 class="card-title">
                      <a href="#" class="title">WIND ENERGY</a>
                    </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
              <div class="card new-card h-100">
                  <a href="#"><img class="card-img-top" src="img/c.jpg" alt=""></a>
                  <div class="card-body">
                    <h6 class="card-title">
                      <a href="#" class="title">ELEPHANT SANCTUARY</a>
                    </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
              <div class="card new-card h-100">
                  <a href="#"><img class="card-img-top" src="img/a.jpg" alt=""></a>
                  <div class="card-body">
                    <h6 class="card-title">
                      <a href="#" class="title">CONSERVATION VOLUNTEER</a>
                    </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....</p>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 portfolio-item">
              <div class="card new-card h-100">
                  <a href="#"><img class="card-img-top" src="img/b.jpg" alt=""></a>
                  <div class="card-body">
                    <h6 class="card-title">
                      <a href="#" class="title">ENGERY CONSERVATION</a>
                    </h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua....</p>
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
          <h1 class="text-warning"><b>Register</b> 
          <span class="to">To become a KYA member please</span></h1> <hr class="hr-r" align="left">
          <br>
          <button class="btn btn-warning text-white"> 
             <b>Sing Up!</b>
          </button>
        </div>
    </div>
  </div>
</div>
<br><br>
<div class="container-fluit announcements">
  <div class="container">
      <h1 class="text-white text-center"><b>Announcements</b></h1> <hr class="hr-d">
    <hr>
    <div class="row text-white">
        <div class="col-sm-12 text-center"><hr class="hr-a">
          <p>Angkor Youth Camp 8th​​ 2016 - <span class="text-danger">October 29, 2016 </span></p>
            <hr class="hr-a">
        </div>
         <div class="col-sm-12 text-center">
          <p>KYA Youths Case Studies (Mr. Tin Soklim Team Leader YFY)- <span class="text-danger">October 29, 2016</span></p>
          <hr class="hr-a">
        </div>
     
    </div>   <hr>

@endsection