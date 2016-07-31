@extends('master')

@section('metas')
<title>{{ $vars['page_title'] }}</title>
<meta name="description" content="Car Driver Blog, news, stories and photos from the car driver experiences.">
<meta name="keywords" content="cars,bikes,driving,professional, moving cars, moving bikes, personal driver, vehicle transportation">
@endsection

@section('content')

<!-- Container -->
<div class="content-wrap">

   <div id="blog" class="inner-content">

      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">Car Driver Blog</h2>
            <h5 class="font-accident-one-bold uppercase subtitle">Professional reliable and meticulous...</h5>
            <p class="small fontcolor-medium">
               News, stories and photos from our car driving experiences.
            </p>
         </div>
      </section>

      <section class="inner-section">
         <div class="dividewhite3"></div>
         <div class="grid container-fluid text-center wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">

            <div id="posts" class="row popup-container">

               @foreach($vars['articles'] as $article)

                  <div class="grid-item branding design col-md-4 col-sm-6">
                     <div class="item-wrap">
                        <figure class="">
                           <div class="popup-call">
                              <a href="assets/images/cardriver.jpg" class="gallery-item"><i class="flaticon-arrows-4"></i></a>
                           </div>
                           <img src="assets/images/thumbs/cardriver.jpg" class="img-responsive" alt="Car Driver">
                           <figcaption>
                              <div class="post-meta"><span>by <a href="#!">{{ $article->meta_author }}</a>,</span> <span>{{ $article->live_at->format('d-m-Y') }}</span></div>
                              <div class="post-header">
                                 <h5><a href="{{ route('blog.post', ['slug' => $article->slug]) }}">{{ $article->name }}</a></h5>
                              </div>
                              <div class="post-entry">
                                 <p>Aliquam gravida tincidunt congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
                              </div>
                              <!-- <div class="post-tag pull-left">
                                 <span><a href="#branding" data-filter=".branding">Branding</a>,</span><span><a href="#design" data-filter=".design">Design</a></span>
                              </div> -->
                              <div class="post-more-link pull-right"><a href="{{ route('blog.post', ['slug' => $article->slug]) }}">More<i class="fa fa-long-arrow-right right"></i></a></div>
                           </figcaption>
                        </figure>
                     </div>
                  </div>

               @endforeach

            </div>

         </div>
      </section>

   </div>

</div>

@endsection