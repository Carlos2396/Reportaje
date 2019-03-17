@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                {{ $current->title }}
            </h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <img src="{{ asset('images/thumbs/single/standard/standard-1000.jpg')}}" 
                     srcset="{{ asset('images/thumbs/single/standard/standard-2000.jpg')}} 2000w, 
                             {{ asset('images/thumbs/single/standard/standard-1000.jpg')}} 1000w, 
                             {{ asset('images/thumbs/single/standard/standard-500.jpg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection