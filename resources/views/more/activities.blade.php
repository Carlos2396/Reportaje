@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h1 class="s-content__header-title" id="activity_title">
                {{ $currentI->title }}
            </h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed id="infography" src="{{ asset('images/activities/1.svg') }}">
            </div>

            <div class="s-content__post-thumb">
                <embed id="infography" src="{{ asset('images/activities/2.svg') }}">
            </div>
        </div> <!-- end s-content__media -->

        @include('layouts.more-nav')

    </article>
</section> <!-- s-content -->

@endsection