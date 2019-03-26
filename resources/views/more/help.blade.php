@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
                <h1 class="s-content__header-title">{{ $currentI->title }}</h1>
        </div> <!-- end s-content__header -->

        <div class="col-full s-content__main">

            <a href="http://difestatal.puebla.gob.mx/1/175/programas/alimentacion-y-desarrollo-comunitario/centro-de-gerontolog%EF%BF%BDa-casa-del-abue/">
                <p class="lead" style="color:#0054a5">CENTRO DE GERONTOLOGÍA CASA DEL ABUE</p>
            </a>
            <p>Busca… “Promover la integración social de los Adultos Mayores de 60 años y más del Estado de Puebla, mediante una Atención Integral a través de acciones que con apego a la normatividad vigente contribuyan a mejorar su calidad de vida, brindándoles atención médica, psicológica, social, jurídica, recreativa, ocupacional y cultural”.</p>

            <a href="https://www.facebook.com/AmatePsicogerontologos/">
                <p class="lead" style="color:#0054a5">AMATE, PSICOGERONTÓLOGOS EDUCANDO PARA LA VEJEZ</p>
            </a>
            <p>Este es… “un grupo de profesionistas del ámbito de la psicogerontología interesados en brindar educación y atención integral a la comunidad para sensibilizar y promover un desarrollo armónico en el adulto mayor, teniendo como eje rector la cultura del envejecimiento activo y saludable”.</p>

            <a href="https://www.doctoralia.com.mx/geriatra/puebla">
                <p class="lead" style="color:#0054a5">GERIATRAS EN PUEBLA</p>
            </a>
            <p>Médicos especializados en personas adultas mayores.</p>

            <a href="https://www.todopuebla.com/directorio/camarasyasociaciones/asilos">
                <p class="lead" style="color:#0054a5">ASILOS Y ESTANCIAS PARA ADULTOS MAYORES EN PUEBLA</p>
            </a>
            <p>Lugares donde se asiste, procura y cuida de personas adultas mayores a través de personal especializado, actividades programadas y supervisión cualificada.</p>

            <p class="lead">PROGRAMAS PARA ADULTOS</p>
            <ul>
                <li><a href="https://www.iberopuebla.mx/oferta-academica/cursos-y-diplomados/diplomados/programa-universitario-para-adultos"> 
                    Programa Universitario para Adultos (IBERO Puebla)
                    </a>
                </li>
                <li><a href="http://148.228.56.113/cincuentaymas/"> 
                    Programa Universitario para Adultos 50 y Más (BUAP)
                    </a>
                </li>
            </ul>

            @include('layouts.more-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection