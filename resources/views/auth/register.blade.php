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
 
 <section class="inner-intro bg-1 bg-overlay-black-70">
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

<section class="register-form page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-offset-1 col-md-10">
         <div class="section-title">
           <span>Welcome to </span>
           <h2>the Cardealer online</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
        <div class="gray-form">
           <div class="row">
           <div class="form-group col-md-6">
             <label>Your Name*</label>
                <input class="form-control" type="text" placeholder="Your Name" name="name">
            </div> 
            <div class="form-group col-md-6">
             <label>Last Name*</label>
              <input class="form-control" type="text" placeholder="Last Name" name="email">
             </div>
            </div>
           <div class="form-group">
             <label>User name* </label>
               <input  class="form-control" type="text" placeholder="Choose your user name" name="web">
            </div>
            <div class="form-group">
             <label>Password* </label>
               <input class="form-control" type="text" placeholder="Password" name="Password">
            </div>
            <div class="form-group">
             <label>Re-enter Password*</label>
               <input class="form-control" type="password" placeholder="Password" name="Password">
            </div>
            <div class="form-group">
             <label>Email *</label>
               <input  class="form-control" type="text" placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
             <label>Mobile phone *</label>
               <input id="phone" class="form-control" type="text" placeholder="Enter your mobile no" name="phone">
            </div>
            <label>Your birthday *</label>
            <div class="row">
             <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                   <select>
                      <option value="Day">Day</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>  
                        <option value="17">17</option>  
                        <option value="18">18</option>  
                        <option value="19">19</option>  
                        <option value="20">20</option>  
                        <option value="21">21</option>  
                        <option value="22">22</option>  
                        <option value="23">23</option>  
                        <option value="24">24</option>  
                        <option value="25">25</option>  
                        <option value="26">26</option>  
                        <option value="27">27</option>  
                        <option value="28">28</option>  
                        <option value="29">29</option>  
                        <option value="30">30</option>  
                        <option value="31">31</option>  
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                    <select>
                        <option value="Month">Month</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                     </select>
                  </div>
                </div>
                <div class="form-group col-md-4">
                 <div class="selected-box auto-hight">
                    <select>
                        <option value="Year">Year</option>
                        <option value="1990">1990</option>
                        <option value="1991">1991</option>
                        <option value="1992">1992</option>
                        <option value="1993">1993</option>
                        <option value="1994">1994</option>
                        <option value="1995">1995</option>
                        <option value="1996">1996</option>
                        <option value="1997">1997</option>
                        <option value="1998">1998</option>
                        <option value="1999">1999</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                        <option value="2004">2004</option>
                        <option value="2005">2005</option>
                        <option value="2006">2006</option>
                        <option value="2007">2007</option>
                        <option value="2008">2008</option>
                        <option value="2009">2009</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                    </select>
                  </div>
                 </div>
                </div>
                <div class="form-group">
                 <label for="phone">Select Country *</label>
                  <div class="selected-box auto-hight">
                    <select size="5">
                        <option value="Country">Select Country...</option>
                        <option value="AF">Afghanistan</option>
                        <option value="AL">Albania</option>
                        <option value="DZ">Algeria</option>
                        <option value="AS">American Samoa</option>
                        <option value="AD">Andorra</option>
                        <option value="AG">Angola</option>
                        <option value="AI">Anguilla</option>
                        <option value="AG">Antigua &amp; Barbuda</option>
                        <option value="AR">Argentina</option>
                        <option value="AA">Armenia</option>
                        <option value="AW">Aruba</option>
                        <option value="AU">Australia</option>
                        <option value="AT">Austria</option>
                        <option value="AZ">Azerbaijan</option>
                        <option value="BS">Bahamas</option>
                        <option value="BH">Bahrain</option>
                        <option value="BD">Bangladesh</option>
                        <option value="BB">Barbados</option>
                        <option value="BY">Belarus</option>
                        <option value="BE">Belgium</option>
                        <option value="BZ">Belize</option>
                        <option value="BJ">Benin</option>
                        <option value="BM">Bermuda</option>
                        <option value="BT">Bhutan</option>
                        <option value="BO">Bolivia</option>
                        <option value="BL">Bonaire</option>
                        <option value="BA">Bosnia &amp; Herzegovina</option>
                        <option value="BW">Botswana</option>
                        <option value="BR">Brazil</option>
                        <option value="BC">British Indian Ocean Ter</option>
                        <option value="BN">Brunei</option>
                        <option value="BG">Bulgaria</option>
                        <option value="BF">Burkina Faso</option>
                        <option value="BI">Burundi</option>
                        <option value="KH">Cambodia</option>
                        <option value="CM">Cameroon</option>
                        <option value="CA">Canada</option>
                        <option value="IC">Canary Islands</option>
                        <option value="CV">Cape Verde</option>
                        <option value="KY">Cayman Islands</option>
                        <option value="CF">Central African Republic</option>
                        <option value="TD">Chad</option>
                        <option value="CD">Channel Islands</option>
                        <option value="CL">Chile</option>
                        <option value="CN">China</option>
                        <option value="CI">Christmas Island</option>
                        <option value="CS">Cocos Island</option>
                        <option value="CO">Colombia</option>
                        <option value="CC">Comoros</option>
                        <option value="CG">Congo</option>
                        <option value="CK">Cook Islands</option>
                        <option value="CR">Costa Rica</option>
                        <option value="CT">Cote D'Ivoire</option>
                        <option value="HR">Croatia</option>
                        <option value="CU">Cuba</option>
                        <option value="CB">Curacao</option>
                        <option value="CY">Cyprus</option>
                        <option value="CZ">Czech Republic</option>
                        <option value="DK">Denmark</option>
                        <option value="DJ">Djibouti</option>
                        <option value="DM">Dominica</option>
                        <option value="DO">Dominican Republic</option>
                        <option value="TM">East Timor</option>
                        <option value="EC">Ecuador</option>
                        <option value="EG">Egypt</option>
                        <option value="SV">El Salvador</option>
                        <option value="GQ">Equatorial Guinea</option>
                        <option value="ER">Eritrea</option>
                        <option value="EE">Estonia</option>
                        <option value="ET">Ethiopia</option>
                        <option value="FA">Falkland Islands</option>
                        <option value="FO">Faroe Islands</option>
                        <option value="FJ">Fiji</option>
                        <option value="FI">Finland</option>
                        <option value="FR">France</option>
                        <option value="GF">French Guiana</option>
                        <option value="PF">French Polynesia</option>
                        <option value="FS">French Southern Ter</option>
                        <option value="GA">Gabon</option>
                        <option value="GM">Gambia</option>
                        <option value="GE">Georgia</option>
                        <option value="DE">Germany</option>
                        <option value="GH">Ghana</option>
                        <option value="GI">Gibraltar</option>
                        <option value="GB">Great Britain</option>
                        <option value="GR">Greece</option>
                        <option value="GL">Greenland</option>
                        <option value="GD">Grenada</option>
                        <option value="GP">Guadeloupe</option>
                        <option value="GU">Guam</option>
                        <option value="GT">Guatemala</option>
                        <option value="GN">Guinea</option>
                        <option value="GY">Guyana</option>
                        <option value="HT">Haiti</option>
                        <option value="HW">Hawaii</option>
                        <option value="HN">Honduras</option>
                        <option value="HK">Hong Kong</option>
                        <option value="HU">Hungary</option>
                        <option value="IS">Iceland</option>
                        <option value="IN">India</option>
                        <option value="ID">Indonesia</option>
                        <option value="IA">Iran</option>
                        <option value="IQ">Iraq</option>
                        <option value="IR">Ireland</option>
                        <option value="IM">Isle of Man</option>
                        <option value="IL">Israel</option>
                        <option value="IT">Italy</option>
                        <option value="JM">Jamaica</option>
                        <option value="JP">Japan</option>
                        <option value="JO">Jordan</option>
                        <option value="KZ">Kazakhstan</option>
                        <option value="KE">Kenya</option>
                        <option value="KI">Kiribati</option>
                        <option value="NK">Korea North</option>
                        <option value="KS">Korea South</option>
                        <option value="KW">Kuwait</option>
                        <option value="KG">Kyrgyzstan</option>
                        <option value="LA">Laos</option>
                        <option value="LV">Latvia</option>
                        <option value="LB">Lebanon</option>
                        <option value="LS">Lesotho</option>
                        <option value="LR">Liberia</option>
                        <option value="LY">Libya</option>
                        <option value="LI">Liechtenstein</option>
                        <option value="LT">Lithuania</option>
                        <option value="LU">Luxembourg</option>
                        <option value="MO">Macau</option>
                        <option value="MK">Macedonia</option>
                        <option value="MG">Madagascar</option>
                        <option value="MY">Malaysia</option>
                        <option value="MW">Malawi</option>
                        <option value="MV">Maldives</option>
                        <option value="ML">Mali</option>
                        <option value="MT">Malta</option>
                        <option value="MH">Marshall Islands</option>
                        <option value="MQ">Martinique</option>
                        <option value="MR">Mauritania</option>
                        <option value="MU">Mauritius</option>
                        <option value="ME">Mayotte</option>
                        <option value="MX">Mexico</option>
                        <option value="MI">Midway Islands</option>
                        <option value="MD">Moldova</option>
                        <option value="MC">Monaco</option>
                        <option value="MN">Mongolia</option>
                        <option value="MS">Montserrat</option>
                        <option value="MA">Morocco</option>
                        <option value="MZ">Mozambique</option>
                        <option value="MM">Myanmar</option>
                        <option value="NA">Nambia</option>
                        <option value="NU">Nauru</option>
                        <option value="NP">Nepal</option>
                        <option value="AN">Netherland Antilles</option>
                        <option value="NL">Netherlands (Holland, Europe)</option>
                        <option value="NV">Nevis</option>
                        <option value="NC">New Caledonia</option>
                        <option value="NZ">New Zealand</option>
                        <option value="NI">Nicaragua</option>
                        <option value="NE">Niger</option>
                        <option value="NG">Nigeria</option>
                        <option value="NW">Niue</option>
                        <option value="NF">Norfolk Island</option>
                        <option value="NO">Norway</option>
                        <option value="OM">Oman</option>
                        <option value="PK">Pakistan</option>
                        <option value="PW">Palau Island</option>
                        <option value="PS">Palestine</option>
                        <option value="PA">Panama</option>
                        <option value="PG">Papua New Guinea</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="PH">Philippines</option>
                        <option value="PO">Pitcairn Island</option>
                        <option value="PL">Poland</option>
                        <option value="PT">Portugal</option>
                        <option value="PR">Puerto Rico</option>
                        <option value="QA">Qatar</option>
                        <option value="ME">Republic of Montenegro</option>
                        <option value="RS">Republic of Serbia</option>
                        <option value="RE">Reunion</option>
                        <option value="RO">Romania</option>
                        <option value="RU">Russia</option>
                        <option value="RW">Rwanda</option>
                        <option value="NT">St Barthelemy</option>
                        <option value="EU">St Eustatius</option>
                        <option value="HE">St Helena</option>
                        <option value="KN">St Kitts-Nevis</option>
                        <option value="LC">St Lucia</option>
                        <option value="MB">St Maarten</option>
                        <option value="PM">St Pierre &amp; Miquelon</option>
                        <option value="VC">St Vincent &amp; Grenadines</option>
                        <option value="SP">Saipan</option>
                        <option value="SO">Samoa</option>
                        <option value="AS">Samoa American</option>
                        <option value="SM">San Marino</option>
                        <option value="ST">Sao Tome &amp; Principe</option>
                        <option value="SA">Saudi Arabia</option>
                        <option value="SN">Senegal</option>
                        <option value="RS">Serbia</option>
                        <option value="SC">Seychelles</option>
                        <option value="SL">Sierra Leone</option>
                        <option value="SG">Singapore</option>
                        <option value="SK">Slovakia</option>
                        <option value="SI">Slovenia</option>
                        <option value="SB">Solomon Islands</option>
                        <option value="OI">Somalia</option>
                        <option value="ZA">South Africa</option>
                        <option value="ES">Spain</option>
                        <option value="LK">Sri Lanka</option>
                        <option value="SD">Sudan</option>
                        <option value="SR">Suriname</option>
                        <option value="SZ">Swaziland</option>
                        <option value="SE">Sweden</option>
                        <option value="CH">Switzerland</option>
                        <option value="SY">Syria</option>
                        <option value="TA">Tahiti</option>
                        <option value="TW">Taiwan</option>
                        <option value="TJ">Tajikistan</option>
                        <option value="TZ">Tanzania</option>
                        <option value="TH">Thailand</option>
                        <option value="TG">Togo</option>
                        <option value="TK">Tokelau</option>
                        <option value="TO">Tonga</option>
                        <option value="TT">Trinidad &amp; Tobago</option>
                        <option value="TN">Tunisia</option>
                        <option value="TR">Turkey</option>
                        <option value="TU">Turkmenistan</option>
                        <option value="TC">Turks &amp; Caicos Is</option>
                        <option value="TV">Tuvalu</option>
                        <option value="UG">Uganda</option>
                        <option value="UA">Ukraine</option>
                        <option value="AE">United Arab Emirates</option>
                        <option value="GB">United Kingdom</option>
                        <option value="US">United States of America</option>
                        <option value="UY">Uruguay</option>
                        <option value="UZ">Uzbekistan</option>
                        <option value="VU">Vanuatu</option>
                        <option value="VS">Vatican City State</option>
                        <option value="VE">Venezuela</option>
                        <option value="VN">Vietnam</option>
                        <option value="VB">Virgin Islands (Brit)</option>
                        <option value="VA">Virgin Islands (USA)</option>
                        <option value="WK">Wake Island</option>
                        <option value="WF">Wallis &amp; Futana Is</option>
                        <option value="YE">Yemen</option>
                        <option value="ZR">Zaire</option>
                        <option value="ZM">Zambia</option>
                        <option value="ZW">Zimbabwe</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                 <label>Gender *</label>
                   <div class="selected-box">
                    <select>
                        <option value="">I am</option>
                        <option value="male">male</option>
                        <option value="female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                   </div> 
                </div>
                 <div class="form-group">
                  <div class="remember-checkbox">
                     <input type="checkbox" name="one" id="one" />
                      <label for="one">Accept our <a href="#"> privacy policy</a> and <a href="#"> customer agreement</a></label>
                     </div>
                     </div>
                   <a href="#" class="button red"> Register an account </a>
                   <p class="link">Already have an account? please <a href="#"> login here </a></p>
               </div>
           </div>
       </div>
    </div>
</section>

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
