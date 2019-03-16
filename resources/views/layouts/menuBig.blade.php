<section class="s-pageheader s-pageheader--home">

    <header class="header">
        <div class="header__content row">
            @include('layouts.header')
        </div> <!-- header-content -->
    </header> <!-- header -->


    <div class="pageheader-content row">
        <div class="col-full">
            <div class="featured">
    
                @foreach ($chapters as $chapter)
                    <div class="featured__column featured__column--big">
                        @include('layouts.entry', ['chapter' => $chapter])
                    </div> <!-- end featured__small -->
                @endforeach
                
            </div> <!-- end featured -->
    
        </div> <!-- end col-full -->
    </div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->


