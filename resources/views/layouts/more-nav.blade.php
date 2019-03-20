<div class="col-full s-content__main">
    <div class="s-content__pagenav" style="margin-bottom: 50px;">
        <div class="s-content__nav">
            <div class="s-content__prev">
                @if ($prev != null)
                <a href="{{ route('info', $prev->id)}}" rel="prev">
                    <span>Anterior</span>
                    {{ $prev->title }}
                </a>
                @endif
            </div>
            <div class="s-content__next">
                @if ($next != null)
                <a href="{{ route('info', $next->id)}}" rel="next">
                    <span>Siguiente</span>
                    {{ $next->title }} 
                </a>
                @endif
            </div>
        </div>
    </div> <!-- end s-content__pagenav -->
</div> <!-- end s-content__main -->