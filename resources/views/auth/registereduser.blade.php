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
<!-- Favicon -->
@include('urls_include.css_urls')

</head>

<body>


<!--=================================
  loading -->
  
 <div id="loading">
  <div id="loading-center">
      <img src="{{asset('public/images/infinity.gif')}}" alt="">
 </div>
</div>

<!--=================================
  loading -->
  

<!--=================================
 header -->

@include('layouts_include.header')
<!--=================================
 header -->


<!--=================================
 inner-intro -->
 
 <section class="inner-intro register_image bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-lg-6 col-md-6 col-sm-6 text-left">
             <h1 class="text-white">{{session()->get('unconfirmemail')}} </h1>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 text-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Register</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 register-form  -->

<?php

if(Auth::user()){

  $emailconfirm = Auth::user()->confirmed;
}


?>

@if(Auth::user() && session()->get('confirm'))
<section class="register-form page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
         
          
           <h2>{{session()->get('confirmthank')}} </h2>


           <div class="separator"></div>
           <div class="separator"></div>
           <h2>{{session()->get('confirmemail')}} </h2>
         </div>
      </div>
    </div>
    </div>
    </section>


@elseif(Auth::user() && session()->get('unconfirm'))
<section class="register-form page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
         
          
           <h2>{{session()->get('unconfirmthank')}} </h2>


           <div class="separator"></div>
           <div class="separator"></div>
           <h2>{{session()->get('unconfirmemail')}} </h2>
         </div>
      </div>
    </div>
    </div>
    </section>

@elseif(Auth::user() && $emailconfirm==1)

<script type="text/javascript"> window.location = "{{url('/')}}"; //redirect </script>


@else

<style>
  .full-height-sec {
    height: 90vh;
  }

  .little-padding-top {
    padding-top: 60px;
  }
</style>

<section class="register-form page-section-ptb full-height-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
           <h2>You Need To Confirm Your Email Address</h2>
           <div class="separator"></div>
        </div>
      </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <img class="img-responsive index-page-image center-block" src="images/lebron.jpg" alt="">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <img class="img-responsive index-page-image center-block" src="images/roger-federer.jpg" alt="">
        </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <img class="img-responsive index-page-image center-block" src="images/ronaldo.jpg" alt="">
        </div>
        </div>
      </div>
      </div>

      <div class="col-md-offset-1 col-md-10 little-padding-top">
        <div class="section-title">
           <h2>In Order To Be Able To See Our Bets</h2>
         </div>
      </div>
    </div>
  </div>
</section>



@endif
 
 
<!--=================================
 footer -->

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

<!--=================================
 jquery -->

<!-- jquery  -->
@include('urls_include.js_urls')
  
</body>
</html>
