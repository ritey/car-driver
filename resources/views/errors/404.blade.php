@extends('master')

@section('metas')
<title>Car Driver Page Not Found | Vehicle transportation | Car pick up | Car delivery | Motorbike move | Professional driving service | Trade Plate Driven</title>
<meta name="description" content="Oops, the page your looking for can't be found, please try the homepage! Professional UK based car driver service, moving high end vehicles from A to B for you. Trade plate driven cars">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <section id="homesection" class="container-fluid nopadding">

      <div class="m-details row nopadding bg-color01">

         <div class="col-md-12nopadding">
            <div class="padding-50 wow fadeInDown" data-wow-delay="0.2s" data-wow-offset="10">
               <div class="row nopadding">
                  <div class="col-md-12 nopadding">
                     <h3 class="font-accident-two-normal uppercase">Oops, that page doesn't exist.</h3>
                     <div class="quote">
                        <div class="dividewhite1"></div>
                        <p class="small">
                           Please use the menu above to navigate the site.
                        </p>
                        <div class="dividewhite2"></div>
                     </div>
                  </div>
               </div>
               <div class="divider-dynamic"></div>
               <div class="row nopadding">
                  <div class="col-md-12 infoblock nopadding">
                     <div class="divider-dynamic"></div>
                  </div>
               </div>
            </div>
         </div>

      </div>

      <div class="row nopadding ui-block-color02">

         <div class="col-md-4 pro-experience nopadding">
            <div class="padding-50 wow fadeInRight" data-wow-delay="0.6s" data-wow-offset="5">
               <h3 class="font-accident-two-normal uppercase">Pro. Experience</h3>
               <div class="dividewhite4"></div>
               <div class="experience">
                  <ul class="">
                     <li class="date">25/07/2016 - 26/07/2016</li>
                     <li class="company uppercase">
                        <a>
                           London to Monacco.
                        </a>
                     </li>
                     <li class="position">2016 Porsche 911 Turbo</li>
                  </ul>
                  <ul class="">
                     <li class="date">23/07/2016</li>
                     <li class="company uppercase">
                        <a>
                           Brighton to Brackley.
                        </a>
                     </li>
                     <li class="position">2015 Audi RS4 Estate</li>
                  </ul>
                  <ul class="">
                     <li class="date">21/07/2016</li>
                     <li class="company uppercase">
                        <a>
                           London to Surrey
                        </a>
                     </li>
                     <li class="position">2016 Ducati 1299 Panigale R</li>
                  </ul>
               </div>
               <div class="dividewhite1"></div>
            </div>
         </div>

         <div class="col-md-8 circle-skills nopadding ui-block-color03">
            <div class="padding-50 wow fadeInLeft" data-wow-delay="0.6s" data-wow-offset="5">
               <h3 class="font-accident-two-normal uppercase">Vehicles we've moved</h3>
               <div class="dividewhite1"></div>
               <div class="row">
                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="item-wrap">
                         <figure class="effect-goliath">
                            <div class="popup-call">
                               <a href="/assets/images/RS4.png" class="gallery-item"><i class="flaticon-arrows-4"></i></a>
                            </div>
                            <img src="/assets/images/thumbs/RS4.png" class="img-responsive" alt="Audi RS4 Estate"/>
                            <figcaption>
                               <div class="fig-description">
                                  <h3>Audi <span>RS4</span> Estate</h3>
                                  <p>#cardriver</p>
                               </div>
                            </figcaption>
                         </figure>
                      </div>
                   </div>
               </div>
            </div>
         </div>

      </div>

   </section>

</div>

@endsection