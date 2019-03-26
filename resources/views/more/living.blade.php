@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                {{ $currentI->title }}
            </h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed id="infography" src="{{ asset('images/infography.svg') }}">
            </div>
        </div> <!-- end s-content__media -->

        @include('layouts.more-nav')

    </article>
</section> <!-- s-content -->

@endsection