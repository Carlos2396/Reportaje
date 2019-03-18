<div class="s-pageheader">
    <header class="header">
        <div class="header__content row">
            @include('layouts.header')

            <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

            <nav class="header__nav-wrap">
                <h2 class="header__nav-heading h6">Contenido</h2>

                <ul class="header__nav">
                    <li><a href="/" title="">Inicio</a></li>
                    @foreach ($chapters as $chapter)
                        <li @if($chapter->id == $current->id) class="current" @endif><a href="{{ route('chapter', $chapter->id) }}" title="">{{ $chapter->menu }}</a></li>    
                    @endforeach
                </ul> <!-- end header__nav -->

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
    </header> <!-- header -->

</div> <!-- end s-pageheader -->
