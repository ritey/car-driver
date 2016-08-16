@extends('master')

@section('metas')
<title>Trade Plate Driver | Need your car driving to a race track? Want your car to be taken for a service or professional valet? Car Driver professional vehicle moving services</title>
<meta name="description" content="As the car driver I will drive your car or motorbike anywhere you need. Typical scenario's include taking your car to a specialist valet, to a specialist servicing garage or to a race track.">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <div id="portfolio" class="inner-content">
      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.2s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">Services</h2>
            <h5 class="font-accident-one-bold uppercase subtitle">Professional reliable and meticulous...</h5>
            <p class="small fontcolor-medium">
               As the <strong>car driver</strong> I will drive your car or motorbike anywhere you need. Typical scenario's include taking your car to a specialist valet, to a specialist servicing garage or to a race track. Alternatively it may be that your car or motorbike needs to be collected and delivered to your home or another location.
            </p>
            <p>If you need a professional driving service as a business client to move a car or bike to a new location I can accomodate that as well.</p>

            <p>Each trip is quoted individually based on its unique circumstances. For a quote, <a href="{{ route('contact') }}">contact me</a>.</p>
            <div class="divider-dynamic"></div>
         </div>
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.2s" data-wow-offset="10">
               <div class="row nopadding">
                  <div class="col-md-4 infoblock nopadding">
                     <div class="row">
                        <div class="col-sm-12 col-md-9">
                           <h5 class="font-accident-one-bold uppercase">Driving</h5>
                           <p class="small">
                              The core offering, <strong>moving your vehicle from point to point</strong>. Having your vehicle <strong>driven to a location of your choice</strong>, also known as <strong>'trade plate driven'</strong>. Cheaper than arranging a vehicle transporter and often more flexible.
                           </p>
                           <a class="btn btn-wh-trans btn-xs" href="{{ route('contact') }}">Contact for a quote</a>
                        </div>
                     </div>
                     <div class="divider-dynamic"></div>
                  </div>
                  <div class="col-md-4 infoblock nopadding">
                     <div class="row">
                        <div class="col-sm-12 col-md-9">
                           <h5 class="font-accident-one-bold uppercase">Photography</h5>
                           <p class="small">
                              An additional service, I have a special relationship with an exceptional <strong>automotive photographer</strong> so if you wish to have your <strong>vehicle professional photographed</strong> this can be arranged and quoted for.
                           </p>
                           <a class="btn btn-wh-trans btn-xs" href="{{ route('contact') }}">Contact for a quote</a>
                        </div>
                     </div>
                     <div class="divider-dynamic"></div>
                  </div>
                  <div class="col-md-4 infoblock nopadding">
                     <div class="row">
                        <div class="col-sm-12 col-md-9">
                           <h5 class="font-accident-one-bold uppercase">Valeting</h5>
                           <p class="small">
                              I also have several relationships with <strong>exceptionally talented car valeters</strong> so if you wish to have your <strong>vehicle professional cleaned</strong> either before or after <strong>moving a vehicle</strong> or even if a vehicle doesn't need to be moved.
                           </p>
                           <a class="btn btn-wh-trans btn-xs" href="{{ route('contact') }}">Contact for a quote</a>
                        </div>
                     </div>
                     <div class="divider-dynamic"></div>
                  </div>
               </div>
            </div>
      </section>

      <!-- Counts Block -->
      <section id="counts-light-bg" class="counts inner-section bg-color02 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
         <div class="container-fluid nopadding">
            <div class="count-container row">
               <div class="col-lg-3 col-sm-6 col-xs-12 count">
                  <div>
                     <div class="count-icon">
                        <i class="flaticon-stats48"></i>
                     </div>
                     <span class=".integers digit font-accident-two-normal">120</span>

                     <div class="count-text font-accident-one-bold">Collections</div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12 count">
                  <div>
                     <div class="count-icon">
                        <i class="flaticon-stats48"></i>
                     </div>
                     <span class=".integers digit font-accident-two-normal">90</span>

                     <div class="count-text font-accident-one-bold">Deliveries</div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12 count">
                  <div>
                     <div class="count-icon">
                        <i class="flaticon-stats48"></i>
                     </div>
                     <span class=".integers digit font-accident-two-normal">45</span>

                     <div class="count-text font-accident-one-bold">Clients</div>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6 col-xs-12 count">
                  <div>
                     <div class="count-icon">
                        <i class="flaticon-stats48"></i>
                     </div>
                     <span class=".integers digit font-accident-two-normal">16,500</span>

                     <div class="count-text font-accident-one-bold">Miles driven</div>
                  </div>
               </div>
            </div>
            <div class="dividewhite2"></div>
         </div>
      </section>
      <!-- /Counts Block -->

   </div>

</div>

@endsection