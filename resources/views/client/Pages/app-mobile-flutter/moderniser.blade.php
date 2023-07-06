@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(img/slides/slide-corporate-2-1.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Modernisez une application mobile avec flutter </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Soyez au cœur de la concrétisation de votre solution.
                                </p>
                                {{-- <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End banner -->
    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" >MODERNISER SON APPLICATION </h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Votre application métier (logiciel web ou application mobile) devient problématique à maintenir sur vos différentes plateformes. Elle vous coûte plus cher qu’elle ne vous rapporte en productivité ? C’est qu’il est temps de la  moderniser via une solution cross plateforme. C’est ce que promet Flutter, le framework développé par Google.
                        Nous verrons dans cet article :
                        <ul class="text-1rem text-color-default negative-ls-05 text-left">
                            <li> Les signes d’alertes qui mènent à la modernisation d’un système applicatif. </li>
                            <li> Ce que peut vous apporter l’utilisation d’un langage cross plateforme. </li>
                            <li> Et enfin comment s’opère la modernisation d’une application métier avec Flutter. </li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row counters">
                <div class="col-lg-12 text-center">
                    <div class="accordion" id="accordion12">
                        <div class="card card-default">
                            <div class="card-header" id="collapse12HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse12One" aria-expanded="true" aria-controls="collapse12One">
                                       Sommaire
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12One" class="collapse show" aria-labelledby="collapse12HeadingOne" data-parent="#accordion12">
                                <div class="card-body">
                                    <p class="mb-0">
                                        <ul class="text-1rem text-color-default negative-ls-05 text-left">
                                            <li> Pourquoi moderniser : Les signes d’alerte </li>
                                            <li> Flutter : les avantages du langage cross plateforme </li>
                                            <li> Comment fonctionne Flutter ?</li>
                                            <li> Comment se déroule la modernisation d'une application métier avec Flutter ? </li>
                                            <li> Conclusion  </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">POURQUOI MODERNISER : <strong class="font-weight-extra-bold"> LES SIGNES D’ALERTE </strong></h2>

            <p class="text-4">
                Le principe d’une application métier est qu’à travers la digitalisation de vos processus métiers, vous profitez d’une productivité optimisée de vos collaborateurs et de votre entreprise. Une application ou plateforme d’entreprise permet à terme de bénéficier d’un avantage concurrentiel clé face à vos concurrents.
            </p>

            <p>
                Au quotidien, votre solution logicielle doit vous simplifier la vie et vous faire gagner en performance, et non l’inverse. Si vous avez des problématiques récurrentes qui freinent les évolutions de vos applications web et mobiles, il est temps de faire le point.
                Voici les problématiques qui doivent vous alerter pour moderniser votre application.
            </p>

            <h4> LA MAINTENANCE EST PROBLÉMATIQUE </h4>
            <p>
                Il est normal de faire des maintenances. Elles peuvent être correctives, c’est-à-dire traiter des bugs et corriger des dysfonctionnements de manière générale, ou évolutives avec l’ajout de nouvelles fonctionnalités. Cependant,  si votre application devient difficile à maintenir, cela peut être le signe que votre application est de mauvaise qualité.
            </p>
            <p>
                Les situations qui doivent vous alerter lors de la maintenance :
                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Les demandes d’évolutions sont difficiles à mettre en œuvre </li>
                    <li> L’ajout de fonctionnalité est lent </li>
                    <li> Les performances se dégradent </li>
                    <li> Les bugs et dysfonctionnements sont imprévisibles </li>
                </ul>
            </p>
            <p>
                Ceci ouvre la voie à l’enchevêtrement de points de douleurs : vos utilisateurs sont mécontents, vos frais de maintenance explosent, ou encore la coordination de vos équipes de développement réparties sur les différentes technologies devient laborieuse…
            </p>

            <h4> LES TECHNOLOGIES SONT PROBLÉMATIQUES OU OBSOLÈTES </h4>
            <p>
                Dans le monde numérique, les tendances et technologies évoluent très vite. En moyenne, ce qui est admis aujourd’hui ne l’est généralement plus au bout de deux ans. Si une entreprise ne fait que repousser la révision de son application, elle risque des incompatibilités liées à de nouvelles mises à jour et surtout des risques de cybersécurité.
            </p>
            <p>
                Concrètement, cette insécurité se traduit en data breach, lorsqu’il y a un vol de données à partir de failles présentes dans votre code. Ces failles, favorisées par l’obsolescence, se développent dans des composants, eux-mêmes obsolètes ou laissés à l’abandon. D’après le rapport de 2022 de Synopsys sur l’étude de la sécurité et des risques open source, cette présence, de composants obsolètes ou laissés à l’abandon, concerne 9 applications métiers sur 10 !
            </p>

            <h4> LES UTILISATEURS SE PLAIGNENT </h4>
            <p>
                Au quotidien, vous rencontrez des inconforts plus ou moins contraignants dans l’utilisation de votre application métier. Chose d’autant plus vérifiable auprès de vos collaborateurs et utilisateurs. Pour ne citer que ces exemples : votre application souffre de praticité ou bien d’une apparence qui manque de modernité.
            </p>

            <h4> LA DETTE TECHNIQUE </h4>
            <p>
                L’ensemble de ces éléments de douleur (risques accrus de failles de sécurité, indisponibilité aux mises à jour, complaintes…) sont des signaux qu’il faut procéder à la modernisation de votre application.
                Cette opération consistera à réduire (voire supprimer) la dette technique de votre application : le capital de problématiques qui porte préjudice à la pérennité de vos processus métiers. Cette dette sera plus ou moins pénalisante selon les niveaux de difficulté des situations suivantes :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Les technologies utilisées ne sont plus maintenues, obsolètes ou sur le point de le devenir </li>
                    <li> Vous n’êtes pas satisfait(e) des fonctionnalités de l’application </li>
                    <li> Vous devez incrémenter une fonctionnalité majeure, mais les technologies utilisées dans l’application posent problème </li>
                    <li> Les utilisateurs se plaignent de l’application </li>
                    <li> Les frais de maintenance sont démesurés ou augmentent fortement </li>
                    <li> L’application ne dispose pas de plans de tests automatisés </li>
                    <li> Les développeurs et/ou les compétences nécessaires ne sont plus disponibles </li>
                    <li> L’application a des problèmes de conception importants </li>
                </ul>

                Pour se faire une idée de l’état actuel  de votre application, nous mettons à disposition un diagnostic gratuit qui ne requiert aucune compétence technique particulière.
            </p>

            Pour réduire cette dette technique et regagner en compétitivité sur le plan numérique, vous pouvez moderniser votre application métier de plusieurs manières. Celle que nous recommandons le plus est de moderniser pas à pas. Elle consiste à amener le changement en plusieurs blocs (fonctionnels et/ou techniques) selon les actions à mener en priorité. Une façon de faire qui sera d’autant plus bénéfique dans le cadre d’une modernisation via la réécriture du code. Ce qui est sous-entendu lorsque l’on souhaite transposer son application d’un développement natif vers un développement multiplateforme, pour en finir avec les problèmes de transposabilité entre les environnements.
        </div>
    </div>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">FLUTTER : LES AVANTAGES DU LANGAGE <strong class="font-weight-extra-bold">CROSS PLATEFORME</strong></h2>

            <p class="text-4">
                Tout développement est conduit vers l’optimisation des tâches. C’est pourquoi il y a un objectif universellement partagé chez les développeurs : “build once, run everywhere” (coder une fois pour déployer sur toutes les plateformes). C’est le principe d’un langage de programmation multiplateforme comme celui de Flutter.
                Aux origines de l’élaboration de votre application métier, vous avez dû faire le choix entre un premier développement sur une première plateforme (Android, iOS ou Web), qui précède d’autres développements selon votre stratégie de déploiement sur les autres plateformes. Plusieurs codes sont alors développés, pour ne citer que Swift ou C+ pour iOS, Java et Kotlin pour Android.
            </p>

            <p>
                Avec Flutter, vous n’aurez qu’un seul code avec le même langage que ce soit pour n’importe quelle plateforme. La gestion des problèmes et la conduite du changement sont facilitées. Si l’envie vous prend de déployer votre application sur un énième environnement (exemple en application web) cela se fera facilement à partir du même code (avec les mêmes développeurs et les mêmes compétences techniques).
                Dans l’extrême majorité des projets de développement, il n’y aura plus besoin de code différent pour chaque environnement (iOS, Android, Windows, Mac, Linux, Google Fuchsia et web).
            </p>

            <p class="text-4">
                Voici une liste des avantages de Flutter :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Gain de temps assuré </li>
                    <li> Marge d’erreur de transposition supprimée </li>
                    <li> Temps de développement divisé et réduit à un seul exercice de codage plutôt que d’avoir un développement par environnement </li>
                    <li> Efforts de résolution de problèmes canalisés dans un seul univers plutôt qu’éparpillés par code natif </li>
                    <li> Besoin de spécialisation technique réduit à un seul langage de programmation (Flutter) plutôt que disséminé sur plusieurs (C#, C, C++, JavaScript, etc.) </li>
                </ul>

                Pour les développeurs, ce système centralisé offre un réel confort d’utilisation. La technologie Flutter ne reposant pas sur des navigateurs web ou des widgets natifs propres à chaque appareil, il utilise son propre moteur et générateur de widget. Un développeur pourra aisément passer d’une plateforme à une autre en travaillant sur une même interface utilisateur installée virtuellement.
            </p>


            <p>
                Enfin, pour terminer sur ce point, la version 3 de Flutter a été lancée en mai 2022. Depuis, plus de 400 000 applications ont été développées sur plusieurs centaines de millions d’appareils. C’est aujourd’hui un langage de programmation fiable, reposant sur l’open source. Avec à disposition une large documentation sur GitHub où vous retrouverez un ensemble de résolution de problèmes.
            </p>

            <h4>COMMENT FONCTIONNE FLUTTER ? </h4>
            <p class="text-4">
                À l’origine développé en 2015 sous le nom Sky, le principe de Flutter est de développer et de créer un seul code à destination de tous les types d’applications : iOS, Android, Windows, Mac, Linux, Google Fuchsia et web. C’est en cela que c’est un langage multiplateforme.
                Flutter est développé par Google avec C, C++, Dart et Skia (un moteur de rendu 2D), sur l’intention d’être en concurrence direct avec JavaScript. La majorité de ses composants sont implémentés par son propre système dans Dart. Framework, widgets, animations, etc. tout ceci est développé sur un langage orienté objet qui facilite les créations et modifications de code.
                <br>
                Flutter se base ainsi sur un framework avec :
                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Un moteur runtime portable qui met en œuvre les bibliothèques d’animations, de graphismes, de plugins, etc. et de compilation Dart.  </li>
                    <li> Une bibliothèque Fondation qui dispose de classes et de fonctions utiles à la construction d’applications, semblable au fonctionnement d’une API </li>
                    <li> Des widgets (boutons, conteneurs, animations…), spécifiques à Flutter, qui s’adaptent automatiquement à l’endroit exact où vous souhaitez sur votre application </li>
                </ul>

                Pour finir, à partir de Skia, Flutter permet le développement avec la visualisation directe. À partir de la même base de code, sur n’importe quel environnement, les composants de l’application (établi par widgets) donnent l’apparence en fonction de leur configuration et de leur état. Le navigateur n’a plus besoin de compiler le code au moment de l’exécution, il peut directement restituer l’application telle quelle.
                Si bien qu’à terme, cela permet une extrême agilité dans le développement d’applications métier et une économie de la charge de processeur.
            </p>
        </div>
    </div>


    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">COMMENT SE DÉROULE LA MODERNISATION D'UNE APPLICATION <strong class="font-weight-extra-bold"> MÉTIER AVEC FLUTTER ? </strong></h2>

            <p class="text-4">
                De manière générale, moderniser une application demande la réécriture (totale ou d’une partie) de son code. Et c’est cette réécriture qu’il faut aborder avec réflexion.
                On peut se demander quel framework utiliser pour la réécriture du code ? <br>
                Flutter sera la solution plébiscitée pour en finir avec les difficultés à maintenir de nombreuses applications développées pour les différentes plateformes. Elle l’est aussi pour en finir avec l’hétérogénéité d’expérience utilisateur selon que celui-ci soit sur Android ou iPhone. Dans une démarche d’économie RH,  Flutter permet aussi de concentrer les besoins de développeurs et compétences techniques sur un langage de programmation unique pour toutes les plateformes.
            </p>

            <p>
                Dans le cadre de cette réécriture via Flutter, il ne s’agirait pas d’un Big Bang nécessitant l’arrêt total de l’ancienne application. Chez cervea, nous préférons aborder la modernisation pas à pas : réécrire son code bloc par bloc, avec la priorisation des mises à jour à effectuer, de sorte à assurer une amélioration continue de son système, parce que cela évite :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> L’insatisfaction des utilisateurs qui pourraient se retrouver frustrés et perdus face à une application recréée à neuf </li>
                    <li> Un développement imprévisible  </li>
                    <li> Un budget dépassé  </li>
                </ul>

                L’utilisation de Flutter permet une réécriture de votre système applicatif de manière uniforme. Le développement est instantané pour toutes les plateformes déterminées. Vous n’aurez plus à coder en double (voire triple), avec l’ensemble des inconvénients de transposabilité que cela implique. Allié avec une méthode pas à pas, Flutter permet ainsi :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> De développer plus vite </li>
                    <li> De dépenser moins de ressources  </li>
                    <li> D’éviter les risques d’erreurs  </li>
                </ul>
            </p>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">CONCLUSION </h2>

            <p class="text-4">
                Moderniser une application métier s’impose lorsque celle-ci devient difficile à maintenir. L’avantage concurrentiel qu’elle doit vous faire gagner se brouille, les frais de maintenance explosent, ou encore l’expérience utilisateur est mise à mal à cause de bugs de transposition entre les différents environnements de vos versions d’applications ?
                Cette modernisation va passer par la réécriture, bloc par bloc, de votre code de sorte que vous n’ayez qu’un code unique qui s’appliquera pour toutes les plateformes nécessaires désirées (iOS, Android, Windows, Mac, Linux, Google Fuchsia et web). <br>
                Dans cette réécriture de code, AxioCode peut vous accompagner. Nos développeurs travaillent selon une méthodologie éprouvée de sorte à assurer une modernisation de logiciel métier optimale, rapide et qui respecte les budgets alloués.
                Si notre savoir-faire  vous intéresse et que vous avez un projet de logiciel web ou application mobile, ou que vous envisagez une modernisation et souhaitez être accompagné(e), vous pouvez nous contacter ici.
            </p>

            <div class="row text-center mt-4">
                <div class="col-md-12 col-lg-12">
                    <div class="get-started">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Contactez un de nos experts </a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client.Sections.derniers-articles')
@endsection
