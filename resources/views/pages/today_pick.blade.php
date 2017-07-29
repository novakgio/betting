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
 inner-intro -->
 
 

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
