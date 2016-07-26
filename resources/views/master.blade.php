<!DOCTYPE html>
<html lang="en">
<!--[if IE 9]>
<html class="ie9" lang="en">    <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="en">    <![endif]-->
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name=viewport content="width=device-width, initial-scale=1">

	@yield('metas')

   <!-- CSS -->
   <link href="/assets/vendor/bootstrap/css/bootstrap.min.css"        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/vendor/fontawesome/css/font-awesome.min.css"   property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/vendor/flaticons/flaticon.css"                 property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/vendor/hover/css/hover-min.css"                property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/vendor/wow/animate.css"                        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/vendor/mfp/css/magnific-popup.css"             property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <!-- Remove this for disable demo panel styles -->
   <link href="/assets/vendor/styleselector/styleselector.css"        property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <!-- Custom styles -->
   <link href="/assets/custom/css/style.css"                          property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>
   <link href="/assets/custom/css/blue.css"                          property='stylesheet' rel="stylesheet" type="text/css" media="screen"/>

   <style>#preloader {
         position: fixed;
         left: 0;
         top: 0;
         z-index: 99999;
         width: 100%;
         height: 100%;
         overflow: visible;
         background: #666666 url("assets/custom/images/preloader.gif") no-repeat center center; }
   </style>

	@yield('head')

	<meta name="google-site-verification" content="hM6E1nEM8tFqGCPGlbjuJAjWdxAwFRYgHhM0UjwQG4c" />

</head>
<body class="boxed">
	<!--Pre-Loader-->
	<div id="preloader"></div>

	<header>

	   <section id="top-navigation" class="container-fluid nopadding">
	      <div class="row nopadding ident ui-bg-color01">
	         <!-- Photo -->
	         <a href="{{ route('home') }}">
	            <div class="col-md-5 col-lg-4 vc-photo">&nbsp;</div>
	         </a>
	         <!-- /Photo -->
	         <div class="col-md-7 col-lg-8 vc-name nopadding">
	            <!-- Name-Position -->
	            <div class="row nopadding name">
	               <div class="col-md-10 name-title"><h2 class="font-accident-two-light uppercase">Car Driver</h2></div>
	               <div class="col-md-2 nopadding name-pdf">
	                  <!-- <a href="{{ route('home') }}" class="hvr-sweep-to-right"><i class="flaticon-download149" title="Download our car driver broucher.pdf"></i></a> -->
	               </div>
	            </div>
	            <div class="row nopadding position">
	               <div class="col-md-10 position-title">

	                  <section class="cd-intro">
	                     <h4 class="cd-headline clip is-full-width font-accident-two-normal uppercase">
	                        <span>The experienced </span>
	                        <span class="cd-words-wrapper">
	                           <b class="is-visible">car driver</b>
	                           <b>motorbike mover</b>
	                           <b>vehicle transporter</b>
	                           <b>car mover</b>
	                           <b>motorbike rider</b>
	                        </span>
	                     </h4>
	                  </section>

	               </div>
	               <div class="col-md-2 nopadding pdf">
	                  <a target="_blank" href="https://www.instagram.com/cardriver.io/" class="hvr-sweep-to-right"><i class="flaticon-instagram14" title="Follow us on Instagran"></i></a>
	               </div>
	            </div>
	            <!-- /Name-Position -->

	            <!-- Main Navigation -->

	            <ul id="nav" class="row nopadding cd-side-navigation">
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color01">
	                  <a href="{{ route('home') }}" class="hvr-sweep-to-bottom"><i class="flaticon-insignia"></i><span>home</span></a>
	               </li>
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color02">
	                  <a href="{{ route('about') }}" class="hvr-sweep-to-bottom"><i class="flaticon-graduation61"></i><span>about</span></a>
	               </li>
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color03">
	                  <a href="{{ route('services') }}" class="hvr-sweep-to-bottom"><i class="flaticon-book-bag2"></i><span>services</span></a>
	               </li>
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color04">
	                  <a href="{{ route('contact') }}" class="hvr-sweep-to-bottom"><i class="flaticon-placeholders4"></i><span>contact</span></a>
	               </li>
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color05">
	                  <a href="{{ route('feedback') }}" class="hvr-sweep-to-bottom"><i class="flaticon-earphones18"></i><span>feedback</span></a>
	               </li>
	               <li class="col-xs-4 col-sm-2 nopadding menuitem ui-menu-color06">
	                  <a href="{{ route('blog') }}" class="hvr-sweep-to-bottom"><i class="flaticon-pens15"></i><span>blog</span></a>
	               </li>
	            </ul>

	            <!-- /Main Navigation -->

	         </div>
	      </div>
	   </section>

	</header>

	@yield('content')

	<footer class="padding-50 ui-bg-color02">
	   <div class="container-fluid nopadding">
	      <div class="row wow fadeInDown" data-wow-delay=".2s" data-wow-offset="10">
	         <div class="col-md-3">
	            <h4 class="font-accident-two-normal uppercase">Car Driver</h4>
	            <p class="inline-block">
	               Quality Car Transporting, Professional Vehicle moving. Custom service and discretion paramount.
	            </p>
	            <div class="divider-dynamic"></div>
	         </div>
	         <div class="col-md-3 cv-link">
	            <!-- <h4 class="font-accident-two-normal uppercase">Download our broucher</h4>
	            <div class="dividewhite1"></div>
	            <a href="home.html#!"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>English</a>
	            <a href="home.html#!"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>German</a>
	            <a href="home.html#!"><i class="fa fa-long-arrow-down" aria-hidden="true"></i>Spanish</a> -->
	            <div class="divider-dynamic"></div>
	         </div>
	         <div class="col-md-3">
	            <!-- <h4 class="font-accident-two-normal uppercase">Newsletter</h4>
	            <div class="dividewhite1"></div>
	            <input class="newsletter-email" type="email" required="" name="ne" placeholder="Your Email">
	            <!--<p>Lorem ipsum dolor sit amet...</p>-->
	            <div class="divider-dynamic"></div>
	         </div>
	         <div class="col-md-3">
	            <h4 class="font-accident-two-normal uppercase">Follow us</h4>
	            <div class="follow">
	               <ul class="list-inline social">
	                  <li><a target="_blank" href="https://www.facebook.com/cardriver.io" class="rst-icon-facebook"><i class="fa fa-facebook"></i></a></li>
	                  <li><a target="_blank" href="https://twitter.com/the_car_driver" class="rst-icon-twitter"><i class="fa fa-twitter"></i></a></li>
	                  <li><a target="_blank" href="https://www.instagram.com/cardriver.io/" class="rst-icon-instagram"><i class="fa fa-instagram"></i></a></li>
	               </ul>
	            </div>
	            <div class="divider-dynamic"></div>
	         </div>
	      </div>
	      <div class="dividewhite1"></div>
	      <div class="row wow fadeInDown" data-wow-delay=".4s" data-wow-offset="10">
	         <div class="col-md-12 copyrights">
	            <p>© {{ date('Y') }} Car Driver.</p>
	         </div>
	      </div>
	   </div>
	</footer>

	<div id="image-cache" class="hidden"></div>

	<script
			  src="https://code.jquery.com/jquery-2.2.4.min.js"
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<script src="/assets/vendor/imagesloaded/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
	<script src="/assets/vendor/isotope/js/isotope.pkgd.min.js"           type="text/javascript"></script>
	<script src="/assets/vendor/mfp/js/jquery.magnific-popup.min.js"      type="text/javascript"></script>
	<script src="/assets/vendor/circle-progress/circle-progress.js"       type="text/javascript"></script>
	<script src="/assets/vendor/waypoints/waypoints.min.js"               type="text/javascript"></script>
	<script src="/assets/vendor/anicounter/jquery.counterup.min.js"       type="text/javascript"></script>
	<!--<script src="assets/vendor/wow/wow.min.js"                           type="text/javascript"></script>-->
	<script src="/assets/vendor/pjax/jquery.pjax.js"                      type="text/javascript"></script>
	<!-- Custom scripts -->

	@yield('footer')

	<script src="/assets/custom/js/custom.js"                             type="text/javascript"></script>

</body>
</html>