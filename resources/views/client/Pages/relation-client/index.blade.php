@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/svd-3.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Relation Client
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Relation Client </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">En B2B ou B2C, nous vous apportons les meilleures solutions pour améliorer votre relation client :
                                    UX/UI, mise en place de chabots, de messages automatiques en fonction d’un contexte particulier, plateforme d’appels, de mise en relation avec un conseiller, etc.</p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">PERSONNALISEZ VOTRE RELATION CLIENT</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Un logiciel ou une application mobile de relation client doit parfaitement s’adapter aux spécificités de votre entreprise ? La relation client est au cœur de votre stratégie commerciale ? Développer un outil numérique efficace pour personnaliser la relation client vous permet de :
                    </p>
                    <ul class="text-1rem text-color-default negative-ls-05 text-left">
                        <li>mieux connaître et comprendre vos clients</li>
                        <li>répondre plus rapidement à leurs attentes et besoins spécifiques</li>
                        <li>proposer une expérience unique, personnalisée et qualitative qui vous démarque de la concurrence</li>
                        <li>personnaliser des offres et services</li>
                        <li>générer de nouvelles opportunités commerciales</li>
                        <li>convertir plus efficacement vos prospects en clients</li>
                        <li>développer votre communauté de clients et les fidéliser</li>
                        <li>faciliter votre communication auprès de vos clients et prospects</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p1.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> AUTOMATISEZ VOS PROCESSUS</strong></h4>
                        <p>En fonction d’un contexte particulier ou d’une action d’un collaborateur, automatisez l’envoi d’alertes, de notifications ou de messages. Déclenchez des processus automatiquement (facturation, par exemple) en fonction des messages émis par vos collaborateurs.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> AMÉLIOREZ VOTRE RELATION CLIENT </strong></h4>
                        <p>Votre plateforme connectée vous permet d’offrir une assistance 24/7 à vos clients ou vos contacts. La disponibilité des conseillers est gérée en temps réel.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">GAGNEZ EN EFFICACITÉ !</strong></h4>
                        <p>Fluidifiez le trafic vers votre plateforme et ajustez vos effectifs de manière optimale grâce à vos statistiques de fréquentation (heures pleines / heures creuses). Pilotez finement votre activité grâce aux données disponibles en temps réel (temps d’appel, compte-rendu de l’échange, etc.)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Innovation -->
<section class="section bg-dark border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/svd-1.jpg') }}" alt="">
            </div>
            <div class="col-lg-7 pl-lg-5 text-center">
                <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"></strong></h2>
                <div class="row my-5">
                    <div class="feature-box feature-box-style-2 mb-2 mt-3">
                        <div class="feature-box-icon">
                            <i class="icons icon-support text-color-primary"></i>
                        </div>
                        <div class="feature-box-info">
                            <h2 class="font-weight-bold text-4 mb-0" style="color: white;">NOTRE DÉMARCHE POUR PERSONNALISER VOTRE RELATION CLIENT</h2>
                            <p class="mb-2 mt-3 text-justify">
                                Pour répondre au mieux à vos attentes, cervea a mis en place une méthodologie éprouvée qui consiste à commencer par un travail de conception et ingénierie logicielle en amont du développement de votre solution. Experts en technologies web et mobiles, nous développons des solutions numériques sur-mesure, créatives et innovantes pour nos clients.
                                Les projets que nous développons font appel à des technologies variées et innovantes (internet des objets, géolocalisation, cartographie, blockchain, algorithmes intelligents, …). Force de proposition, nous mettons notre expertise à votre disposition pour vous accompagner efficacement dans votre projet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-5">
            <div class="col-lg-12">
                <div class="get-started text-center">
                    <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                    {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin INNOVATION -->
    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')


@endsection
