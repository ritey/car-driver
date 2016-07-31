@extends('master')

@section('metas')
<title>{{ $vars['article']->meta_title }}</title>
<meta name="description" content="{{ $vars['article']->meta_description }}">
@endsection

@section('content')

<div class="content-wrap">

   <div id="blogpost" class="inner-content">

      <section id="page-title" class="inner-section">
         <div class="container-fluid nopadding wow fadeInRight" data-wow-delay="0.4s" data-wow-offset="10">
            <h2 class="font-accident-two-normal uppercase">{{ $vars['article']->name }}</h2>
            <div class="post-meta"><span>by <a href="#!">{{ $vars['article']->meta_author or 'Admin' }}</a>,</span> <span>{{ $vars['article']->live_at->format('d-m-Y') }}</span></div>
         </div>
      </section>

      <!-- Blog Block -->
      <section class="inner-section">

         <div class="container-fluid nopadding">

            <img src="{{ $vars['article']->slug }}" class="img-responsive wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">

            <article class="post wow fadeInDown" data-wow-delay="0.6s" data-wow-offset="10">

               <div class="dividewhite6"></div>

               {!! $vars['article']->body !!}

               <div class="dividewhite4"></div>
               <hr>

            </article>

         </div>
         <div class="dividewhite8"></div>

      </section>
      <!-- /Blog Block -->

   </div>

</div>

@endsection