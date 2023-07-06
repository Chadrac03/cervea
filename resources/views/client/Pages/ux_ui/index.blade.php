@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/mesure.png); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Ux / Ui
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Design UX/UI</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Visualisez les fonctionnalités que vous avez imaginées.
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" >DES MAQUETTES POUR VOTRE SOLUTION WEB ET/OU MOBILE</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Le développement d’une application web ou mobile passe par une phase préalable de conception, indispensable pour garantir le succès de sa réalisation. À l’issue, ou parfois en parallèle, de la phase de conception, nous créons les maquettes de votre application pour que ne subsiste aucun doute sur le travail à réaliser.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/pf-3.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">VOS ÉCRANS ADPATÉS À CHAQUE APPAREIL </strong></h4>
                        <p>Nos approches orientées utilisateurs vous garantissent les meilleures pratiques UX/UI et un excellent taux d’adoption de nos solutions par vos équipes, vos clients ou par vos fournisseurs.</p>
                        <p>Qu’il s’agisse d’une application web métier, d’une application mobile ou d’un outil digital, nous disposons d’experts UX attentifs au respect de l’approche orientée utilisateurs.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> UNE APPROCHE USER CENTRIC </strong></h4>
                        <p>Nous bénéficions d’une forte expertise sur les plateformes en temps réel, dotées de fonctions de géolocalisation ou non, axées sur le travail collaboratif ou la digitalisation de vos processus métier.</p>
                        <p>Nos experts vous apportent les meilleures solutions pour retranscrire votre vision fonctionnelle en solution performante, ergonomique et qui répond aux habitudes des utilisateurs, sur chaque appareil utilisé.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UN RÉSULTAT REMARQUABLE </strong></h4>
                        <p>Pour des solutions métiers impactantes, même sans intervention d’un designer, nos maquettes HF (haute fidélité) sauront répondre aux attentes esthétiques de vos utilisateurs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Innovation -->
<section class="section bg-dark border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container py-4">
        <div class="row mb-2 counters">
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" style="color: white;">UNE PLATEFORME ADAPTÉE À VOS UTILISATEURS ET À VOS BESOINS</h2>
                <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                    cervea vous accompagne dans la conception de vos applications web et mobiles. Une fois les fonctionnalités définies en ateliers de spécifications, une phase de maquettage haute fidélité prend le relais pour que ne subsiste aucun doute sur le travail à réaliser. Nos experts créent les maquettes de votre projet, avec tous les éléments prêts à être intégrés pour gagner du temps lors du développement de votre solution.
                </p>
            </div>
        </div>
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-7 pl-lg-5 text-center">
                <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"></strong></h2>
                <div class="row">
                    <div class="feature-box feature-box-style-2 ">
                        <div class="card border-0 border-radius-0 bg-grey py-4 px-3">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">NOTRE MÉTHODE D'ACCOMPAGNEMENT
                                    ET DE CONCEPTION GRAPHIQUE</h4>
                                <p class="card-text mt-3">
                                    Nous adaptons notre accompagnement à la typologie de vos projets. À partir de l’expression de besoins, et en fonction de la complexité du projet, nous pouvons proposer en parallèle ou en aval des spécifications fonctionnelles : des wireframes et/ou des maquettes semi-dynamiques.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-box feature-box-style-2  mt-3">
                        <div class="card border-0 border-radius-0 bg-grey py-4 px-3">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">WIREFRAMES</h4>
                                <p class="card-text mt-3">
                                    Nous proposons des wireframes de manière quasi systématique, notamment afin de gérer les aspects ergonomiques des applications que nous délivrons.
                                    Dans le cas où il s’agit d’une application mobile native, la démarche est également indispensable afin de gérer les différences ergonomiques des différents systèmes d’exploitation mobile. Ces wireframes vous permettent également de mieux visualiser la future application.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <div class="row pb-5 pb-lg-0 ml-3">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/ds.png') }}" alt="">
                </div>
                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="get-started text-center text-left">
                            <a href="{{ url('#') }}" class="btn btn-light btn-lg text-3 font-weight-semibold px-4 py-3"> brefiez nous</a>
                            {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="get-started text-center text-right">
                            <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-md text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                            {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 col-lg-12">
                <div class="feature-box feature-box-style-2 ">
                    <p class="text-1rem text-color-default negative-ls-05 pt-4 mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        À l’issue de chaque phase de développement faisant l’objet d’un livrable, nous réalisons les tests prévus dès la phase de conception : tests techniques (tests unitaires et d’intégration), tests fonctionnels (automatisés pour les fonctionnalités les plus utilisées et les plus critiques). Nous livrons ensuite l’application sur un environnement dit “de recette” qui vous permet de réaliser vos propres tests avant de lancer l’application “en production”.
                        Cette méthodologie éprouvée nous permet de vous délivrer un produit de qualité, qui répond intégralement à vos exigences. L’ensemble du code source de l’application vous appartient, y compris les composants réalisés par AxioCode et utilisés pour les besoins de votre application.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin INNOVATION -->


<section class="section bg-grey border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container py-4">
        <div class="row mb-2 counters">
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">GOUVERNANCE DE PROJET</h2>
            </div>
        </div>
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Comité de pilotage</h4>
                            <p class="card-text mt-3">
                                Nous préconisons la mise en place d’un Comité de Pilotage qui réunit les représentants du donneur d’ordres, de l’assistance à maîtrise d’ouvrage le cas échéant, et d’cervea (chargé de compte et chef de projet).
                                Le Comité de Pilotage assure la supervision du projet et prend les décisions nécessaires à sa bonne réalisation. Il se réunit à une fréquence adaptée au projet, en général toutes les 4 à 6 semaines. Il se déroule dans les locaux d’AxioCode ou en visioconférence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Comité de projet</h4>
                            <p class="card-text mt-3">
                                En complément des Comités de pilotage, lorsqu’un projet est en cours de réalisation, nous préconisons la mise en place d’un Comité de projet qui réunit chaque semaine les Chefs de projet du donneur d’ordre et d’cervea.
                                Les revues de projet hebdomadaires permettent de traiter des questions techniques, de faire le point sur les spécifications, l’avancement des travaux, les tests, …. Ces réunions se font généralement à distance, par téléphone ou en visioconférence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Environnement collaboratif</h4>
                            <p class="card-text mt-3">
                                Nous mettons en place un environnement GitLab. Cet espace de travail permet de gérer les échanges entre les équipes au quotidien.
                                GitLab offre également la possibilité de gérer l’intégralité des demandes de corrections ou de changements avec un historique de l’ensemble des échanges.
                            </p>
                            <a href="#" class="btn btn-primary btn-modern">contactez nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
    <div class="col-md-12 pl-md-5">
        <h2 class="font-weight-normal text-6 mb-3">PROTOTYPES ET MAQUETTES <strong class="font-weight-extra-bold">SEMI-DYNAMIQUES</strong></h2>
        <p class="text-4">
            Les prototypes en maquettes semi-dynamiques sont habituellement construits en parallèle des spécifications fonctionnelles détaillées, sur des projets souvent complexes. Ils sont réalisés en remplacement ou en complément des wireframes.
        </p>
        <p>
            Ces prototypes peuvent également servir d’éléments de « pré-test » lorsque nos clients les soumettent à un public de testeurs.
        </p>
        <p>cervea utilise différents outils de prototypage : Sketch, Marvel ainsi que des maquettes interactives en html pour ajouter encore plus de dynamisme au prototype.</p>
    </div>
</div>

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- telecharger cahier de charges -->
    @include('client.Sections.telecharger-ressource')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')


@endsection
