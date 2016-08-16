@extends('master')

@section('metas')
<title>About Car Driver | Trade Plate Driver | Vehicle transportation | Car pick up | Car delivery | Motorbike move | Professional driving service</title>
<meta name="description" content="About David Wright, a professional UK based car driver moving high end vehicles from A to B for you.">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <div id="resume" class="inner-content">

      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.2s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">About</h2>
            <h5 class="font-accident-one-bold uppercase subtitle">Professional reliable and meticulous...</h5>
            <p class="small fontcolor-medium">
               As a freelance trade plate driver based in Surrey, UK I enjoy driving motorbikes and cars both for work and pleasure. Fully insured to drive vehicles up to £2 million pounds as standard, with years of experience driving in the UK and throughout Europe, regular clients can enjoy a platinum level service whereby expenses such as a vehicles service are picked up and included in our charge as part of a complete simplified service for you and your car.
            </p>
            <p>
               Also on offer through carefully selected professional affilates are <a href="{{ route('services') }}">additional services</a> such as <a href="{{ route('services') }}">photography</a> and <a href="{{ route('services') }}">valeting</a>.
            </p>
            <div class="dividewhite2"></div>
         </div>
      </section>

      <!-- Details Block -->
      <section id="m-details" class="inner-section bg-color02">

         <div class="container-fluid nopadding">

            <div class="wow fadeInDown" data-wow-delay="0.4s" data-wow-offset="10">
               <h3 class="font-accident-two-normal uppercase text-center">Qualities you can trust</h3>
               <p class="small text-center fontcolor-medium">

               </p>
               <div class="dividewhite4"></div>
            </div>



            <div class="row">
               <div class="col-md-3 infoblock text-center wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-md-12"><i class="flaticon-circle-1"></i></div>
                     <div class="col-md-12">
                        <div class="dividewhite1"></div>
                        <h5 class="font-accident-one-bold uppercase">Enthusiastic</h5>
                        <p class="small">
                           Car or bike, there is a massive respect for all things automotive, including electric. We will treat any
                           vehicle like it's our own pride and joy and give it the maximum attention it deserves.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-3 infoblock text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-md-12"><i class="flaticon-circle-1"></i></div>
                     <div class="col-md-12">
                        <div class="dividewhite1"></div>
                        <h5 class="font-accident-one-bold uppercase">Professional</h5>
                        <p class="small">
                           It's our aim to be the most professional service provider to you that you've experienced. In look and feel and
                           excution of the job we do for you.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-3 infoblock text-center wow fadeInUp" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-md-12"><i class="flaticon-circle-1"></i></div>
                     <div class="col-md-12">
                        <div class="dividewhite1"></div>
                        <h5 class="font-accident-one-bold uppercase">Flexible</h5>
                        <p class="small">
                           Needs change, deadlines might reduce in time or locations may change, we can be as flexible as needed
                           to ensure the job is done right.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-3 infoblock text-center wow fadeInRight" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-md-12"><i class="flaticon-circle-1"></i></div>
                     <div class="col-md-12">
                        <div class="dividewhite1"></div>
                        <h5 class="font-accident-one-bold uppercase">Trustworthy</h5>
                        <p class="small">
                           With experience in both moving personal vehicles and company vehicles you can trust us to look
                           after your pride and joy and be assured that we are fully insured in the event of any issue.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
            </div>

            <div class="dividewhite2"></div>

         </div>

      </section>
      <!-- /§Details Block -->

   </div>

</div>

@endsection