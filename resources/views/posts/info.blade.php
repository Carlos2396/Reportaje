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
                <embed id="infography" src="{{ asset($current->image) }}">
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">
            <div class="s-content__pagenav" style="margin-bottom: 50px;">
                <div class="s-content__nav">
                    <div class="s-content__prev">
                        @if ($prev != null)
                        <a href="{{ route('info', $prev->id)}}" rel="prev">
                            <span>Infografía anterior</span>
                            {{ $prev->title }}
                        </a>
                        @endif
                    </div>
                    <div class="s-content__next">
                        @if ($next != null)
                        <a href="{{ route('info', $next->id)}}" rel="next">
                            <span>Siguiente Infografía</span>
                            {{ $next->title }} 
                        </a>
                        @endif
                    </div>
                </div>
            </div> <!-- end s-content__pagenav -->
        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection