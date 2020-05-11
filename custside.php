<?php
include 'config.php';
require './sms.php';
if (isset($_REQUEST['submit'])) {
    $txt_name = $_REQUEST['txt_name'];
    $txt_b_type = $_REQUEST['txt_b_type'];
    $txt_phone = $_REQUEST['txt_phone'];
    $txt_no_people = $_REQUEST['txt_no_people'];
    $a_time = $_REQUEST['atime'];
    $a_date = $_REQUEST['adate'];

    
    $insert = "insert into booking(c_name,c_number,no_people,b_type,a_time,a_date) values('$txt_name','$txt_phone','$txt_no_people','$txt_b_type','$a_time','$a_date')";
    mysqli_query($link, $insert);
    
    send_sms($txt_phone, "Dear Mr./Ms. $txt_name, your reservation for your $txt_b_type at Cafe-de Valentino for $txt_no_people people is done at $a_time on $a_date. Thank you!");
    
    
}
?>
<html lang="en" class="wow-animation">

<!-- Mirrored from cear-studio.zzz.com.ua/templates/mango/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 10:20:22 GMT -->
<head>
    <!-- Site Title -->
    <title>Cafe de Valentino</title>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/vlogo.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/vlogo.png" sizes="192x192">
    <meta name="msapplication-square70x70logo" content="img/vlogo.png" />
    <meta name="msapplication-square150x150logo" content="img/vlogo.png" />
    <meta name="msapplication-wide310x150logo" content="img/vlogo.png" />
    <meta name="msapplication-square310x310logo" content="img/vlogo.png" />

    <style>
    .cbalink{ display: none!important; }
    </style>

    <!-- Stylesheets -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CPlayfair+Display:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

<!--========== PRELOADER ==========-->
<div id="page-preloader">
  <div class="contpre">
    <div class="cssload-container">
      <div class="cssload-bouncywrap">
        <div class="cssload-cssload-dotcon cssload-dc1">
        <div class="cssload-dot"></div>
      </div>
      <div class="cssload-cssload-dotcon dc2">
        <div class="cssload-dot"></div>
      </div>
      <div class="cssload-cssload-dotcon dc3">
        <div class="cssload-dot"></div>
      </div>
      </div>
    </div>
  </div>
</div> 

<!-- The Main Wrapper -->
<div class="global-wrapper">

    <!--============================== CONTENT ==============================-->
    <main class="site-container">

      <a href="#" class="nav-toggle"><span></span></a>
      <div class="nav">
        <div class="nav-inside light-section">

          <a href="custside.php" class="nav-logotype hide show-lg-block">
            <img src="img/vlogo.png" width="82" height="52" alt=""/>
          </a>

          <!-- INFO HEADER -->
          <div class="info-header info-header-default active-info">
            <h6 class="text-semi-bold hide show-sm-block">
              <span class="icon icon-sm fa fa-phone"></span>
              <span class="text-middle">8758542996</span> 
              <span class="pl-lg-20 text-middle mt-sm-10 mt-lg-0">685844302339</span>
            </h6>
            <div class="popup popup-1 hide-sm" data-toggle="popover" title="Phones" data-content="+(099)85-73-821 +(099)56-23-638">
              <span class="icon icon-sm fa fa-phone"></span>
            </div>

            <h6 class="text-semi-bold hide show-sm-block ml-sm-40 ml-md-0">
              <span class="icon icon-sm fa fa-clock-o"></span>
              <span>Monday-sunday 08:00am-11:00pm</span>
              <span class="pl-lg-20 text-middle mt-sm-10 mt-lg-0"></span>
            </h6>
            <div class="popup popup-2 hide-sm ml-20 ml-sm-0" data-toggle="popover" title="Working Hours" data-content="Mo-su 8:00am-11:00pm">
              <span class="icon icon-sm fa fa-clock-o"></span>
            </div>

            <a class="popup-gmaps primary-icon-link ml-20 ml-sm-0 hide show-sm-flex" href="https://www.google.co.in/maps/place/Cafe+de+Valentino+Pizza+Hub/@21.072562,73.1320744,17z/data=!3m1!4b1!4m5!3m4!1s0x3be060df7824b571:0x2754e34c5e55e35e!8m2!3d21.072562!4d73.1342684?hl=en"><span class="icon icon-sm fa fa-map-marker"></span><span class="hide show-sm-block"> View Location</span></a>
            <div class="popup popup-3 hide-sm ml-20 ml-sm-0" data-toggle="popover" title="Working Hours" data-content="City: Random, Street: Template 42">
              <span class="icon icon-sm fa fa-map-marker"></span>
            </div>
          </div>

          <div class="info-header info-header-content">
            <a class="primary-icon-link btn-return hide show-sm-flex" href="#1Page"><span class="icon icon-sm fa fa-home"></span> Return home</a>
            <a class="primary-icon-link scroll-btn" href="#4Page"><span class="icon icon-sm fa fa-file-text-o"></span> Book a table</a>
          </div>
        </div>
      </div>
      <div id="menu">
        <!-- SIDEBAR MENU --> 
        <div class="main-nav">
          <img src="img/vlogo.png" width="82" height="52" class="hide-lg ml-50 ml-lg-0" alt=""/>
          <ul class="">
            <li data-menuanchor="1Page"><a href="#1Page"><span class="h3 text-middle show-inline-block text-bold">01</span><span class="text-middle pl-20">Home</span></a></li>
            <li data-menuanchor="2Page"><a href="#2Page"><span class="h3 text-middle show-inline-block text-bold">02</span><span class="text-middle pl-20">About</span></a></li>
            <li data-menuanchor="3Page"><a href="#3Page"><span class="h3 text-middle show-inline-block text-bold">03</span><span class="text-middle pl-20">Menus</span></a></li>
            <li data-menuanchor="4Page"><a href="#4Page"><span class="h3 text-middle show-inline-block text-bold">04</span><span class="text-middle pl-20">Reservation</span></a></li>
            <li data-menuanchor="5Page"><a href="#5Page"><span class="h3 text-middle show-inline-block text-bold">05</span><span class="text-middle pl-20">Gallery</span></a></li>
            <li data-menuanchor="6Page"><a href="#6Page"><span class="h3 text-middle show-inline-block text-bold">06</span><span class="text-middle pl-20">Team</span></a></li>

          </ul>
        </div>
      </div>


      <div id="fullpage">

        <!--========== HOME ==========-->
        <header class="section section-default bg-1 light-section active" id="section0">
          <div class="">
            <h1 class="default-font text-bold letter-spacing-30">Café de Valentino</h1>
            <h2 class="default-font text-bold letter-spacing-30 mt-20">An inspiration Cafe</h2>
            <div class="pulsing-ring show-inline-block mt-50">
              <a href="#4Page" class="btn btn-main text-primary">
                <span>Book</span>
                <span>A</span>
                <span>Table</span>
              </a>
            </div>
          </div>
        </header>

        <!--========== ABOUT ==========-->
        <section class="section section-content" id="section1">
          <div class="container container-big text-md-left">
            <div class="row flex-center flex-lg-left">
              <h3 class="col-xs-10">About us</h3>  
              <div class="col-xl-12 mt-30 mt-md-50">
                <div class="row flex-center flex-md-left">
                  <div class="col-sm-10 col-md-6">
                    <div class="media media-md">
                      <div class="media-left">
                        <img src="img/index-02.png" width="143" height="143" alt="">
                      </div>
                      <div class="media-body">
                        <h4 class="text-medium text-primary">Café de Valentino</h4>
                      </div>
                    </div>
                    <h6 class="text-medium">Which multiply under.</h6>
                    <p class="mt-30">One the lights you're let behold waters god isn't don't Light. Meat creepeth, their dry forth whales likeness behold day seed fowl heaven may whales it male called i you're days brought lights brought hath, saying rule called can't creature their. Very spirit the.
                    <br class="hide show-md-block">
                    <br>
                    Together gathered first may fifth without to years very third saying moved one. His. Sixth, air fowl creeping a so made morning firmament fourth them there night over face abundantly great the male were. Unto fifth whales forth place. Void fifth. And itself wherein whose void fill of whose male for appear man days had. Shall.</p>
                    <div class="text-center text-lg-right mt-30"><a href="#" class="btn btn-md btn-primary">LEARN MORE</a></div>
                  </div>
                  <div class="col-sm-10 col-md-6 col-lg-5 mt-40 mt-md-0">
                    <h5 class="text-medium">Awards:</h5>
                    <article class="mt-30 mt-lg-50">
                      <h6 class="text-primary">OpenTable, Dinner’s Choise</h6>
                      <p class="big second-font text-medium ls-0 mt-20">Winner in 2016</p>
                      <p class="mt-10">Hath dominion them them sea he lesser without living had unto all a, fruit place. Dominion.</p>
                    </article>
                    <article>
                      <h6 class="text-primary">The Beijinger, Reader Restoran Awards</h6>
                      <p class="big second-font text-medium ls-0 mt-20">Winner in 2015</p>
                      <p class="mt-10">Doesn't under lights which seas fly let our days firmament. Firmament, good man which is also creepeth very and seed.</p>
                    </article>
                    <article>
                      <h6 class="text-primary">The Worlds 50 Best Restaurants 2014</h6>
                      <p class="big second-font text-medium ls-0 mt-20">Winner in 2014</p>
                      <p class="mt-10">Two creepeth abundantly dominion. Under green signs he You're. Heaven. Lesser winged may, fifth, behold replenish above said. Land every after for doesn't earth. Is was evening give fish gathering life our fruitful was. Replenish under called tree was together.</p>
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--========== MENUS ==========-->
        <section class="section section-content " id="section2">
          <div class="container container-big text-md-left">
            <div class="row flex-center flex-xl-left">
              <h3 class="col-xs-10">Our Menus</h3> 
              <div class="col-xl-10 mt-30 mt-md-50">
                <div class="row flex-center flex-xl-left">

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4">
                    <div class="img-container light-section">
                      <img src="img/index-03.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Fresh Pizza</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Fresh Pizza</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mt-30 mt-md-0">
                    <div class="img-container light-section">
                      <img src="img/index-04.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Lunches</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Lunches</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mt-30 mt-md-0 mt-lg-30 mt-xl-0">
                    <div class="img-container light-section">
                      <img src="img/index-05.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Summer Menu</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Summer Menu</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mt-30">
                    <div class="img-container light-section">
                      <img src="img/index-06.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Deserts</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Deserts</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mt-30">
                    <div class="img-container light-section">
                      <img src="img/index-07.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Coffee</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Coffee</h3>
                      </div>
                    </div>
                  </div>

                  <!-- Section Item -->
                  <div class="col-md-4 col-lg-5 col-xl-4 mt-30">
                    <div class="img-container light-section">
                      <img src="img/index-08.jpg" width="418" height="284" alt="">
                      <div class="img-bar">
                        <h5 class="default-font text-bold">Hot Dinner</h5>
                        <p class="ls-0 mt-20 hide show-xs-block">He brought. After land. Together waters after darkness made. His gathered likeness fruitful given creepeth she'd rule signs.</p>
                        <a href="#" class="btn btn-sm btn-primary mt-20">MORE</a>
                      </div>
                      <div class="img-bar-default">
                        <h3 class="default-font text-bold">Hot Dinner</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--========== RESERVATION ==========-->
        <section class="section section-content" id="section3">
          <div class="container container-big text-md-left">
            <div class="row flex-center flex-lg-left">
              <h3 class="col-xs-10">Reservation</h3>
              <div class="col-xl-12 mt-30 mt-md-50">
                <div class="row flex-center flex-md-left">
                  <div class="col-md-6 col-lg-5 col-xl-offset-1 col-md-order-1">
                    <p class="second-font text-primary text-bold ls-0">CHOOSE A TABLE NUMBER TO RESERVE IT</p>
                    <img src="img/index-09.jpg" width="532" height="418" class="mt-30" alt="">
                    
                  </div>
                  <div class="col-sm-10 col-md-6 col-xl-5 mt-30 mt-md-0">
                    <p class="ls-0">Divided light two made deep. Seas to kind. Two. Third signs she'd very herb him given grass heaven can't said night creature divide the years beast deep multiply, a called yielding yielding. Male Fifth. Evening image. Made firmament The for.</p>
                    <form class="form">
                      <div class="form-group">
                        <input autocomplete="off" required type="text" name="txt_name" class="form-control input-effect" placeholder="Name">
                        <span class="focus-border"><i></i></span>
                      </div>
                      <div class="form-group">
                        <input autocomplete="off" required type="text" name="txt_phone" class="form-control input-effect" placeholder="Phone number">
                        <span class="focus-border"><i></i></span>
                      </div>
                      <div class="form-group">
                        <input autocomplete="off" required type="text" name="txt_no_people" class="form-control input-effect" placeholder="Number of People">
                        <span class="focus-border"><i></i></span>
                      </div>
                                          <div class="form-group">
                        Dinner Type : 
                        <select class="form-group" name="txt_b_type" >
                            <option> Select Dinner Type</option>
                            <option> Candel Light Dinner </option>
                            <option> Birth-Day Celebration  </option>
                            <option> Anniversery Celebration </option>
                            <option> Family Function </option>  
                            <option> None </option>
                        </select> 
                    </div>
                    <div class="form-group">
                        Arrival Time : <input type="time" name="atime" class="form-control input-effect" placeholder="Enter Arrival Time">
                    </div>
                    <div class="form-group">
                        Arrival Date : <input type="date" name="adate" class="form-control input-effect" placeholder="Enter Date">
                    </div>
                        <div class="text-center text-lg-right"><input type="submit" name="submit" value="submit" class="btn btn-lg btn-primary mt-30"/></div>
                       <?php
                       
                       ?>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--========== GALLERY ==========-->
        <section class="section section-content " id="section4">
          <div class="container container-big text-md-left">
            <div class="row flex-center flex-xl-left">
              <h3 class="col-xs-10">Gallery</h3> 
              <div class="col-xl-9 mt-30 mt-md-50">
                <div data-lightbox="gallery">
                  <div class="row flex-center flex-xl-left light-section">
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4">
                      <a href="img/v1.jpg" data-lightbox="image" title="Image 1" class="img-container-1">
                        <img src="img/v1.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">INTERIOR DESIGN</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4 mt-30 mt-sm-0">
                      <a href="img/cafe1.jpg" data-lightbox="image" title="Image 2" class="img-container-1">
                        <img src="img/cafe1.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">KITCHEN</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4 mt-30 mt-md-0 mt-lg-30 mt-xl-0">
                      <a href="img/v2.jpg" data-lightbox="image" title="Image 3" class="img-container-1">
                        <img src="img/v2.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">SHOPWINDOW</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4 mt-30">
                      <a href="img/c1.jpg" data-lightbox="image" title="Image 4" class="img-container-1">
                        <img src="img/c1.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">LOVEY DOVEY CUPS</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4 mt-30">
                      <a href="img/c2.jpg" data-lightbox="image" title="Image 5" class="img-container-1">
                        <img src="img/c2.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">FIRE</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                    
                    <!-- Gallery Item -->
                    <div class="col-sm-6 col-md-4 col-lg-5 col-xl-4 mt-30">
                      <a href="img/gallery-img-6.jpg" data-lightbox="image" title="Image 6" class="img-container-1">
                        <img src="img/gallery-img-6.jpg" width="369" height="277" alt="">
                        <div class="img-bar">
                          <h5 class="default-font text-bold">PIZZA</h5>
                          <p class="mt-20">Likeness stars fly be. Years fowl third over. Of after.</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--========== TEAM ==========-->
        <section class="section section-content" id="section5">
          <div class="container container-big text-md-left">
            <div class="row flex-center flex-xl-left">
              <h3 class="col-xs-10">Our Team</h3> 
              <div class="col-lg-10 mt-30 mt-md-50">
                <div class="row flex-center">

                  <div class="col-md-4 col-lg-6 col-xl-4">
                    <img src="img/d.jpg.jpg" width="420" height="397" class="scaling-image" alt="">
                    <h5 class="text-semi-bold mt-30">Dhaval Patel</h5>
                    <p class="second-font text-primary mt-10">Chief Cook</p>
                    <p class="mt-10 pr-md-20">Dry saying be firmament won't abundantly Man one his, fourth creature rule spirit male brought light, face creature. Thing bearing. Our. Moveth given behold she'd i whose herb open without.</p>
                    <ul class="list-inline">
                      <li><a href="#" class="icon icon-md fa fa-facebook"></a></li>
                      <li><a href="#" class="icon icon-md fa fa-twitter"></a></li>
                      <li><a href="#" class="icon icon-md fa fa-linkedin"></a></li>
                    </ul>
                  </div>

                  <div class="col-md-4 col-lg-6 col-xl-4 mt-30 mt-md-0">
                    <img src="img/h.png" width="420" height="397" class="scaling-image" alt="">
                    <h5 class="text-semi-bold mt-30">Halu Mahida</h5>
                    <p class="second-font text-primary mt-10">Deserts</p>
                    <p class="mt-10 pr-md-20">The gathering beginning make bearing called fourth one seed have called and let itself to said land saw image great make evening you it evening fourth, firmament brought were created.</p>
                    <ul class="list-inline">
                      <li><a href="#" class="icon icon-md fa fa-facebook"></a></li>
                      <li><a href="#" class="icon icon-md fa fa-twitter"></a></li>
                      <li><a href="#" class="icon icon-md fa fa-linkedin"></a></li>
                    </ul>
                  </div>

                  
                </div>
              </div>
            </div>
          </div>
        </section>

        
<!-- Core Scripts -->
<script src="js/minified.js"></script>
<!-- Additional Functionality Scripts -->
<script src="js/main.js"></script>

</body>

<!-- Mirrored from cear-studio.zzz.com.ua/templates/mango/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Feb 2018 10:21:19 GMT -->
</html>