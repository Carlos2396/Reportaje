@extends('layouts.master')

@section('content')
    <!-- s-extra
    ================================================== -->
    <section class="s-extra">

        <div class="row top">

            <div class="col-eight md-six tab-full popular">
                <h3>Colaboladores</h3>

                <div class="block-1-2 block-m-full popular__posts">
                    
                    @include('layouts.colaborator', ['name' => 'Anónimo', 'task' => 'Redacción de contenido y fotografía', 'image' => 'images/colaboradores/gustavo.png'])
                    @include('layouts.colaborator', ['name' => 'Carlos Amador Manilla', 'task' => 'Desarrollo web', 'image' => 'images/colaboradores/Carlos.png'])
                    @include('layouts.colaborator', ['name' => 'Ivana Fernández', 'task' => 'Ilustración', 'image' => 'images/colaboradores/Ivana.png'])
                    @include('layouts.colaborator', ['name' => 'Cuauhtémoc Cruz Isidro', 'task' => 'Asesoría', 'image' => 'images/colaboradores/Cuau.png'])
                    @include('layouts.colaborator', ['name' => 'Gabriela Pinto Márquez', 'task' => 'Asesoría', 'image' => 'images/colaboradores/Gabi.png'])
                </div> <!-- end popular_posts -->
                <p>Agradecimientos especiales a todos aquellos que colaboraron para hacer este proyecto posible.</p>
            </div> <!-- end popular -->
            
            <div class="col-four md-six tab-full about">
                <h3>Sobre el proyecto</h3>

                <p>Este es un <strong>reportaje multimedia</strong> sobre adultos mayores, en particular se aborda la relación comunicacional-afectiva que estos tienen con sus familias. </p>
                <p>Se busca visibilizar las problemáticas que tiene el adulto mayor en sus relaciones debido a su condición de persona de edad avanzada y sensibilizar a través de la información.</p>
            </div> <!-- end about -->

        </div> <!-- end row -->

    </section> <!-- end s-extra -->
@endsection