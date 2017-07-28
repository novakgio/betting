<header id="header" class="topbar-dark">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="topbar-left text-left">
           <ul class="list-inline" style="font-size: 13px;">
             <li> <i class="fa fa-envelope-o"> </i> support@website.com</li> 
             <li> <i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</li>
           </ul>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="topbar-right text-right">
           <ul class="list-inline">
             <li style="font-size: 13px;"> <i class="fa fa-phone"></i> (007) 123 456 7890</li> 
             <li><a href="#"><i class="fa fa-facebook"></i></a></li>   
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>   
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>   
             <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>   
           </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!--=================================
 mega menu -->

<div class="menu">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu" style="box-shadow: 5px 5px 15px black;">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img id="logo_dark_img" src="images/win.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li><a href="{{url('/about-us')}}">About Us</a></li>
            <li><a href="{{url('/how-to-start')}}">How To Start?</a></li>
            <li><a href="{{url('/contact-us')}}">Contact Us</a></li>


            @if(!Auth::user())
             <li><a href="{{url('/login')}}">login</a></li>
            <li><a href="{{url('/register')}}">register</a></li>
            @else
            <li><a href="{{url('/today_pick')}}">Picks</a></li>
            <li><a href="{{url('/allpicks')}}">Previous Picks</a></li>

            <li><a href="{{url('/logout')}}">Logout</a></li>
            @endif


        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>