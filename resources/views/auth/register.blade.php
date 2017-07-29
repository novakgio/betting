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
                    <label for="one">I accept winnertips' rules and aggrements <a href="{{url('/policy')}}">Read Terms</a></label>
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
