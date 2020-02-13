<?php 
if(isset($_GET['package_name'])){
    $package_name=$_GET['package_name'];
    $sucsses=$_GET['sucsses'];
    $get_email_id=$_GET['email_id'];
 }
 
if($package_name=='Enterprise'){
$Enterprise = "7 Facebook Posts/week <br>
7 Twitter Posts/ week <br>
5 Instagram Posts / week <br>
Instagrowth <br>
£50 Facebook Advertising <br>
Detailed competitor research <br>
Increased Reach <br>
Monthly Progress Report <br>
No Set Up Fee <br>
Cancel Anytime <br>
14 Day Money Back Guarantee <br>
Secure Payment" ;

}

if($package_name=='Silver'){
$Silver = "5 Instagram Posts / week <br>
Instagrowth <br>
Increased Reach <br>
Monthly Progress Report <br>
No Set Up Fee<br>
Cancel Anytime <br>
14 Day Money Back Guarantee <br>
Secure Payment " ;

}


if($package_name=='Gold'){
$Gold = "7 Twitter Posts/ week <br>
5 Instagram Posts / week <br>
Instagrowth <br>
Increased Reach <br>
Detailed competitor Research <br>
Monthly Progress Report <br>
No Set Up Fee <br>
Cancel Anytime <br>
14 Day Money Back Guarantee <br>
Secure Payment" ;

}


?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <script>
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 90 ||
        document.documentElement.scrollTop > 90
      ) {
        document.getElementById("navbar").style.padding = "10px 0";
        document.getElementById("navbar").style.height = "65px";
        document.getElementById("logo").style.width = "110px";
      } else {
        document.getElementById("navbar").style.padding = "20px 0";
        document.getElementById("navbar").style.height = "90px";
        document.getElementById("logo").style.width = "175px";
      }
    }
  </script>
    <link href="https://assets.calendly.com/assets/external/widget.css"
        rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js"
        type="text/javascript"></script>


    <title>Gain Social Media</title>
</head>

<body>
    

    <div class="navbar" id="navbar">
        <img class="logo" src="assets/logo-drk-bg.svg" alt="Gain Social Media"
            id="logo" />

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span
                class="nav-icon"></span></label>
        <ul class="menu">
            <li class="home"><a href="index.html">Home</a></li>
            <li><a href="how.html">How It Works</a></li>
            <li><a href="packages.html">Packages</a></li>
            <li><a href="Instagrowth.html">Instagrowth</a></li>
            <li class="reviews"><a href="reviews.html">Reviews</a></li>
            <li class="login" id="login">
                <form action="login.html" id="login">
                    <input type="submit" value="Login" />
                </form>
            </li>
        </ul>
    </div>


   

    <div class="spacer"></div>
    <div class="packages">
        <div class="packages-header">
            <div class="intro">
                
                
            </div>
            <div class="row">
               
                <div class="col-sm-4 m-auto" id="success-page">
                    <div class="succ">
                        <div class="head">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV2aMFAgi0D1pzS1TLs5jKfH9jyRVGMwmEaW2y14Tk1tWLQsst&s" alt="succe" class="img-fluid sucess-img">
                            <h2>Thankyou!</h2>
                            
                             
                        </div> 
                    </div>
                </div>
                
            </div>
        </div>
       

    </div>




    <!---------------- Footer ----------------->


    <div id="footer" class="footer">
        <div class="footer-content">
            <div class="address">
                <img src="assets/logo-drk-bg.svg" alt="" class="footer-logo" />
                <p>
                    Gain Social Media LTD<br /> 20-22 Wenlock Road,<br />London,
                    England, N1 7GU<br /> Registered in England – 11592151
                </p>
            </div>
            <div class="contact-follow">
                <div class="contact">
                    <h4>Contact Us</h4>
                    <p><a href="mailto:info@gainsocialmedia.co.uk"
                            target="_blank">info@gainsocialmedia.co.uk</a></p>
                </div>
                <div class="follow">
                    <h4 class="follow-us">Follow Us</h4>
                    <ul class="follow-links">
                        <li>
                            <a href="https://www.instagram.com/gain_socialmedia/?hl=en"
                                target="_blank"><img src="assets/insta.svg"
                                    alt="Instagram Link" /></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/gain_socialmedia"
                                target="_blank"><img src="assets/twitter.svg"
                                    alt="Twitter Link" /></a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/GainSocialMedia/"
                                target="_blank"><img src="assets/fb.svg"
                                    alt="Facebook Link" /></a>
                        </li>
                    </ul>
                    <p>@gain_socialmedia</p>
                </div>
            </div>
            <div class="footer-nav">
                <h4>Useful Links</h4>
                <ul class="footer-nav-links">
                    <li><a href="login.html" id="footer-login">Dashboard Login</a></li>
                    <li><a href=""
                            onclick="Calendly.initPopupWidget({url: 'https://calendly.com/gainsocialmedia/15min'});return false;">Schedule
                            A Call</a></li>
                            <li><a href="manage.html" id="manage">Manage Subscription</a></li>
                    <li><a href="legal.html">FAQ's</a></li>
                    <li><a href="legal.html">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="legal">
            <p>
                Design by <a href=""> Stefan Lukes </a> | Copyright © 2020 Gain
                Social Media. All rights reserved. | <a href="privacy.html">
                    Privacy </a> |
                <a href="cookies.html"> Cookies </a>
            </p>
        </div>
</body>