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



@include('urls_include.css_urls')

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
             <h1 class="text-white">About us </h1>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 text-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>about us 01</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->

<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>



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
 

@include('urls_include.js_urls')
  
</body>
</html>
