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

<link rel="stylesheet" href="public/css/grid.css">
<link rel="stylesheet" href="public/css/style_table.css">
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


<div class="section" style="height: 100vh; background: url(public/images/todayspick.jpg); background-position: center; background-repeat: no-repeat; background-size: cover;">

  <div class="container my-container">
    <h1 class="my-h1">TODAYS PICK</h1>
    <div class-"my-cont-child" style="width: 100%;">
        <div class="row dark-block">
            <div class="col span-1-of-6">
                <h6 style="color: white; margin-top: 17px;">1</h6>
            </div>
            <div class="col span-3-of-6">
                <div class="row">
                    <div class="col span-1-of-3">
                        <h5 class="table-h5 right-aligned">FC RED XPRESS</h5>
                    </div>
                    <div class="col span-1-of-3">
                        <h4 class="table-h4">VS</h5>
                    </div>
                    <div class="col span-1-of-3">
                        <h5 class="table-h5 left-aligned">FC RED XPRESS</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3 right-aligned">
                        <span class="first-span">AUGUST 24,2015</span>
                    </div>
                    <div class="col span-1-of-3 center-aligned">
                        <span class="middle-span">18.25 PM</span>
                    </div>
                    <div class="col span-1-of-3 left-aligned">
                        <span class="third-span">Antigua Recreation</span>
                    </div>
                </div>
            </div>
            <div class="col span-2-of-6">
                <div class="centerd-container">
                    <button class="my-btn-red">SOLD OUT</button>
                </div>
            </div>
        </div>
        <div class="row light-block">
            <div class="col span-1-of-6">
                <h6 style="color: white; margin-top: 17px;">1</h6>
            </div>
            <div class="col span-3-of-6">
                <div class="row">
                    <div class="col span-1-of-3">
                        <h5 class="table-h5 right-aligned">FC RED XPRESS</h5>
                    </div>
                    <div class="col span-1-of-3">
                        <h4 class="table-h4">VS</h5>
                    </div>
                    <div class="col span-1-of-3">
                        <h5 class="table-h5 left-aligned">FC RED XPRESS</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col span-1-of-3 right-aligned">
                        <span class="first-span">AUGUST 24,2015</span>
                    </div>
                    <div class="col span-1-of-3 center-aligned">
                        <span class="middle-span">18.25 PM</span>
                    </div>
                    <div class="col span-1-of-3 left-aligned">
                        <span class="third-span">Antigua Recreation</span>
                    </div>
                </div>
            </div>
            <div class="col span-2-of-6">
                <div class="centerd-container">
                    <button class="my-btn-green">SOLD OUT</button>
                </div>
            </div>
        </div>
      </div>
  </div>

</div>

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
