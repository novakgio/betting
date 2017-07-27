<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template</title>

<!-- Favicon -->
@include('urls_include.css_urls')

</head>

<body>


<!--=================================
  loading -->
  
 <div id="loading">
  <div id="loading-center">
      <img src="images/loader.gif" alt="">
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
             <h1 class="text-white">Register </h1>
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

@if(Auth::user())
<section class="register-form page-section-ptb register">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
         
          
           <h2>Thanks For Registering, {{Auth::user()->username}} With Us</h2>


           <div class="separator"></div>
           <div class="separator"></div>
           <h2>If The Email Address You Put While Registering is correct, We sent you a confirmation code on email</h2>
         </div>
      </div>
    </div>
    </div>
    </section>
@else

<section class="register-form page-section-ptb register">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
           <span>Welcome to </span>
           <h2>THE BEST BETTING TIPS WEBSITE</h2>

           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="gray-form">
           <div class="row">
           <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
            <div class="form-group{{ $errors->has('fullname') ? ' has-error' : '' }}">
                <label>Full Name*</label>
                <input class="form-control" type="text" placeholder="Your Name" name="fullname" value="{{ old('fullname') }}">
                @if ($errors->has('fullname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fullname') }}</strong>
                    </span>
                @endif
            </div> 
           
            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label>Username* </label>
                <input  class="form-control" type="text" placeholder="Choose your user name" name="username" value="{{ old('username') }}">
                @if ($errors->has('username'))
                    <span class="help-block">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label>Password* </label>
                <input class="form-control" type="password" placeholder="Password" name="password" >
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>


           <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label>Confirm Password* </label>
                <input class="form-control" type="password" placeholder="Password" name="password_confirmation">
                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Email* </label>
                <input class="form-control" type="email" placeholder="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label>Phone* </label>
                <input class="form-control" type="text" placeholder="phone" name="phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group{{ $errors->has('robot') ? ' has-error' : '' }}">
                <div class="remember-checkbox">
                    <input type="checkbox" name="agreement" id="one" />
                    <label for="one">Accept our <a href="#"> privacy policy</a> and <a href="#"> customer agreement</a></label>
                     @if ($errors->has('agreement'))
                    <span class="help-block">
                        <strong>{{ $errors->first('agreement') }}</strong>
                    </span>
                @endif
                </div>
            </div>
                   <button type="submit" class="button red"> Register an account </button>
                   <p class="link">Already have an account? please <a href="{{url('/login')}}"> login here </a></p>

            </form>
               </div>
           </div>
       </div>
    </div>
</section>
@endif
<!--=================================
 register-form  -->
 
 
<!--=================================
 footer -->

<footer class="footer bg-3 bg-overlay-black-90">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
      <div class="social">
        <ul>
          <li><a class="facebook" href="#">facebook <i class="fa fa-facebook"></i> </a></li>
          <li><a class="twitter" href="#">twitter <i class="fa fa-twitter"></i> </a></li>
          <li><a class="pinterest" href="#">pinterest <i class="fa fa-pinterest-p"></i> </a></li>
          <li><a class="dribbble" href="#">dribbble <i class="fa fa-dribbble"></i> </a></li>
          <li><a class="google-plus" href="#">google plus <i class="fa fa-google-plus"></i> </a></li>
          <li><a class="behance" href="#">behance <i class="fa fa-behance"></i> </a></li>
        </ul>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="about-content">
          <img class="img-responsive" id="logo-footer" src="images/logo-light.png" alt="">
          <p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
        </div>
        <div class="address">
          <ul>
            <li> <i class="fa fa-map-marker"></i><span>220E Front St. Burlington NC 27215</span> </li>
            <li> <i class="fa fa-phone"></i><span>(007) 123 456 7890</span> </li>
            <li> <i class="fa fa-envelope-o"></i><span>support@website.com</span> </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="usefull-link">
        <h6 class="text-white">Useful Links</h6>
          <ul>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Change Oil and Filter</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Brake Pads Replacement</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Timing Belt Replacement</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Pre-purchase Car Inspection</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Starter Replacement</a></li>
          </ul>
        </div> 
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="recent-post-block">
        <h6 class="text-white">recent posts </h6>
          <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/car/01.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">Time to change your </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
         <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/car/02.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">The best time to </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
         <div class="recent-post">
            <div class="recent-post-image">
              <img class="img-responsive" src="images/car/03.jpg" alt=""> 
            </div>
            <div class="recent-post-info">
                <a href="#">Replacing a timing </a>
                <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
            </div>
         </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="news-letter">
        <h6 class="text-white">subscribe Our Newsletter </h6>
         <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
         <form class="news-letter">
           <input type="email" placeholder="Enter your Email" class="form-control placeholder">
           <a class="button red" href="#">Subscribe</a>
         </form>
        </div> 
      </div>
    </div>
    <hr />
    <div class="copyright">
     <div class="row">
      <div class="col-lg-6 col-md-6">
       <div class="text-left">
        <p>©Copyright 2017 Car Dealer Developed by <a href="http://www.potenzaglobalsolutions.com/" target="_blank">Potenzaglobalsolutions</a></p>
       </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <ul class="list-inline text-right">
          <li><a href="#">privacy policy </a> | </li> 
          <li><a href="#">terms and conditions </a> |</li> 
          <li><a href="#">contact us </a></li>
        </ul>
      </div>
     </div>
    </div>
  </div>
</footer>
 
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
