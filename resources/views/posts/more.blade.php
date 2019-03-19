@extends('layouts.master')

@section('content')
<section class="s-content">

    <div class="row narrow">
        <div class="col-full s-content__header" data-aos="fade-up">
            <h1>Conoce más</h1>

            <p class="lead">Dolor similique vitae. Exercitationem quidem occaecati iusto. Id non vitae enim quas error dolor maiores ut. Exercitationem earum ut repudiandae optio veritatis animi nulla qui dolores.</p>
        </div>
    </div>
    
    <div class="row masonry-wrap">
        <div class="masonry">

            <div class="grid-sizer"></div>

            @foreach ($infos as $info)
                <article class="masonry__brick entry format-link" data-aos="fade-up">
                    <div class="entry__thumb">
                        <div class="link-wrap">
                            <a href="{{ route('info', $info->id) }}">
                                <p>{{ $info->title }}</p>
                            </a>
                        </div>
                    </div>
                </article> <!-- end article -->
            @endforeach

        </div> <!-- end masonry -->
    </div> <!-- end masonry-wrap -->
</section> <!-- s-content -->

@endsection