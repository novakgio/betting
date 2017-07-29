



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
 
 <section class="inner-intro login_image bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
         <div class="col-lg-6 col-md-6 col-sm-6 text-left">
             <h1 class="text-white">Reset your password </h1>
           </div>
          <div class="col-lg-6 col-md-6 col-sm-6 text-right">
         <ul class="page-breadcrumb">
           <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
           <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
           <li><span>Reset Password</span> </li>
         </ul>
      </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 login-form  -->

<section class="login-form page-section-ptb login">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
         <div class="section-title">
          
           <h2>Set New Password</h2>
           <div class="separator"></div>
         </div>
          @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
      </div>
    </div>
    <div class="row">
     <div class="col-md-6 col-md-offset-3">
     <div class="gray-form clearfix">
       <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
      {{ csrf_field() }}
       <input type="hidden" name="token" value="{{ $token }}">
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>Email* </label>
                <input class="form-control" type="email" placeholder="email" name="email" value="{{ $email or old('email') }}">
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
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




             
            
              <button type="submit" class="button red"> Reset Password </button>
          </div> 


         <!--  <div class="login-social text-center">
            <h5>Login with Social media</h5>
            <ul>
                <li><a class="fb button" href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                <li><a class="twitter button" href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                <li><a class="pinterest button" href="#"><i class="fa fa-google-plus"></i> google+</a></li>
            </ul>
          </div>      --> 
        </form>     
      </div>
     </div>
   </div>
</section>

<!--=================================
 login-form  -->
 
 
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

