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
                <embed src="{{ asset('images/intro.svg') }}" 
                     srcset="{{ asset('images/intro.svg')}} 2000w, 
                             {{ asset('images/intro.svg')}} 1000w, 
                             {{ asset('images/intro.svg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <p>El número de adultos mayores está incrementando alrededor del mundo. De acuerdo con la <a href="https://www.who.int/ageing/about/facts/es/">Organización Mundial de la Salud (OMS)</a>, “entre 2000 y 2050, la proporción de los habitantes del planeta mayores de 60 años se duplicará, pasando del 11% al 22%. En números absolutos, este grupo de edad pasará de 605 millones a 2,000 millones en el transcurso de medio siglo”.</p>
            
            <p>Para el caso de México, el <a href="https://www.gob.mx/inapam/prensa/conapo-e-inapam-de-la-mano-en-la-atencion-del-envejecimiento-156950?idiom=es"> Nacional de las Personas Adultas Mayores (Inapam)</a>, estima que, para 2018, habitaban casi 13 millones de personas mayores de 60 años, y que para 2030, según proyecciones del Consejo Nacional de Población (Conapo), esta cifra llegará a 20 millones de personas (Gráfica 1). Lo anterior permite evidenciar que la vejez tiene una relevancia social considerable en la que cada vez más individuos están incluidos y que demanda ser atendida de forma adecuada.</p>

            <div class="infogram-embed" data-id="c310fac0-ef45-41cb-ad55-6406a323bd9a" data-type="interactive" data-title="Gráficas sobre cambios en pirámides poblacionales"></div><script>!function(e,t,s,i){var n="InfogramEmbeds",o=e.getElementsByTagName("script")[0],d=/^http:/.test(e.location)?"http:":"https:";if(/^\/{2}/.test(i)&&(i=d+i),window[n]&&window[n].initialized)window[n].process&&window[n].process();else if(!e.getElementById(s)){var r=e.createElement("script");r.async=1,r.id=s,r.src=i,o.parentNode.insertBefore(r,o)}}(document,0,"infogram-async","https://e.infogram.com/js/dist/embed-loader-min.js");</script><div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"><a href="https://infogram.com/c310fac0-ef45-41cb-ad55-6406a323bd9a" style="color:#989898!important;text-decoration:none!important;" target="_blank">Gráficas sobre cambios en pirámides poblacionales</a><br><a href="https://infogram.com" style="color:#989898!important;text-decoration:none!important;" target="_blank" rel="nofollow"></a></div>
            <br>

            <p>Guadalupe Chávez Ortíz, directora del departamento de Ciencias de la Salud de la Ibero Puebla, señala que si se analizan los estudios sobre adultos mayores se encontrará con que es un tema nuevo, cobró interés para diferentes disciplinas hasta los años sesenta, que es cuando las pirámides poblacionales empezaron a invertirse, lo que dejó entrever cómo el mundo está envejeciendo. En América Latina, el estudio es aún más reciente porque este fenómeno comenzó a ser visible hace pocos años.</p>
            <p class="lead">En términos más generales, es una tendencia que va al alza donde lo más preocupante radica en la vulnerabilidad de aquellos que entran a él. Así como se ganan años y sabiduría, se pierden agudeza en los sentidos y, a veces, capacidades cognitivas.</p>
            <p>Por ello, Leticia Quiroz Ávila, académica de la Benemérita Universidad Autónoma de Puebla, advierte que el aumento en la esperanza de vida es distinto si es analizado desde la calidad de vida, ahí entra la verdadera preocupación. “Es importante entender que no solo se debe preparar al adulto mayor, sino que es necesario pensar que a toda la sociedad le corresponde entrar en el proceso, por ello es indispensable educar para la vejez; entendiendo que esto no solo implica a la persona que ya está en esa etapa, sino educar desde la familia, desde el individuo, desde lo intergeneracional”.</p>
            <p>Con relación a lo intergeneracional Chávez Ortíz añade que a través de diferentes investigaciones se ha comprobado que a muchos jóvenes universitarios no les resulta atractivo, ni interesante el tema de adultos mayores porque consideran que la vejez es “una enfermedad” cuando en realidad es una etapa más de la vida.</p>
            <p>Como cualquier etapa, la vejez, tiene ciertas curvas que oscilan entre sabores dulces y amargos. Una vez que se entra en ella, llegan cambios que, dependiendo de la historia de cada persona, pueden asimilarse o rechazarse. </p>
            <p>Además de la metamorfosis individual, el entorno se modifica. Los espacios ya no se adecúan a sus necesidades y las personas comienzan a verles con otros ojos. Los limitan e imposibilitan, convierten pronto la ternura en lástima y, en vez de propiciar un ambiente sano e incluyente, agobian con sobreprotección o se limitan a ser distantes y fomentar la indiferencia. Las familias comienzan a actuar de formas misteriosas y las personas adultas mayores deben anteponerse para no perder su autonomía. </p>
            <p>La sabiduría de los adultos mayores les permite reconocer que no hay malas intenciones en algunas actitudes o situaciones que les molestan, sin embargo, eso no significa que dejen de sentirse a disgusto con las mismas. Por ello, las generaciones jóvenes deben educarse para la vejez, aprender sobre ella y entender todo lo que esta etapa implica.</p>
            <p>Dentro de las múltiples historias de los adultos mayores hay quienes viven acompañados y también quienes están solos, y de estos, hay quienes son felices y también quienes viven con tristeza. Cada quien tiene sus propias luchas y motivaciones, sin embargo, quienes se presentan en este reportaje a pesar de sus diferencias, comparten un rasgo: mantienen relaciones comunicacionales y afectivas con sus familias.</p>


            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection