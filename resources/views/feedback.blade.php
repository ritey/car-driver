@extends('master')

@section('metas')
<title>Testimonials from Car Driver Clients | Feedback from customers who've had their car or motorbike moved</title>
<meta name="description" content="A few words from our clients on our service and professionalism when it comes to driving your car or motorbike from point A to B">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <div id="feedback" class="inner-content">

      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">Feedback</h2>
            <h5 class="font-accident-one-bold uppercase subtitle">Professional reliable and meticulous...</h5>
            <p class="small fontcolor-medium">
            Below are comments from existing clients, we value all feedback and strive for perfection so please do let us know if there is anything we can improve upon.
            </p>
         </div>
      </section>

      <!-- Feedback Block -->
      <section class="inner-section feedback feedback-light">

         <div class="container-fluid nopadding">

            <div class="row">

               <div class="col-md-2">&nbsp;</div>
               <div class="col-md-8 e-centered wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">
                  <div class="dividewhite2"></div>
                  <div id="form-messages"></div>
                  <form id="ajax-contact" method="post" action="#" class="wpcf7-form">
                     <div class="field">
                        <!--<label for="name">Name:</label>-->
                        <input type="text" id="name" name="name" placeholder="Name" required>
                     </div>

                     <div class="field">
                        <!--<label for="email">Email:</label>-->
                        <input type="email" id="email" name="email" placeholder="Email" required>
                     </div>

                     <div class="field">
                        <!--<label for="message">Message:</label>-->
                        <textarea id="message" name="message" placeholder="Message" rows="7" cols="30"  required></textarea>
                     </div>

                     <div class="dividewhite2"></div>

                     <div class="field text-center">
                        <button type="submit" class="btn btn-lg btn-darker">Send Message</button>
                     </div>
                  </form>
               </div>
               <div class="col-md-2">&nbsp;</div>
               <div class="col-md-12 divider-dynamic"></div>
            </div>

         </div>

         <div class="dividewhite6"></div>

      </section>
      <!-- /Feedback Block -->

      <!-- Testmonials Block -->
      <section id="testmonials" class="inner-section bg-color02">
         <div class="container-fluid nopadding">

            <div class="wow fadeInDown" data-wow-delay="0.4s" data-wow-offset="10">
               <h3 class="font-accident-two-normal uppercase text-center">Testmonials</h3>
               <h5 class="font-accident-one-bold uppercase text-center subtitle">A few messages from our clients</h5>
               <div class="dividewhite1"></div>
               <p class="small fontcolor-medium text-center">

               </p>
            </div>

            <div class="dividewhite4"></div>

            <div class="row">
               <div class="col-md-4 wow fadeInLeft" data-wow-delay="0.5s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-xs-3">
                        <img src="assets/custom/images/userpic04.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic">
                     </div>
                     <div class="col-xs-9">
                        <h5 class="font-accident-one-bold text-left uppercase">Lee Rowland</h5>
                        <p class="small hovercolor">Personal</p>
                        <p class="text-left small">
                           A superb professional service. I hate giving my keys to someone else but David left me feeling confident my car was in safe hands.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-xs-3">
                        <img src="assets/custom/images/userpic02.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic">
                     </div>
                     <div class="col-xs-9">
                        <h5 class="font-accident-one-bold text-left uppercase">Daniel Bray</h5>
                        <p class="small hovercolor">Personal</p>
                        <p class="text-left small">
                           I wanted my RS4 serviced before a trip to France and I didn't have time to take it to my preferred garage so David's service was excellent in allowing
                           me to continue with my plans and give the car the appropriate attention it deserves at APS.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
               <div class="col-md-4 wow fadeInRight" data-wow-delay="0.5s" data-wow-offset="10">
                  <div class="row">
                     <div class="col-xs-3">
                        <img src="assets/custom/images/userpic03.jpg" alt="Rachel James Johnes" class="img-responsive img-circle author-userpic">
                     </div>
                     <div class="col-xs-9">
                        <h5 class="font-accident-one-bold text-left uppercase">Karl Romm</h5>
                        <p class="small hovercolor">BMW</p>
                        <p class="text-left small">
                           David's professionalism and car care is why we continue to use his services in collecting and moving cars for us.
                        </p>
                     </div>
                  </div>
                  <div class="divider-dynamic"></div>
               </div>
            </div>

            <div class="dividewhite6"></div>

         </div>
      </section>
      <!-- /Testmonials Block -->

   </div>

</div>

@endsection