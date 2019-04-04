@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
                <h2 class="s-content__header-title">Epílogo</h2>
                <h1 class="s-content__header-title">{{ $current->title }}</h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed src="{{ asset('images/epilogo.svg') }}" 
                     srcset="{{ asset('images/epilogo.svg')}} 2000w, 
                             {{ asset('images/epilogo.svg')}} 1000w, 
                             {{ asset('images/epilogo.svg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <p>¿Qué es la soledad? ¿Un estado emocional, una decisión o una imposición? ¿Se da por gusto, por naturaleza o por exclusión? ¿Es positiva o negativa? ¿Será que todos llegarán a ella algún día o que ésta simplemente llega sin aviso alguno?</p>
            <p><strong>Gustavo Adolfo Bécquer</strong> una vez dijo que <strong>“la soledad es muy hermosa... cuando se tiene alguien a quien decírselo”</strong> y probablemente se refiera a que estar solo a veces es necesario e, incluso, sano, para la mente y para las relaciones; sin embargo, no se disfruta en aislamiento. Sentirse solo no es malo, pero permanecer en ese estado puede convertirlo en una pesadilla.</p>
            <p>Acompañar a los adultos mayores debería ser un <strong>compromiso constante</strong> porque solo en la <strong>retroalimentación</strong> hallaremos sus motivaciones, sentimientos y la mejor manera de brindarles apoyo. Cuando suponemos que ya no pueden ir a… o que no deberían hacer tal, sin antes consultar con ellos si se sienten capaces, estamos limitándolos con estereotipos; y por el contrario, si no tenemos la <strong>sensibilidad</strong> para entender que con los años <strong>necesitan</strong> más contención, podemos llevarlos a creer que no cuentan con nosotros.</p>
            <p><strong>Cualquier extremo que no tiene en el centro el bienestar de la persona imposibilita la calidad de vida</strong>, entonces, es prioritario acercarse a las necesidades de los adultos mayores, quienes en su situación de vulnerabilidad requieren de especial atención y acción por parte de las generaciones jóvenes.</p>
            <p>El acercamiento a los adultos mayores permite reconocer el valor que dan a la <strong>compañía</strong> y al <strong>diálogo</strong>, gustan de <strong>revivir</strong> sus mejores momentos a través de sus historias y están dispuestos a construir nuevos <strong>recuerdos</strong> a través de la <strong>apertura</strong> y la <strong>disposición</strong>. Debido a que generalmente la gente comienza a alejarse conforme entran en edades avanzadas, le dan un lugar importante a las <strong>atenciones</strong> que les brindan terceros.</p>
            <p>Los adultos mayores experimentan, entre otras cosas la pérdida de forma constante, por la partida de sus hijos, por la muerte de sus amigos y de su pareja e incluso por la merma en sus propias capacidades. Estos factores en conjunto, pueden hacerlos pensar que la <strong>soledad</strong> está invadiendo su vida y, si no se les ayuda, esto puede convertirse en una realidad.</p>
            <p class="lead">La familia debe desarrollar mecanismos adecuados para incluir a los adultos mayores, darles un lugar y reconocer sus necesidades para atenderlas. Asimismo, tiene que entender los procesos que implica envejecer, para llevarlos de lo extraño y ajeno a lo natural y personal.</p>
            <p>Escuchar a los adultos mayores ayuda a entenderlos y poder apoyarlos. <strong>Reconocer</strong> lo valioso de sus palabras y mirarlos sin estereotipos permite observar su potencial y aprender con ellos. Tener la <strong>disposición de convivir</strong> con ellos puede marcar lo que le tocará vivir a las generaciones del futuro, <strong>aceptarlos y entender</strong> que son autónomos hará que exista una convivencia sana y simétrica, donde no se imponga aquél que goce de más poder.</p>
            <p>Además, es prioritario exigir espacios y políticas públicas que <strong>incorporen a los adultos mayores</strong> en todos los ámbitos: <strong>social, político, económico y cultural</strong>. No solo por los que gozarán de ello en el presente inmediato, sino por las generaciones futuras, que, sin duda alguna están envejeciendo y permanecerán en esta etapa por más años.</p>
                

            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection