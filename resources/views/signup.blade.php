<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fresh Citi- Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <!-- FONT
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <!-- Favicon
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    body {font-family: "Lato", sans-serif;}
    ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: transparent;
    }
    /* Float the list items side by side */
    ul.tab li {float: left;}
    /* Style the links inside the list items */
    ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
    }
    /* Change background color of links on hover */
    ul.tab li a:hover {
    background-color: #ddd;
    }
    /* Create an active/current tablink class */
    ul.tab li a:focus, .active {
    background-color: #ccc;
    }
    /* Style the tab content */
    .tabcontent {
    display: none;
    padding: 6px 12px;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s;
    }
    @-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
    }
    @keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
    }
    </style>
  </head>
  <body  style="background:#FEC606;">
    
    <div class="_valorNav">
      <ul class="_valorNavbar" id="myTopnav">
        <li><a class="brand" href="#home">Freshciti</a></li>
        <div class="_valor-pull-right">
          <li><a href="#home">My Products</a></li>
          <li><a href="#home">List Products</a></li>
          <!--<li class="_valorChip">
            <img src="images/pat.jpg" alt="Person" width="40" height="40">
            John Doe
            <ul class="_valordroppop">
              <li>Profile</li>
              <li>Settings</li>
              <li>Log Out</li>
            </ul>
          </li>-->
        </div>
        <li class="icon">
          <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
        </li>
      </ul>
    </div>
    <script>
    function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
    x.className += " responsive";
    } else {
    x.className = "topnav";
    }
    }
    </script>
    <div style="height:100%;">
      <div class="_valorContainer" style="background:#fff; color:#333;">
        <div class="row">
          <div class="six _valorGrids _valor-pull-left"
            style="background:#333; min-height:520px; padding-top:100px;">
            
            <div class="slideshow-container">
              <div class="mySlides fade">
                <img src="images/carrot-kale-walnuts-tomatoes.jpg" style="width:100%; height:100%;">
                <div class="text">Caption Text</div>
              </div>
              <div class="mySlides fade">
                <img src="images/pexels-photo-196643.jpeg" style="width:100%">
                <div class="text">Caption Two</div>
              </div>
              <div class="mySlides fade">
                <img src="images/food-healthy-vegetables-potatoes-large.jpg" style="width:100%">
                <div class="text">Caption Three</div>
              </div>
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>
            </div>
            <br>
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script>
            var slideIndex = 1;
            showSlides(slideIndex);
            function plusSlides(n) {
            showSlides(slideIndex += n);
            }
            function currentSlide(n) {
            showSlides(slideIndex = n);
            }
            function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            }
            </script>
          </div>
          <div class="six _valorGrids _valor-pull-left"
            style="min-height:520px; color:#333; padding:20px;">
            <ul class="tab">
              <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'London')">Log In</a></li>
              <li><a href="javascript:void(0)" class="tablinks active" onclick="openCity(event, 'Tokyo')">Sign Up</a></li>
            </ul>
            <div id="London" class="tabcontent">
              <p><div class="row">
                
                <div class="twelve _valorGrids _valor-pull-left"
                  style="color:#333;">
                  <div class="_valorAlert _valorAlertRed m-y-b">
                    <span class="_valorNotifyText _valor-pull-left">Please fill the content in the form correctly</span>
                    <span class="_valorCloseBtn _valor-pull-right">X</span>
                  </div>
                  <div class="twelve _valorGrids m-y-b">
                    <label for="email">Your email</label>
                    <input class="_valor-full-width" name="email" placeholder="auser@freshciti.com" id="email" type="email">
                  </div>
                  <div class="twelve _valorGrids m-y-b">
                    <label for="password">Password </label>
                    <input class="_valor-full-width" placeholder="password" name="password" id="password" type="password">
                  </div>
                  
                  <div class="_valor-full-width"><a class="_valorBtn _valorBtn-red" href="#">Create Account</a></div>
                </div>
              </div></p>
            </div>
            <div id="Tokyo" class="tabcontent">
              
              <!--<div class="_valorAlert _valorAlertRed m-y-b">
                <span class="_valorNotifyText _valor-pull-left">Please fill the content in the form correctly</span>
                <span class="_valorCloseBtn _valor-pull-right">X</span>
              </div>-->
              <div class="twelve  _valorGrids">
                <label for="firstName">First Name</label>
                <input class="_valor-full-width" name="firstName" placeholder="Patrick" id="firstName" type="text">
              </div>
              <div class="twelve _valorGrids m-y-b">
                <label for="lastName">Last Name</label>
                <input class="_valor-full-width" name="lastName" placeholder="Peter" id="lastName" type="text">
              </div>
              <div class="twelve _valorGrids m-y-b">
                <label for="email">Your email</label>
                <input class="_valor-full-width" name="email" placeholder="auser@freshciti.com" id="email" type="email">
              </div>
              <div class="twelve _valorGrids m-y-b">
                <label for="password">Password </label>
                <input class="_valor-full-width" placeholder="password" name="password" id="password" type="email">
              </div>
              <div class="twelve _valorGrids m-y-b">
                <label for="gender">Gender</label>
                <select class="_valor-full-width" id="gender" name="gender">
                  <option value="gender">Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div class="_valor-full-width"><a class="_valorBtn _valorBtn-red" href="#">Create Account</a></div></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    </script>
    <div class="_valor-full-width _valorFooter" style="min-height:310px;">
      <div class="three _valorGrids">
        <ul class="_valorFooterLinks">
          <h5>Information</h5>
          <li>New products</li>
          <li>Our stores</li>
          <li>Contact us</li>
          <li>About us</li>
          <li>Sitemap</li></ul>
        </div>
        <div class="three _valorGrids">
          <ul class="_valorFooterLinks">
            <h5>Customer Service</h5>
            <li>Find a Store</li>
            <li>Contact Us</li>
            <li>Postage</li>
            <li>Refunds & Returns</li></ul>
          </div>
          <div class="three _valorGrids">
            <ul class="_valorFooterLinks">
              <h5>My account</h5>
              <li>My orders</li>
              <li>My credit slips</li>
              <li>My addresses</li>
              <li>My personal info</li></ul></div>
              <div class="three _valorGrids">
                <ul class="_valorFooterLinks">
                  <h5>Newsletter</h5>
                  Let's Keep in touch. we'd inform you about amazing offers
                  <div class="twelve _valorGrids m-y-b">
                    <label for="email">Email </label>
                    <input class="_valor-full-width _valorTextmute" placeholder="email" name="email" id="email" type="email">
                  </div>
                  <div class="twelve _valorGrids m-y-b">
                  <button class="_valorBtn _valorBtn-blue">send me</button></div>
                <ul></div>
                <div class="_valorClearfix"></div>
                <div class="twelve _valorGrids" style="border-top:1px solid #555; padding-top:10px;">
                  FreshCiti 2016 Copyright. All Rights Reserved.
                  <a href="#top" class="_valor-pull-right" style="color:#fff;">TOP</a>
                </div>
              </div>
            </body>
          </html>