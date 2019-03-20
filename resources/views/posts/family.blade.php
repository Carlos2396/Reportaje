@extends('layouts.master')

@section('content')
<section class="s-content s-content--narrow s-content--no-padding-bottom">
    <article class="row format-standard">

        <div class="s-content__header col-full">
            <h1 class="s-content__header-title">
                <h2 class="s-content__header-title">Capítulo 2</h2>
                <h1 class="s-content__header-title">{{ $current->title }}</h1>
            </h1>
        </div> <!-- end s-content__header -->

        <div class="s-content__media col-full">
            <div class="s-content__post-thumb">
                <embed src="{{ asset('images/family.svg') }}" 
                     srcset="{{ asset('images/family.svg')}} 2000w, 
                             {{ asset('images/family.svg')}} 1000w, 
                             {{ asset('images/family.svg')}} 500w" 
                     sizes="(max-width: 2000px) 100vw, 2000px" alt="" >
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">

            <p>Los adultos mayores son visibles en los susurros sabios, en las oraciones más sinceras, en su andar pausado los domingos por el centro de la ciudad. De hecho, de acuerdo con el INEGI, para 2017, en tres de cada diez hogares mexicanos había, por lo menos, un adulto mayor.</p>
            <p>Chávez afirma que estadísticamente la conformación de las familias ha cambiado. Anteriormente, en los años setentas, las familias tenían entre seis y siete hijos, mientras que en la actualidad las familias tienen uno o dos hijos, lo que significa una reducción en la red social del adulto mayor.</p> 
            
            <p>Don Rafael es un hombre noble y comprensivo, su prudencia lo hace guardar silencio y ser empático. A los 12 años, su vida tuvo un giro drástico cuando perdió a su madre, y su padre decidió rehacer su vida, situación que lo orilló a trabajar para ayudar con la manutención de sus cuatro hermanos. Durante casi dos décadas, don Rafael laboró en una empresa de logística y, a pesar de sólo tener educación básica, llegó a ocupar un puesto gerencial.</p> 
            <p>Cuando cumplió 22 años decidió formar su propia familia con Martha, a quien conocía desde la infancia. Tuvieron nueve hijos, 17 nietos y siete bisnietos. Ahora, a sus 86 años vive con su hija Silvia, y Pablito, su nieto. Sin embargo, a pesar de estar acompañado, se siente solo.</p>
            <p>Su primera sensación de soledad apareció cuando Martha murió en 2005, un año antes de celebrar sus bodas de oro. Don Rafa tuvo que acostumbrarse a dormir con un vacío en la cama y a comer en una mesa de seis sillas con cinco desocupadas la mayor parte del tiempo; a no escuchar más al amor de su vida, ni a los canarios que murieron semanas después del velorio.</p>
            <p>El pesar estuvo por varios meses. Su casa se volvió más fría, parecía que había perdido luz y color, pero don Rafa siempre tuvo una cosa muy clara: “quiero ser, por todo el tiempo posible, el padre de mis hijos y no una carga”. Así que aprendió a lavar, planchar, cocinar, a caminar sin alguien de la mano y viajar en su Volkswagen 96 con un vacío en el asiento de al lado. Todo parecía marchar sin contratiempos hasta que, un día, sus reflejos, paciencia y vista dejaron de ser los de ‘siempre’.</p> 
            <p>En 2015, apareció un dolor punzante en la espalda baja que día con día se hizo más fuerte. El diagnóstico no era bueno, algunas vértebras de la columna se estaban comprimiendo entre sí y era necesaria una operación. Todo resultó bien y a pesar de que la recuperación fue tardada, meses después ya estaba de nuevo practicando una de sus pasiones: el alpinismo.</p>
            <p>Sus hijos se reunieron después de estos sucesos y tras horas de diálogo, decidieron que don Rafa ya no debía quedarse solo o, al menos, no dormir solo. Así comenzaron a acompañarlo por turnos durante la noche; de los nueve hijos, siete accedieron y un día de la semana iban a dormir con don Rafael. Esta dinámica no duró mucho tiempo, las situaciones familiares y la disposición hicieron que algunos dejaran de cumplir y que los restantes se sintieran desmotivados para seguir haciéndolo. Comenzaron las peleas y disgustos, hasta que una de las hijas decidió hacerse cargo.</p>
            <p>Leticia y sus dos hijas se fueron a vivir con él por más de un año hasta que un día Silvia llegó con Pablito y las tres primeras, decidieron partir. Durante este tiempo, si bien don Rafael está acompañado por alguien más; la sensación de soledad se presenta de vez en cuando, pues los momentos de convivencia suelen ser antes de dormir y durante algunas comidas.</p>
            <p> Don Rafael ha vivido situaciones diversas en relación a la convivencia familiar. Durante once años estuvo solo, convivió poco con parte de su familia y se llegó a sentir olvidado. También, llegó el momento de nuevamente vivir acompañado de sus hijos, quienes tomaron esa decisión con el fin de protegerlo; sin embargo, la ausencia de algunos por diez años, hizo que la convivencia requiriera de adaptación, porque compartir espacios, tiempos y la vida en general fue un nuevo comienzo.</p> 
            
            <h2>Esa historia ya me la contaste diez veces</h2>
            <p>Don Rafa es único, pero parecido a otros adultos mayores. Conversa mucho. Sus temas favoritos son las hazañas donde él es protagonista, héroe o simplemente feliz; cuando amanece con la melancolía encima, platica de los problemas que le afligen y le quitan el sueño porque incluyen a sus seres queridos. Tiene un dolor por aquí, experiencias por allá, sabiduría, anhelos y añoranzas.</p> 
            <p>Diciembre es el mes que más disfruta porque ve a la familia reunida y los lugares del comedor están ocupados por aquellos que ama. Además, le gusta decir el brindis en Navidad y abrir la botella de sidra en Año Nuevo.</p> 
            
            <!-- Historia/ ilustración brindis en cena de navidad -->
            
            <p>Estas reacciones sobre lo que los adultos mayores dicen, visibilizan, como explica la psicogerontóloga María Fernanda Herrera Delgado, una desvalorización. Los jóvenes suelen creer que el adulto mayor no sabe, no entiende, no puede o que está desfasado porque son otros tiempos; situación que puede inducir al adulto mayor a dejar de comunicarse.</p>
            <p>En este sentido, la repetición de historias es común y proviene del gusto por platicar de su época, es decir, de lo que ya pasó. La psicogerontóloga Adriana Ramayo Romero añade que esto puede generar como joven desinterés, hartazgo e, incluso, expresiones como “¡Ay esa historia ya me la contaste diez veces!”, pero en términos psicológicos, la repetición de historias pasadas por parte del adulto mayor puede deberse a dos causas: emocionales o fisiológicas.</p>
            <p>Sobre la primera, señala que remite a la añoranza, la cual se manifiesta como consuelo por estar mucho tiempo en casa solos y con actividades monótonas; mientras que sobre la segunda, se podría deber a la demencia, común en edades avanzadas por deterioro cognitivo; que genera olvido en su memoria reciente y provoca que recordar lo que hicieron hace 20, 30 o 40 años, sea más fácil.</p>
            <p>La OMS señala que el tener más para recordar puede ayudar a las personas mayores a tomar mejores decisiones. Citando un <a href="https://academic.oup.com/psychsocgerontology/article/58/1/P3/566180">estudio realizado por la Universidad de Oxford</a>, indica que sensibilizar a los adultos mayores con un recuerdo positivo hacía que identificaran estrategias de memorización eficaces, es decir, cuando estos comparten sus mejores experiencias, están ejercitando su memoria y su mente.</p>
            <p>Ellos antes de ser adultos mayores, son personas, individuos que buscan interacciones significativas, conversaciones donde sus palabras sean valiosas, motivación en lo que escuchan y convivencia donde se sientan en igualdad con sus interlocutores. Alguna vez trabajaron, tuvieron que hacerse cargo de hijos, de cuentas y del hogar; pueden entender lo que los jóvenes viven y además, tienen la capacidad de aportar conocimientos y experiencias.</p> 
            <p>Los adultos mayores pueden notar los cambios que traen consigo los años, cómo las personas cambian con ellos y el deterioro de sus relaciones. “A mí me entristece que ya no sea como antes; que con mis hijos todo se está alejando, la gente se aleja de las personas de edad; mis nietos ya no vienen” -expresa entristecido Don Rafa- “Piensan que no se les habla porque estás molesto, porque ya no te da, porque ya no te apoya, porque ya no te enseña, y en realidad no es así. Yo sé que están ocupados, que tienen trabajo y sus propios problemas, en realidad no hablo porque no sé cuándo es el momento adecuado, porque no quiero molestar”</p>
            <p>El no saber cuándo, cómo, dónde o simplemente qué expresar, son problemas que dificultan la comunicación. Cuando se desarrollan este tipo de barreras en la interacción, se genera una espiral interminable, donde la culpa da pie a reproches y la incomodidad lleva al aislamiento.</p>
            <p>La interacción es indispensable para llegar al bienestar. Somos seres sociales y por lo tanto necesitamos del otro, pero no del otro igual, sino de todos los otros. Es decir, necesitamos convivir con personas distintas; que tengan visiones y experiencias que enriquezcan lo que ya conocemos y nos enseñen lo desconocido; porque es en lo extraño donde podemos encontrar lo que nos hace falta.</p>
            <p>Los adultos mayores parecieran estar alejados del mundo más joven, porque no van tan rápido, porque no siguen pantallas líquidas, ni son tan flexibles en sus ideales, “Creen que uno ya no puede, que uno ya no debe; le hacen sentir a uno que no tiene carácter” añade don Rafa con voz conflictuada. Este problema tiene lugar porque como jóvenes muchas veces no se comprende que en la divergencia está la posibilidad de construir puentes y puntos de encuentro intergeneracionales.</p> 
            <p>A don Rafa le gusta explicar, enseñar y compartir lo que sabe. “Me entristece que algunos de mis nietos no se acercan para aprender cosas que podría enseñarles. No quiero que sean iguales que yo, ni que hagan lo mismo. Pero si has enseñado a otras personas, cuanto y más no harías por tu familia”.</p>
            <p>Como cualquiera de sus nietos, él también tiene pasiones que mueven su ser. Una de ellas es el canto. Desde joven ha formado parte de diferentes coros, el último de ellos, el Sinfónico de la BUAP, donde ensaya tres veces por semana y le ha permitido cantar al lado del tenor Fernando de la Mora, Los Ángeles Azules y Marc Martel, quien hiciera la voz de Freddie Mercury en la película Bohemian Rhapsody. Esto se ha convertido en una motivación en su vida y, junto con el alpinismo, le ha permitido ser fuente de inspiración para muchas personas que lo conocen. En este sentido, terceros tienen expresiones y mensajes que hacen sentir a don Rafael reconocido, presente y valioso.</p> 
            <p>En esa entereza inquebrantable don Rafa reconoce que necesita de su familia, platicar, alguien a quien acudir, enseñar, aprender, necesita con quien convivir. “La vida es convivencia y por eso precisamos retroalimentación, diálogo. Quiero estar presente en la mente de las personas, [...] Aunque entiendo su situación aún anhelo que mis hijos y nietos vengan, que los ausentes tengan atenciones” finaliza don Rafael.</p>
            <p>El acompañamiento a un adulto mayor, no se agota en el acompañamiento físico y estar “veinticuatro-siete” con ellos, sino a tener relaciones comunicativas basadas en disposición, apertura, calidad y resonancia. Es tenerle presente y ser presencia.</p>
            
            <h2>El abuelo tiene novia: rompiendo estereotipos</h2>

        </div>
        
        <!-- Ensayo fotográfico Alicia: No estoy sola -->
        <div class="s-content__media col-full">
            <div class="s-content__slider slider">
                <div class="slider__slides">
                    @include('layouts.galleryImg', ['url' => asset('images/Pedro/1.svg')])
                    @include('layouts.galleryImg', ['url' => asset('images/Pedro/2.svg')])
                    @include('layouts.galleryImg', ['url' => asset('images/Pedro/3.svg')])
                    @include('layouts.galleryImg', ['url' => asset('images/Pedro/4.svg')])
                </div>
            </div>
        </div> <!-- end s-content__media -->

        <div class="col-full s-content__main">
            <p>Don Pedro es un hombre callado, la prudencia y la seguridad lo caracterizan. Fue hijo único de madre soltera y cuando formó su propia familia decidió, junto a su esposa Elena, tener ocho hijos. En su juventud fue un hombre de trabajo constante y entrega a su familia.</p>
            <p>Actualmente tiene 89 años y aún disfruta de estar activo: lee el periódico diario, limpia la cocina, ayuda a pelar verdura para hacer de comer y lava su ropa. Vive con su hijo mayor, Gerardo y come todos los días con su hija Maricarmen y su nieto Alberto.</p> 
            <p>Gusta de ir a la iglesia: los domingos por la mañana a misa y los jueves por la tarde a la hora santa.  Sale de casa con quince minutos de antelación para caminar a su parroquia, lugar que tiene un significado especial para él, no sólo porque ahí es donde pide ayuda y encuentra consuelo, sino porque ahí encontró una gran motivación para su vida.</p> 
            <p>Hace cinco años se dio cuenta de que una mujer tenía hábitos parecidos a los suyos, asistía a la iglesia los domingos y los jueves. De verla sentada a lo lejos, nació el interés de conocerla y entonces se acercó.</p> 
            <p>Don Pedro recuerda haberle dicho “la he visto varias veces en la iglesia y quiero saber si quiere salir conmigo”. Doña Imelda, sin pensarlo dos veces, respondió con un rotundo no, argumentando que ella no quería nada serio. Sin embargo, don Pedro no se dio por vencido e insistió en que salieran a tomar un café, explicándole que sólo sería para conocerse. Entonces, después de varias invitaciones, salieron por primera vez.</p> 
            <p>Doña Imelda, su nueva amiga, le dijo que se vieran en la iglesia y don Pedro accedió. Cuando le tocó el claxon para recogerlo, Pedro se llevó una gran sorpresa al ver que Imelda manejaba, subió al auto y fueron a tomar su primer café juntos.</p>
            <p>Después de salir por varias ocasiones y darse cuenta de las similitudes entre ellos, comenzaron a hacerse más cercanos, a ir a fiestas juntos, conocer a sus respectivas familias e incluso, viajar a otros lados. Así, construyeron nuevas anécdotas.</p>
            <p>La forma en que contó don Pedro el siguiente recuerdo hizo parecer que había sucedido un día antes. Ese domingo quisieron salir de la rutina y decidieron ir a caminar más lejos del centro de la ciudad, entonces fueron a los Fuertes de Loreto y Guadalupe. Estacionaron el auto y caminaron por varias horas, sin embargo, cuando quisieron marcharse se dieron cuenta de que ya no recordaban dónde habían dejado el auto. Doña Imelda le dijo que no se preocupara, que mandaría a su hijo a buscarlo y mientras, don Pedro estaba lleno de angustia. En ese momento, explica don Pedro “me di cuenta de lo relajada que era”.</p> 
            <p>Cuenta que comenzó a comprarse más ropa, a salir más seguido y a sonreír de manera constante. A pesar de estar más motivado, la aceptación de sus hijos no fue generalizada, porque algunos consideraron que ya no era el momento adecuado.</p> 
            <p>Sobre la apertura a las actividades y aspiraciones de los adultos mayores la médico general Verónica Domínguez Luqueño explica que es necesario quitar estereotipos sobre los adultos mayores pues llevan a creer que no pueden hacer nada. Añade que pensar diferente hacia la vejez puede empoderar a los adultos mayores y darles pauta para que hagan otras cosas.</p> 
            <p>El Instituto Nacional contra la Discriminación, la Xenofobia y el Racismo (Inadi) de Argentina explica en el documento <a href="http://www.inadi.gob.ar/contenidos-digitales/wp-content/uploads/2017/06/Discriminacion-por-Edad-Vejez-Estereotipos-y-Prejuicios-FINAL.pdf">Discriminación por Edad, Vejez, Estereotipos y Prejuicios</a> que</p>
            <p><blockquote>Existen prejuicios, estereotipos y mitos respecto de la vejez que afectan a las personas mayores. Son producto de una construcción social que condiciona a las personas involucradas y a su entorno en términos de profecía autocumplida. [...]  Los discursos sociales son internalizados a lo largo de la vida, dando origen a estereotipos y prejuicios que son la base de las prácticas discriminatorias. Las creencias y expectativas que la sociedad tiene sobre el envejecimiento influyen en el comportamiento y la concepción que las personas mayores tienen sobre sí mismas, sobre sus propias capacidades y su autonomía, pudiendo contribuir en la construcción de una imagen desvalorizada y negativa.</blockquote></p> 
            <p>Si bien don Pedro ha decidido continuar con su relación a pesar de los comentarios e inconformidades de algunos de sus hijos, la situación que se presenta está relacionada con una serie de prejuicios y estereotipos ante las personas de edad avanzada. Estas actitudes reflejan la forma en que son vistas las relaciones en personas de la tercera edad, donde solo se permiten y aprueban aquellas que se ajustan a las nociones, expectativas y roles para esta etapa del ciclo de vida.</p>
            <p>A diferencia de lo que usualmente se cree, los adultos mayores no se desvinculan, ni dejan de ser activos al entrar a edades avanzadas, tal como señala el Inadi: “las personas adultas mayores deben permanecer activas, y en contacto con el entorno, sus afectos y actividades todo el tiempo que sea posible. Es importante, también, que puedan aceptar y elaborar las pérdidas, restricciones, limitaciones para expresar sus potencialidades y habilidades. En este sentido, podemos hablar de un envejecimiento activo, concepto incorporado por la OMS,25 que remite al proceso de optimizar oportunidades para mejorar la calidad de vida.”</p>     
            
            <!-- Audio don Pedro ¿Qué lo motivó a tener pareja y no hacer caso a las inconformidades? -->

            @include('layouts.chapter-nav')

        </div> <!-- end s-content__main -->

    </article>
</section> <!-- s-content -->

@endsection