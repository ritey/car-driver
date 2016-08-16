@extends('master')

@section('metas')
<title>Contact Car Driver | Enquire about a car or motorbike pick up | Enquire about a car or motorbike delivery | Wanting to move a motorbike? | Contact for a quote</title>
<meta name="description" content="Contact for a quote on moving your car or motorbike">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <div id="contacts" class="inner-content">

      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">Contact</h2>
            <h5 class="font-accident-one-bold uppercase subtitle">Professional reliable and meticulous...</h5>
            <p class="small fontcolor-medium">
               Get in touch if you have any queries or would like a quote on collecting or delivering your vehicle. For a quote, be sure to let us know the pickup and drop off locations, the type of vehicle and the timeframe you need to work too and we'll get back to you as soon as possible.
            </p>
            <p>If there is a requirement to move multiple vehicles, get in touch, I do have additional professional drivers available if required.</p>
         </div>
         <div class="dividewhite4"></div>
      </section>

      <section id="contacts-data" class="inner-block">
         <div class="container-fluid nopadding">
            <div class="row">
               <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Address:</span></div>
                     <div class="col-sm-10"><p class="small">224 Almners Road, Lyne, Surrey, UK</p></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Phone:</span></div>
                     <div class="col-sm-10"><p class="small">+44 7841 206 889</p></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Skype:</span></div>
                     <div class="col-sm-10"><p class="small">@thecardriver or dave@cardriver.io</p></div>
                  </div>
               </div>
               <div class="col-md-6 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Email:</span></div>
                     <div class="col-sm-10"><p class="small">hello@cardriver.io</p></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Twitter:</span></div>
                     <div class="col-sm-10"><p class="small"><a target="_blank" href="https://twitter.com/the_car_driver">https://twitter.com/the_car_driver</a></p></div>
                  </div>
                  <div class="row">
                     <div class="col-sm-2"><span class="font-accident-two-bold uppercase">Facbook:</span></div>
                     <div class="col-sm-10"><p class="small"><a target="_blank" href="https://www.facebook.com/cardriver.io">https://www.facebook.com/cardriver.io</a></p></div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Google Map Block -->
      <section id="contacts-map" class="inner-section">
         <div class="container-fluid nopadding">
            <!-- Google Map -->
            <div class="wow fadeInDown" data-wow-delay="0.8s" data-wow-offset="10">
               <div id="gm-panel">
                  <div id="google-map" class="bigmap"></div>
               </div>
            </div>
            <!-- /Google Map -->
         </div>
         <div class="dividewhite8"></div>
      </section>
      <!-- /Google Map Block -->

   </div>

</div>

@endsection

@section('footer')
   <script src="https://maps.google.com/maps/api/js?key=AIzaSyAkovg9xPKMpCHb6Zj3HXDVF-GGnHCFmr8"                    type="text/javascript"></script>
@endsection