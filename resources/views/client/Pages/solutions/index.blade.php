@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/extern.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Nos solutions
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">VOS BESOINS, AU CŒUR DE VOS APPLICATIONS </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">CAHIER DES CHARGES, LOGICIELS WEB ET MOBILES, DÉVELOPPEMENT </p>
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

                <div class="col-sm-12 col-lg-12 mb-4 appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750" style="background-image: url(asset/img/dow/ch.jpg); background-size: cover;">
                    <div class="rounded p-5" style="width: 100%;">
                        <i class="icon-bg icon-feature-1 mt-4"></i>
                        <h4 class="text-4 mb-2" style="color: white;"> Cahier des charges </h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Dès la genèse de votre projet sur-mesure, nos experts vous accompagnent dans la rédaction des spécifications fonctionnelles et techniques.</p>
                        <a href="{{ url('cahier-des-charges') }}" class="btn btn-primary rounded-0 mt-2">En savoir plus </a>
                    </div>
                </div>
            </div>

            <div class="row mb-2 counters">
                <div class="d-flex col-sm-12 col-lg-12 mb-4 appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750"  style="background-image: url(asset/img/dow/auc.jpg); background-size: cover;">
                    <div class="rounded p-5" style="width: 100%;">
                        <i class="icon-bg icon-feature-1 mt-4"></i>
                        <h4 class="text-4 mb-2" style="color: white;">Audit et conseil</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Notre expertise au service de votre entreprise. </p>
                        <a href="{{ url('conseil') }}" class="btn btn-primary rounded-0 mt-2">En savoir plus </a>
                    </div>
                </div>
            </div>
            <div class="row mb-2 counters">
                <div class="d-flex col-sm-12 col-lg-12 mb-4 appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750" style="background-image: url(asset/img/dow/dp.jpg); background-size: cover;">
                    <div class="rounded p-5" style="width: 100%;">
                        <i class="icon-bg icon-feature-1 mt-4"></i>
                        <h4 class="text-4 mb-2" style="color: white;">Developpement</h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Développement de vos solutions web & mobiles à partir de langages et frameworks open sources éprouvés.</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <a href="{{ url('app-mobile') }}" class="btn btn-primary rounded-0 mt-2">Application mobile</a>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <a href="{{ url('logiciel-web') }}" class="btn btn-primary rounded-0 mt-2">Logiciel web</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2 counters">
                <div class="d-flex col-sm-12 col-lg-12 mb-4 appear-animation text-center" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-appear-animation-duration="750" style="background-image: url(asset/img/dow/reg.jpg); background-size: cover;">
                    <div class="p-5" style="width: 100%;">
                        <i class="icon-bg icon-feature-1 mt-4"></i>
                        <h4 class="text-4 mb-2" style="color: white;"> Regie </h4>
                        <p class="custom-text-color-1 text-3 color-inherit mb-0">Grand projet nécessitant des ressources humaines et techniques sur la durée.</p>
                        <a href="{{ url('nos-offres') }}" class="btn btn-primary rounded-0 mt-2">En savoir plus </a>
                    </div>
                </div>
            </div>


            {{-- <div class="row text-center">
                <div class="col-md-12 col-lg-12">
                    <div class="get-started">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Beneficier d'un accompagnement personnalisé </a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    {{-- </div>
                </div>
            </div> --}}
        </div>
    </section>



    <div class="home-intro mb-0" id="home-intro">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div class="get-started text-center">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -->
    @include('client.Sections.gouvernance-projet')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')
@endsection
