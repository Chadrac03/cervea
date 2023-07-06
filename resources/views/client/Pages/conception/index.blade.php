@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/C.png); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    conception
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">conception</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Passez du projet à la solution !
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">LA CONCEPTION, PHASE PRÉALABLE AU DÉVELOPPEMENT</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Que votre projet nécessite la réalisation d’un logiciel web ou d’une application mobile, nous confier votre projet, c’est vous assurer d’un rendu de très haute qualité.
                        Le développement d’une application web ou mobile passe par une phase préalable de conception, indispensable pour garantir le succès de sa réalisation. Nous échangeons avec vous lors d’ateliers de spécification et nous rédigeons les spécifications détaillées de votre application. Nous créons les maquettes haute fidélité de votre application pour que ne subsiste aucun doute sur le travail à réaliser.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p7.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE MÉTHODOLOGIE ÉPROUVÉE​</strong></h4>
                        <p>Notre méthodologie éprouvée, vous apporte une garantie absolue des aspects fonctionnels et techniques de votre projet et de respect des délais. </p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UN ACCOMPAGNEMENT ADAPTÉ À VOS BESOINS</strong></h4>
                        <p>Nous rédigeons pour vous les spécifications fonctionnelles et techniques qui deviendront les fondations de votre solution.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE APPROCHE ROISTE</strong></h4>
                        <p>Notre approche orientée résultat nous permet d’identifier rapidement les connexions possibles avec votre écosystème et d’en tirer le meilleur parti pour un meilleur retour sur investissement.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">NOTRE PARTI PRIS ?</strong></h4>
                        <p>
                            Des applications sur-mesure qui répondent à 100% de vos exigences.
                            Des applications web et mobiles de qualité, pérennes et au meilleur coût. Des applications mobiles natives qui vous permettent d’aller plus loin dans l’expérience utilisateur.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                    <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">brefiez nous</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un diagnostic</a>
                </div>
            </div> --}}
        </div>
    </section>


    <section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/pf-6.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">NOTRE MÉTHODE​</strong></h4>
                        <p>cervea préconise une méthodologie en 5 étapes qui s’appliquent à l’ensemble du projet ou se décline par lots ou par modules selon l’ampleur des travaux :</p>
                    </div>
                    <div class="row my-2">
                        <div class="accordion bg-grey" id="accordion12">
                            <div class="card card-default">
                                <div class="card-header" id="collap1">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps01" aria-expanded="true" aria-controls="collapse12One">
                                            SPÉCIFICATIONS FONCTIONNELLES
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps01" class="collapse show" aria-labelledby="collap1" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Nous rédigeons vos spécifications fonctionnelles détaillées pour ne laisser aucune place au hasard.
                                            Chaque parcours utilisateur y est référencé et scénarisé avec un parcours optimal, les incidents possibles et les enchaînements. Cette étape est réalisée par un Business Analyst sous forme d’ateliers auxquels vous participez pour garantir la vision métier.
                                        </p>

                                        <p class="mb-0">
                                            Chaque atelier de spécification, d’une durée de 2h30 environ, se tient dans nos bureaux ou à distance en visioconférence. À l’issue de chaque atelier, notre Business Analyst met en forme les spécifications pendant que, de votre côté, vous réfléchissez aux questions qui se sont posées et vous revoyez le travail déjà réalisé. C’est en général à l’issue de trois à cinq ateliers, espacés de trois à cinq jours, que ce travail aboutit à la livraison de vos spécifications détaillées.
                                        </p>

                                        <p class="mb-0">
                                            Nos business analysts sont certifiés en ingénierie des exigences (IREB). Nous utilisons Visual Paradigm et le langage de modélisation UML pour réaliser les spécifications fonctionnelles et modéliser le système à concevoir. Nous produisons les diagrammes UML les plus pertinents pour décrire les fonctionnalités du projet.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header" id="collap2">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps02" aria-expanded="false" aria-controls="collapse12Two">
                                            MAQUETTAGE HAUTE FIDÉLITÉ
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps02" class="collapse" aria-labelledby="collap2" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Nous créons ensuite les maquettes de votre application web ou mobile. Elles vous permettent de visualiser les choix fonctionnels et de valider l’ergonomie de l’application.
                                        </p>

                                        <p class="mb-0">
                                            Nous utilisons des outils qui permettent la reprise directe de ces maquettes en phase de développement, ce qui procure un gain de temps et de budget.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header" id="collap3">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps03" aria-expanded="false" aria-controls="collapse12Three">
                                            SPÉCIFICATIONS TECHNIQUES
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps03" class="collapse" aria-labelledby="collap3" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Nous réalisons enfin  les spécifications techniques qui définissent l’architecture de votre solution, les technologies mises en œuvre, les composants qui seront utilisés, les diagrammes de base de données, l’inventaire des éléments qui devront être codés, et les tests techniques (tests “unitaires”).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2">
                        <p>Cette méthodologie éprouvée nous permet de vous délivrer une application de qualité, qui répond à vos exigences. À l’issue des travaux de conception, la phase de développement sera lancée. À ce stade, il n’y a plus de doute sur ce qui doit être livré. La conception détaillée de votre solution logicielle vous apporte une garantie absolue des aspects fonctionnels et techniques de votre projet et de respect des délais. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

     <!-- Projet pleins d'innovation -->
     @include('client.Sections.section-projet')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

@endsection
