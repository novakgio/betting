  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>WinnerTips</title>
@include('urls_include.css_urls')

<link rel="stylesheet" type="text/css" href="{{asset('css/grid.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('css/style_table.css')}}" />

</head>

<body>

<!--=================================
  loading -->
  
 <div id="loading">
  <div id="loading-center">
      <img src="{{asset('images/loader.gif')}}" alt="">
 </div>
</div>

<!--=================================
  loading -->
  

<!--=================================
 header -->

@include('layouts_include.header')



<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-lg-6 col-md-6 col-sm-6 text-left">
             <h1 class="text-white">Our Previous Bets </h1>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 text-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>about us </span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->
<div class="white-bg">
<div class="container">
  <h2>These are Previous Bets ! Looks Good Right?</h2>
        @foreach($allbets as $bet)
          <div class="row dark-block">
              <div class="col span-1-of-6">
                  <h6>1</h6>
              </div>

              <div class="col span-3-of-6">
                  <div class="row">
                      <div class="col span-1-of-3">
                          <h5 class="table-h5">{{$bet->team_one}}</h5>
                      </div>
                      <div class="col span-1-of-3">
                          <h4 class="table-h4">VS</h5>
                      </div>
                      <div class="col span-1-of-3">
                          <h5 class="table-h5">{{$bet->team_two}}</h5>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col span-1-of-3 right-aligned">
                          <span class="first-span">{{$bet->start_time}}</span>
                      </div>
                      <div class="col span-1-of-3 center-aligned">
                          <span class="middle-span" style="font-size:16px;">Result : {{$bet->winner_pick}}</span>
                      </div>
                      <div class="col span-1-of-3 left-aligned">
                          <span class="third-span">Sport Name : {{$bet->sport_name}}</span>
                      </div>
                  </div>
              </div>
              <?php 
                $state;
                $button;
                switch($bet->state){
                  case 2:
                    $state="WAITING";
                    $button="my-btn-yellow";
                    break;
                  case 1:
                    $state="WON";
                    $button="my-btn-green";
                    break;
                  case 0:
                    $state="LOST";
                    $button="my-btn-red";
                    break;
                }
               



              ?>
              <div class="col span-2-of-6">
                  <div class="centerd-container">
                      <button class="{{$button}}">{{$state}}</button>
                  </div>
              </div>
          </div>
        @endforeach


        {{$allbets->render()}}
        
       
        </div>
    </div>
</div>
@include('layouts_include.footer')
 
<!--=================================
 footer -->

 <!--=================================
 back to top -->

<div class="car-top">
  <span><img src="images/car.png" alt=""></span>
</div>

 <!--=================================
 back to top -->
 

@include('urls_include.js_urls')
  
</body>
</html>
