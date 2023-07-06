@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/dev-2.png); background-size: cover; background-position: center; height: 500px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    moderniser
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Moderniser une application web ou mobile</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        <div class="container">
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">MODERNISATION DE LOGICIELS WEB ET D’APPLICATIONS MOBILES</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        cervea vous accompagne dans la modernisation et la refonte de vos applications, de la définition de votre stratégie digitale à la maintenance de vos solutions.
                        Nos analyses, nos audits et notre vision vous permettent de disposer de paramètres complémentaires d’aide à la décision. Nous vous apportons les éléments essentiels à la réussite de vos projets digitaux et de vos applications professionnelles.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-dark border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="col-lg-10 text-center offset-lg-1 pt-4">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" style="color: white;" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}"> POURQUOI MODERNISER UNE APPLICATION ?</h2>
            </div>

            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/test.png') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <p>
                        La modernisation des applications professionnelles web ou mobiles répond à des besoins variés.
                    </p>
                    <div class="row my-2">
                        <p>En général, les besoins suivants sont cités : </p>
                        <ul>
                            <li>Tirer parti de nouvelles technologies.</li>
                            <li>Répondre à de nouveaux besoins métiers et utilisateurs. </li>
                            <li>Améliorer le retour sur investissement (ROI) et réduire les coûts : stimuler la rapidité d’exécution en automatisant certaines tâches, simplifier le travail et accélérer les processus. Gagner en efficacité et en flexibilité.</li>
                            <li>Améliorer l’ergonomie et donner une apparence plus moderne à l’application : une solution plus fonctionnelle et réactive qui répond aux principes de l’UX/UI.</li>
                            <li>Pérenniser l’application, réduire son obsolescence.</li>
                            <li>Améliorer la sécurité du système d’information.</li>
                            <li>Avoir un système d’information cohérent, moderne et durable.</li>
                            <li>Conserver ou apporter de la valeur au portefeuille applicatif de l’entreprise.</li>
                        </ul>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ url('contact') }}" class="btn btn-primary rounded-0 mt-2">brefiez nous</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section bg-grey border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container mt-3">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/fr1.png') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <h3 class="font-weight-bold text-9 mb-0 appear-animation pb-2 mb-3" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}"> UNE REFONTE APPLICATIVE DURABLE</h3>
                    <div class="row my-2 pt-4">
                        <p>
                            cervea vous accompagne dans la refonte de votre application. Depuis l’audit de l’application existante jusqu’à la réalisation de sa refonte et sa maintenance. Une équipe projet est dédiée à la refonte de votre application : conseils, accompagnement stratégique, développement et suivi de l’application dans la durée.
                        </p>

                        <p>
                            Notre mission est de vous assurer une refonte applicative durable et de qualité.
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
                            <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un diagnostic</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="col-lg-10 text-center offset-lg-1 pt-4 mt-3">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">OPTIMISER LES APPLICATIONS WEB OU MOBILES</h2>
            </div>

            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-7 pl-lg-5">
                    <p>
                        Lorsque nous modernisons une application, cela revient à l’optimiser par des évolutions fonctionnelles, technologiques, structurelles. Que le souhait d’évolution soit motivé par l’usage de nouvelles technologies qui seront profitables à votre activité, par une amélioration de la performance ou la réduction des coûts de maintenance, votre application a un vécu et doit être étudiée pour bien aborder sa modernisation, étape par étape.
                    </p>

                    <p>
                        Il est important de réaliser un diagnostic de l’application pour s’assurer que son état actuel est compatible avec vos projets d’évolutions.
                    </p>

                    <div class="row my-2">
                        <p>Faites en autonomie un premier diagnostic rapide de votre application. Utilisez notre service gratuit de diagnostic dédié aux applications métier web et mobiles. Vous obtiendrez un rapport de diagnostic de votre application basé sur des scores d’obsolescence. Le questionnaire est simple et ne requiert pas de compétences techniques. Il ne vous demande que quelques minutes.</p>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">faire un diagnostic en autonomie</a>
                        </div>
                    </div>

                    <div class="row my-2">
                        <p>Ce diagnostic et les recommandations qui y sont associées vous donneront un état de la situation et les pistes à creuser pour mener l’audit de votre application.</p>
                    </div>
                </div>
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p7.jpg') }}" alt="">
                </div>
            </div>

        </div>
    </section>

    <section class="section bg-dark border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation py-4" style="color: white;" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">
                    MODERNISER SEREINEMENT VOS APPLICATIONS
                </h2>

                <p>
                    Lorsqu’une application existante pose problème, l’audit applicatif permet de débloquer des situations parfois complexes et laborieuses. Il permet à l’entreprise de reprendre le contrôle sur l’application et ses investissements. AxioCode vous propose un accompagnement et une méthode efficace pour aborder sereinement les évolutions de vos outils digitaux.
                </p>
            </div>

            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-7 pl-lg-5">
                    <h3 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">
                        AUDIT APPLICATIF : PREMIÈRE ÉTAPE DE LA MODERNISATION
                    </h3>
                    <p>
                        Faire évoluer une application existante en solution moderne nécessite une connaissance précise de l’état de l’application. Par exemple, une question qui se pose souvent : “les technologies utilisées sont-elles compatibles avec les projets d’évolution ?”. L’application existante et plus particulièrement les technologies utilisées ont un cycle de vie auquel il faut être attentif. Certaines technologies deviennent obsolètes et peuvent créer des failles de sécurité, des problèmes fonctionnels, des bugs.
                    </p>

                    <p>
                        cervea a mis en place une méthode éprouvée qui permet d’accélérer la modernisation de vos outils numériques. La réalisation d’un audit nécessite certes un peu de temps pour dresser un état détaillé de l’application, mais cela vous permet de gagner du temps lors de la refonte applicative. L’analyse et l’audit de l’application permettent donc de bien préparer les évolutions.
                    </p>

                    <div class="row my-2">
                        <p>Le rapport d’audit se traduit par des indicateurs simples et chiffrés. Il permet de cibler les corrections à apporter, d’évaluer sereinement les possibilités d’évolution de l’application et de définir une feuille de route claire et précise.</p>
                    </div>
                </div>
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/dev-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    @include('client.Sections.moderniser-application')

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

     <!-- Projet pleins d'innovation -->
     @include('client.Sections.section-projet')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

@endsection
