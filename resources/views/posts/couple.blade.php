@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h2 class="s-content__header-title">Capítulo 1</h2>
            <h1 class="s-content__header-title">{{ $current->title }}</h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed src="{{ asset('images/couple.svg') }}" 
                     srcset="{{ asset('images/couple.svg')}} 2000w, 
                             {{ asset('images/couple.svg')}} 1000w, 
                             {{ asset('images/couple.svg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <p>Para las parejas que se casaron en la década de los sesentas, el matrimonio es considerado como la culminación de una relación de pareja. A través de este rito o contrato voluntario, dos personas se disponen, en términos ideales, a compartir el resto de su vida juntos.</p>
            <p>El interés por la pareja, su conformación y los mecanismos para mantenerse unida ha propiciado investigaciones diversas. Con el fin de analizar este tipo de relaciones. En un <a href="https://www.academia.edu/6191803/Nuestros_a%C3%B1os_dorados_Las_relaciones_de_pareja_ante_el_envejecimiento?auto=download">estudio realizado por la doctora Ruth Nina Estrella</a> sobre el matrimonio en la etapa tardía del ciclo de vida, se explica que</p>
            <p><blockquote>La vida en pareja significa un encuentro con el otro. Las parejas conviven, se aceptan y validan sus diferencias. [...] -el principal interés de estudiar el matrimonio- radica en comprender su complejidad, así como estudiar los diferentes procesos que intervienen en la funcionalidad y estabilidad de la relación marital [...] el estudio del <strong>matrimonio en la etapa tardía del ciclo de vida</strong>, resulta significativo [...] porque <strong>son parejas cuyos miembros se han acompañado durante toda una vida y han envejecido juntos.</strong></blockquote></p>
            <p>El lazo interpersonal que se genera con el matrimonio se fortalece con el paso de los años, por lo que en términos significativos la relación adquiere un valor mayor e insustituible. Los adultos mayores que viven en pareja desarrollan un sentido de compromiso, responsabilidad, cuidado e incluso dependencia con el otro.</p>
            
            <p><em>El Principito</em> tiene diferentes enseñanzas a lo largo de sus páginas y una de las más populares enuncia que el <strong>“amor no es mirarse el uno al otro sino más bien mirar ambos en la misma dirección”</strong>. Antoine de Saint-Exupéry al escribir esto, probablemente se refería a la importancia de compartir y comunicar. <strong>Esta frase puede representar la vida en pareja, la realización de planes en común, la visión acompañada de forma voluntaria y genuina.</strong></p>
            <p>La calle donde vive el matrimonio Flores Morales guarda tantas historias como años. Detrás de un portón naranja se encuentra su hogar, que es frío y huele a cabello suave y blanco, manos arrugadas y apapachos reconfortantes.</p>
            <p>Doña Gloria es una mujer fuerte, amorosa y paciente. Ella dice que físicamente se encuentra bien pues aún puede subirse al camión y cargar cosas pesadas con su carrito del mandado. Actualmente lo que le aflige es la situación de don Guillermo, quien ya no tiene mucha fuerza en sus piernas y camina despacio ayudado por su bastón. Él es un hombre entregado, persistente, amable y persuasivo; tal vez por esto último es tan buen vendedor. Le gusta ir a trabajar al negocio familiar, una zapatería del centro de la ciudad de Puebla que tiene más de medio siglo.</p>
        </div>

        <!-- Video Gloria y Guillermo (la historia acompañará el video con breves subtítulos) -->
        <div class="s-content__media col-full">
            <div class="video-container">
                <iframe src="https://player.vimeo.com/video/326495253" width="640" height="360" frameborder="0" allowfullscreen></iframe>
            </div> 
        </div> <!-- end s-content__media -->    
        
        <div class="col-full s-content__main">
            <p>Ahora ella tiene 84 años y él, 95. Su casa se encuentra dividida en tres departamentos, uno habitado por ellos y los restantes, por sus dos hijos: Adriana y Memo. Esta dinámica espacial, como señala Chávez Ortíz, era común en los años sesenta y permitía que hasta tres generaciones residieran en la misma casa. Sin embargo, la convivencia entre los señores Flores y sus hijos no es tan frecuente. “A mis hijos no los veo tanto, mejor procuro alejarme” afirma doña Gloria, quien explica que ella y su esposo intentan realizar sus actividades por sí mismos.</p>
            <p class="lead">La relación intergeneracional se está diluyendo y esto se debe, añade Chávez, a diferentes factores sociales, económicos y culturales. Ahora, aunque haya en una familia tres o cuatro generaciones, ya no se unen; por el contrario, tienden a aislarse. Es poco frecuente que los bisnietos convivan con el bisabuelo o los nietos con los abuelos. Incluso compartir un espacio no asegura una interacción frecuente.</p>
            <p>A nivel socioeconómico es innegable que las disparidades de ingresos representan riesgos, así aseveran los sociólogos <strong>Fernando Bruno y Jesús Acevedo</strong>, quienes han demostrado en un artículo que el envejecimiento de la población en el país  ‘se lleva a cabo en un contexto caracterizado por un alto índice de pobreza, una amplia desigualdad social y económica producto de una redistribución regresiva del ingreso, y en el plano del mercado de trabajo, con una clara deficiencia en la creación de empleos de calidad y regulados'.</p>
            <p>Sobre las deficiencias culturales, solo hace falta entrar a los principales centros de cultura para notar que no hay una oferta clara ni especializada para este público, que, en general, requiere de condiciones particulares debido a sus posibilidades físicas y cognitivas. </p>
            <p>A nivel familiar <strong>Francisco Gutiérrez, director del Centro de Evaluación e Investigación Psicológica de la Universidad de Guadalajara (UdeG)</strong> explica en el reportaje <a href="https://magis.iteso.mx/anteriores/016/016_indivisa_sociedad.htm">México envejece "Cuando tú vas, yo ya vengo"</a> que:</p>
            <p><blockquote>Todavía hace algunas décadas los abuelos ocupaban un lugar central en la estructura familiar, pero ‘la familia ha cambiado. Mientras que anteriormente las familias eran extensas y se incorporaban varios actores a la crianza de los hijos, como los tíos y los abuelos, hoy nos encontramos con familias nucleares en las que la convivencia y la educación se centran entre padres e hijos y el anciano ha pasado a un segundo plano. Se extiende la idea de que el abuelo ya no comprende, habla de lo mismo, no entiende las nuevas tecnologías, no es actual. Estamos construyendo un estereotipo'.</blockquote></p>
            <p>La rutina de la pareja Flores Morales pocas veces cambia. En un día común, ella se levanta temprano y hace el desayuno a la par que él tiende la cama; al medio día, ella arregla la casa, a veces lava la ropa y prepara la comida mientras él va por los mandados al súper o a la tienda y, finalmente ven la televisión juntos en la noche. </p>
            <p>Estas actividades son comunes entre los adultos mayores mexicanos. De acuerdo con el artículo <a href="https://www.gob.mx/cms/uploads/attachment/file/232090/04_Ramos.pdf">Análisis de la participación laboral de los adultos mayores con base en un modelo logit</a>, de <strong>Elba Ramos</strong>, el “46.1 por ciento de los hombres que no participan en el mercado laboral indica que no trabaja porque encontrarse jubilado o pensionado, mientras que para las mujeres en esta condición la razón principal obedece a que se dedican a los quehaceres del hogar (70.7%), situación que para los hombres representa 3.0 por ciento. Esto refleja que si bien las mujeres no se encuentran laborando en un trabajo remunerado, lo hacen a través de un trabajo doméstico sin ninguna recompensa económica”</p>
            <p>Doña Gloria gusta de hacer comida, en especial, para complacer a su esposo, a su hija y a su nieta. Cocina diferentes platillos en un mismo día porque a las dos últimas no les gusta el picante. Esta actividad si bien no es remunerada de forma monetaria, le da la gratificación de saberse productiva al entregar amor a través de cada platillo. Por su parte, don Guillermo disfruta ir a trabajar a la zapatería de vez en cuando. Y, aunque a veces le cuestionan por qué sigue trabajando, él no duda en responder que siempre lo ha hecho y que no quiere aburrirse encerrado en su casa. </p>
            <p>Esta pareja también busca sus propias formas de recreación, mecanismos para salir de su casa y disfrutar de otras realidades. “Nosotros pedimos nuestro taxi y nos vamos a Catedral, a desayunar, por un helado o a ver a la gente pasar” afirma doña Gloria.</p>
            <p class="lead">Los adultos mayores se pueden beneficiar de trabajar, ayudar en el hogar, salir a pasear o hacer actividades recreativas, porque les permite tener un rol activo dentro de la sociedad. Pese a ello, el <a href="https://apps.who.int/iris/bitstream/handle/10665/186466/9789240694873_spa.pdf;jsessionid=5533CE25940633687BE2BAC95C5BBADB?sequence=1">Informe Mundial sobre el Envejecimiento y la Salud</a> realizado por la OMS en 2015 señala que es necesario ser cuidadosos con el abordaje de estos roles; ya que es indispensable considerar las necesidades que estos tienen debido a su edad y condición. Todos debemos evitar “defectos fundamentales que probablemente tengan consecuencias negativas para los miembros más vulnerables de la población de mayor edad”.</p>
            <p>Si bien, doña Gloria y don Guillermo, aún realizan diferentes actividades, reconocen que cada vez necesitan más ayuda para ejecutarlas. Por ejemplo, para abrir y cerrar el local, requieren que un vecino los auxilie porque sus piernas y fuerza ya no les permiten hacerlo por sí mismos; y, en el caso del transporte, dejaron de utilizar el autobús porque ya no es un medio que se ajuste a sus necesidades.</p>
            <p>En este sentido, la <strong>terapista ocupacional Silvia Delgado</strong> explica que en el envejecimiento ocurre un proceso de oxidación que aumenta día a día y dependiendo de la genética y el estilo de vida, cada persona experimenta cambios distintos. “En todos los cuerpos la producción de calcio se modifica, lo que propicia fragilidad en los huesos; las áreas cerebrales no trabajan de la misma manera; se pierde masa muscular y con eso, fuerza; el organismo no se recupera con la misma rapidez y los reflejos se ven disminuidos. Todo esto, hace complejas actividades comunes. Sin embargo, <strong>la activación de los adultos mayores reduce el daño físico, mental y emocional que puede provocar el sedentarismo, condición común en edades avanzadas”.</strong></p>
            <p>Los hijos del matrimonio Flores Morales les dicen que ya no vayan a trabajar, que tengan mucho cuidado y que ya no pueden realizar diferentes tareas. Sin embargo, se debe entender que la realidad personal del adulto mayor no le impide continuar con su vida, más bien, hace que se enfrente a nuevos retos. </p>
            <p>Los adultos mayores, debido a las condiciones físicas y mentales propias de su edad, requieren de cuidados y asistencia. En la mayoría de los casos estos recaen en la familia, que es el nexo más cercano y moralmente comprometido. Una constante detectada por Quiroz Ávila apunta a dos problemáticas en las relaciones interpersonales que en nada ayudan al bienestar, ni a la salud del adulto mayor: la total sobreprotección, que lleva a la inutilización del papel que juega el adulto mayor, o el total abandono y apatía, que llevan a un extremo de aislamiento, marginación y olvido.</p>
            <p>Es necesario llegar a un matiz: <strong>respaldo e independencia, cuidado y libertad</strong>. El bienestar en edades avanzadas exige nuevas dinámicas donde los acuerdos sean la base. También es importante que reconozcan como principal red de apoyo a la familia. En muchas ocasiones, motivados por falsos estándares, piensan que causarán molestias si expresan lo que necesitan. Doña Gloria comenta al respecto: “Guillermo y yo siempre nos propusimos no depender de Adriana ni de Memo porque no queremos ser una carga”. Además, ellos reconocen que sus hijos tienen sus propias responsabilidades y no pueden cuidarlos.</p>
            <p class="lead">La sociedad actual exige que se retome la cercanía que en algún tiempo existió entre generaciones, que los jóvenes se aseguren de que los adultos mayores sepan que cuentan con ellos y, reconocer que en la calidad de interacción estará el bienestar de la convivencia.</p>
            
            <h2>Y ahora que ya no estás ¿Quién soy yo?: vivir sin el amor de tu vida</h2>
        </div>
        
        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed src="{{ asset('images/Alicia/1.svg') }}" 
                     srcset="{{ asset('images/Alicia/1.svg')}} 2000w, 
                             {{ asset('images/Alicia/1.svg')}} 1000w, 
                             {{ asset('images/Alicia/1.svg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">
            <p>Doña Alicia es una mujer fuerte. A pesar de extrañar a su esposo David, está agradecida con Dios por la vida que tiene. Fue la menor de cuatro hermanos, vivió con sus padres, estudió, y trabajó en una fábrica hasta contraer matrimonio y tener a sus dos hijos. Hace un año murió el amor de su vida y actualmente vive con su hijo y nuera. Casi siempre está en su casa: limpia, riega las plantas, hace de comer y acomoda algo todos los días. A ella le gustan los postres, las manualidades y pasear.</p>
            <p>Es una mujer detallista, tiene anotadas todas las fechas importantes en una hoja. Su memoria a veces le falla y así puede recordar los cumpleaños, santos y aniversarios -boda o fallecimiento- de sus seres queridos. En la mañana, se aproxima al calendario y toma la hoja, checa el día que corresponde y si aplica, tiene la atención de llamar a primera hora para dar una felicitación o una condolencia. Para ella, hablar por teléfono es una forma de estar presente.  </p>
            <p class="lead">Al convivir con un adulto mayor se debe prestar atención a lo que es importante para ellos, observar sus actividades recurrentes, la forma en que solicitan algo, el tono en que hablan o el semblante que tienen en una fecha particular. Si se tiene la apertura para comprenderlos será posible entablar un diálogo. La comunicación es indispensable en cualquier tipo de relación y para que esta pueda ocurrir es necesario poner en común a las personas que participen de ella.</p>
            <p>Así como la observación personal es fundamental, lo es también la creación de herramientas y mecanismos que obedezcan a las necesidades que se presentan en el fenómeno de la vejez. De acuerdo con el <strong>Inapam</strong>, existe un “fenómeno llamado feminización del envejecimiento, es decir, las mujeres viven más años que los hombres, [...] enfatizando la importancia de generar políticas públicas con perspectiva de género”. </p>
            <p>Doña Alicia dice que estar sin David ha sido complicado y, hablar de él es difícil. “Él era mi compañero, con quien podía salir a la calle y sentirme segura [...] estaba acostumbrada a su presencia”. Con la partida de su pareja los fines de semana se volvieron solitarios y la mesa del comedor dejó de tener a alguien a la cabeza.</p>
            <p>Sobre el <strong>duelo en la pérdida de la pareja</strong>, Chávez Ortíz puntualiza que, en el caso de los adultos mayores, <strong>resulta más duro porque pasaron toda su vida en compañía de la otra persona, desarrollaron sus propios ritos y con ello su cultura</strong>. No importa si se llevaban bien o mal, si se amaban o no, al estar acostumbrados a la mutua compañía, se hace más doloroso el momento en que se vive en soledad. En este sentido, añade, el papel de la familia es fundamental. En el caso particular de los adultos mayores, la enfermera Marta Germans Trias en su artículo <a href="http://scielo.isciii.es/scielo.php?script=sci_arttext&pid=S1134-928X2009000400003">La soledad en el anciano</a> explica que el papel fundamental de la familia en la lucha contra la soledad es porque constituye <strong>“el principal soporte social del anciano, considerando las relaciones y el amparo en los seres queridos como un recurso clave”</strong></p>
            <p>Doña Alicia comparte que estar acostumbrada a la presencia y atenciones de su esposo hace que sienta con mayor intensidad la ausencia del mismo. A pesar de ello, se siente motivada por la gente que le rodea. Su hija le habla por teléfono todos los días, su hijo desayuna, come y cena con ella, también tiene conocidos cercanos que la acompañan como su cuñada y su compadre. “Rosita -su cuñada- se ha portado muy bien, sobretodo desde que murió David. Me jala mucho, vamos por café, por helado, a comer [...] y con mi compadre estoy muy agradecida, siempre me ayuda; me lleva por la pensión, me invita a salir algunos fines de semana, siempre me dice ¡comadrita, si necesita algo, hábleme!”</p>
            <p>En el duelo, agrega Chávez Ortíz, el dolor es para la persona que se queda porque la muerte de un ser amado implica una pérdida no sólo física, sino de vínculo, porque éste desaparece y entonces, dejas de ser lo que eras. “Ya no eres la esposa de fulanito, <strong>te conviertes</strong> en la viuda de fulanito; entonces, dejas de ser lo que eras. <strong>Este problema afecta en particular a las generaciones mayores, porque incluso el rol que desempeñaban se ve mermado</strong>. La señora era la cocinera, la que lavaba, la que planchaba y cuidaba la casa. Cuando eso cambia y este rol desaparece, hay una sensación de pérdida de identidad y surge la pregunta ahora, ¿quién soy yo?”.</p>
            <p class="lead">El Instituto Nacional contra la Discriminación, la Xenofobia y el Racismo (Inadi) de Argentina explica en el documento <a href="http://www.inadi.gob.ar/contenidos-digitales/wp-content/uploads/2017/06/Discriminacion-por-Edad-Vejez-Estereotipos-y-Prejuicios-FINAL.pdf">Discriminación por Edad, Vejez, Estereotipos y Prejuicios</a> que “La pérdida de la pareja es un factor de riesgo para la salud física y emocional que –en muchos casos– anticipa una muerte temprana. La Organización Mundial de la Salud (OMS) considera que el año siguiente a la pérdida de la pareja es un momento en el cual se incrementa la vulnerabilidad y el riesgo de padecer enfermedades.”</p>
            <p>Este proceso, señala Chávez, se vive diferente en cada persona porque está determinado por muchos factores: lo que se aprendió de la muerte, la fortaleza y cercanía del vínculo con esa persona, entre otras cosas. Sin embargo, agrega, nuestra cultura no está preparada para hablar de muerte porque es un tema que no se aborda ni siquiera dentro de la familia. Si no hay un trabajo con relación a la muerte, cuando se vive este proceso el shock puede ser de tal magnitud que la persona se cierra y no sabe cómo actuar, ni qué decir. Por ello, añade, es necesario platicar sobre la muerte; para trabajar qué pasaría, qué se necesitaría y cómo se sentiría cada miembro de la familia.</p>
        </div> <!-- end s-content__main -->

        <!-- Ensayo fotográfico Alicia: No estoy sola -->
        <div class="s-content__media col-full">
            <div class="s-content__slider slider">
                <div class="slider__slides">
                    @include('layouts.galleryImg', ['url' => asset('images/Alicia/3.svg')])
                    @include('layouts.galleryImg', ['url' => asset('images/Alicia/2.svg')])
                </div>
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <p>Doña Alicia se empeña en mirar lo bueno que le rodea. Por ello, explota sus talentos: teje ropa para el frío, pinta cuadros y borda en punto de cruz. Aprendió desde joven y ha perfeccionado sus técnicas en la <a href="http://www.difestatal.puebla.gob.mx/estancias.php">Casa del Abue</a>, lugar que tiene un significado grande en su vida porque ahí ha conocido amigas y tiene pasatiempos fuera de casa. </p>
            <p>Ella sigue ocupando el transporte público y aún puede moverse por sí misma dentro de la ciudad. Además, reconoce que a pesar de no ver a sus hijos el tiempo que quisiera, siempre está sostenida por ellos.</p>

            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection