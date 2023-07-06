@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/continu.jpg); background-size: cover; background-position: center; height: 500px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    app-mobile
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Application mobile disponible en continu</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Votre solution mobile sur-mesure disponible même sans réseau mobile</p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">VOTRE APPLICATION MÉTIER ACCESSIBLE PARTOUT MÊME SANS RÉSEAU ! </h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">Travaillez à distance et hors ligne quand vous en avez besoin (même en plein champ).
                        Avec une application disponible en continu, vos collaborateurs bénéficient d’une grande mobilité.
                        L’accès et la synchronisation hors ligne, grâce à une application mobile permettent à vos équipes de travailler quelque soit l’endroit où elles se trouvent.
                        Le secteur agricole, le bâtiment, la distribution d’énergie sont particulièrement concernés par les applications disponibles en continu. De manière générale, toutes les professions mobiles sont amenées à rencontrer des zones sans connexion internet pouvant nuire à leur productivité. La solution ?</p>
                    <p>
                        Bénéficiez de toute l’expertise d’cervea en nous confiant la conception et le développement de votre application mobile sur-mesure.
                        Votre application mobile est disponible en permanence, même sans couverture réseau ou connexion à Internet
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/dev-mobi.png') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UN LOGICIEL 100% ADAPTÉ À VOS BESOINS</strong></h4>
                        <p>Bénéficiez de toute l’expertise d’cervea en nous confiant la conception et le développement de votre application mobile sur-mesure disponible en continu. Nous développons votre application en fonction de vos enjeux business et de vos contraintes métier, nous saurons vous apporter la meilleure solution.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">LA PRODUCTIVITÉ OÙ QUE VOUS SOYEZ</strong></h4>
                        <p>Nous avons développé pour Syngenta l’application Proximaïs iTech en remplacement d’un logiciel obsolète. Cette application disponible hors connexion,  accompagne les conseillers dans les cultures pour identifier rapidement les produits à utiliser pour lutter contre les plantes invasives présentes sur une parcelle agricole. </p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE APPLICATION DISPONIBLE EN PERMANENCE</strong></h4>
                        <p>Peu importe l’endroit où vous vous trouvez et la qualité du réseau, bénéficiez de toutes les fonctionnalités indispensables à votre besoin métier. Continuer à travailler avec votre application métier même lorsque le réseau n’est pas disponible.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                    <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">brefiez nous</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un diagnostic</a>
                </div>
            </div>
        </div>
    </section>

    <!-- securiser les interventions -->
    <section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-7 pr-lg-5">
                    {{-- <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">SOLUTION SUR-MESURE</strong></h2>
                    <p>CRÉER UNE SOLUTION MÉTIER SUR-MESURE POUR VOTRE ENTREPRISE</p> --}}
                    <div class="row pt-4 my-5">
                        <div class="col-md-12 col-lg-12">
                            <div class="feature-box feature-box-style-2 mb-4">
                                <div class="feature-box-icon">
                                    <i class="icons icon-support text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-bold text-4 mb-0">DIGITALISER SES PROCESSUS MÉTIER AVEC UNE APPLI DISPONIBLE EN CONTINU</h4>
                                    <p class="mb-4">
                                        cervea s’adapte à vos besoins uniques pour créer l’outil qui vous aidera à atteindre vos objectifs. Que vous souhaitiez améliorer vos communications internes, votre support client ou répondre à un nouveau besoin métier, nous vous accompagnons dans la création de vos applications web et mobiles.
                                    </p>
                                    <p>
                                        cervea vous accompagne à travers la mise en place de solutions logicielles web ou d’applications mobiles sur mesure (logiciels métiers, applications d’intervention terrain, plateformes de mise en relation, solution de gestion de la relation client, système de planification automatisé, système de géolocalisation, …). De la conception à la maintenance de votre solution, en passant par le choix des technologies et le développement de vos outils, nos équipes vous conseillent dans le développement de votre projet sur-mesure.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/pf-3.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Securiser les interventions -->

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

    @include('client.Sections.autres-solutions')

@endsection
