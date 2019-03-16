<div class="s-content__pagenav" style="margin-bottom: 50px;">
    <div class="s-content__nav">
        <div class="s-content__prev">
            @if ($prev != null)
            <a href="{{ route('chapter', $prev->id)}}" rel="prev">
                <span>Capítulo anterior</span>
                {{ $prev->title }}
            </a>
            @endif
        </div>
        <div class="s-content__next">
            @if ($next != null)
            <a href="{{ route('chapter', $next->id)}}" rel="next">
                <span>Siguiente capítulo</span>
                {{ $next->title }} 
            </a>
            @endif
        </div>
    </div>
</div> <!-- end s-content__pagenav -->