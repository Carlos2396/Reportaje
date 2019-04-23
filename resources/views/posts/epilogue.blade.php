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

            <p class="lead">¿Qué es la soledad? ¿Un estado emocional, una decisión o una imposición? ¿Se da por gusto, por naturaleza o por exclusión? ¿Es positiva o negativa? ¿Será que todos llegarán a ella algún día o que ésta simplemente llega sin aviso alguno?</p>
            <p>Gustavo Adolfo Bécquer una vez dijo que <strong>“la soledad es muy hermosa...</strong> cuando se tiene alguien a quien decírselo” y probablemente se refiera a que estar solo a veces es necesario. Incluso, podría ser sano, para la mente y para las relaciones. Pero es importante distinguirla del aislamiento, que implica exclusión. <strong>Sentirse solo es natural, pero permanecer en ese estado por dislocación social puede convertirlo en una pesadilla.</strong></p>
            <p>Las personas de edad son un grupo que está expuesto a vivir la soledad de forma natural pero también de manera inducida. Son un <strong>grupo vulnerable</strong> porque la sociedad actual tiende a <strong>excluirlos</strong> por desinterés, incomodidad y falta de información respecto a esta etapa de la vida. Esto es visible en la <strong>falta de políticas públicas</strong> que garanticen su bienestar en las diferentes esferas de la vida y en el <strong>desapego, apatía o sobreprotección</strong> al interior de las familias, por mencionar algunas situaciones.</p>
            <p>Por ello, <strong>el acercamiento a los adultos mayores representa una oportunidad</strong> que ayuda a reconocer sus necesidades, identificar el valor que dan a la <strong>compañía</strong> y al <strong>diálogo</strong>, su gusto por <strong>revivir momentos gratos</strong> en su vida a través de historias pasadas y su <strong>disposición a construir nuevos recuerdos</strong> a través de la apertura. Hay un valor especial en las atenciones que terceros tienen hacia las personas adultas mayores, porque ellos, mejor que nadie, saben que envejecer puede representar el alejamiento de los demás.</p>
            <p>Los adultos mayores experimentan, entre otras cosas la <strong>pérdida de forma constante</strong>, por la partida de sus hijos, por la muerte de sus amigos y de su pareja e incluso por la merma en sus propias capacidades. Estos factores en conjunto, <strong>pueden hacerlos pensar que la soledad está invadiendo su vida y, si no se les ayuda, esto puede convertirse en una realidad.</strong></p>
            <p class="lead">Escuchar a los adultos mayores ayuda a entenderlos y poder apoyarlos, reconocer lo valioso de sus palabras. Mirarlos sin estereotipos permite observar su potencial y aprender con ellos, entender que son capaces. Tener la disposición de convivir con ellos puede marcar lo que le tocará vivir a las generaciones del futuro, aceptarlos y entender que son autónomos hará que exista una convivencia sana y simétrica, donde no se imponga aquél que goce de más poder.</p>
            <p>Las ventajas de actuar en favor de este grupo son presentes y futuras, porque benefician no sólo a los que las viven ahora, sino a aquellos que llegarán a la misma posición, como hijos, padres o abuelos. Los retos y debilidades siempre pueden ser la base de una oportunidad.</p>

                

            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection