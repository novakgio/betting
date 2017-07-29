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
  
 
<!--=================================
  loading -->

  
<!--=================================
 header -->
@include('layouts_include.header')

<!--=================================
 header -->


<!--=================================
 inner-intro -->
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-lg-6 col-md-6 col-sm-6 text-left">
             <h1 class="text-white">Conatct us </h1>
           </div>
           <div class="col-lg-6 col-md-6 col-sm-6 text-right">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Contact us</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12">
         <div class="section-title">
           <span>We’d Love to Hear From You</span>
           <h2>LET'S GET IN TOUCH!</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="contact-box text-center">
          <i class="fa fa-map-marker"></i>
          <h5>Address</h5>
          <p>Georgia,Tbilisi</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="contact-box text-center">
          <i class="fa fa-phone"></i>
          <h5>Phone</h5>
          <p>+995 555 18 00 67</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="contact-box text-center">
          <i class="fa fa-envelope-o"></i>
          <h5>Email</h5>
          <p>gioskofield@gmail.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6">
       <div class="contact-box text-center">
          <i class="fa fa-fax"></i>
          <h5>Fax</h5>
          <p>We don't use Fax</p>
        </div>
      </div>
    </div>
    @if(session()->has('sendemail'))
    <div class="alert alert-success">
                        <ul>
                            <li>{{session()->get('sendemail')}}</li>
                        </ul>

                    </div>
      @endif
    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
               @endif
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-8 col-md-8">
       <div class="gray-form row">
         <div id="formmessage">
           


         </div>
           <form class="form-horizontal" role="form"  id="contactform" method="POST" action="{{ url('/sendmessage') }}">
           {{csrf_field()}}
            <div class="contact-form">
              <div class="col-lg-4 col-md-4">
               <div class="form-group">
                 <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div> 
             </div> 
             <div class="col-lg-4 col-md-4">
               <div class="form-group">
                 <input type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-group">
                  <input type="text" placeholder="Phone*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                 <div class="form-group">
                   <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="text"></textarea>
                 </div>
              </div>
              <div class="col-lg-12 col-md-12">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button  name="submit" type="submit" value="Send" class="button red"> Send your message </button>
               </div>
              </div>
          </form>
                
           </div> 
       </div>
      <div class="col-lg-4 col-md-4">
        <div class="opening-hours gray-bg">
          <h6>opening hours</h6>
          <ul class="list-style-none">
            <li>We use +4 GMT TIMEZONE. If It's midnight, questions will be answered after 2-3 hours</li>
          </ul>
        </div>
      </div>
     </div>
 </div>
  
  </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->


 <section class="contact-map">
  <div class="container-fluid">
   <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMV2CYNZyREARFXt_sWKNst4&key=AIzaSyDWWgQm9Noq8xwYmlu0O_aT5nXpCsHte28" allowfullscreen></iframe>

  </div>
 </section>

<!--=================================
 contact-map -->
 

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

@include('urls_include.js_urls')
  
</body>
</html>
