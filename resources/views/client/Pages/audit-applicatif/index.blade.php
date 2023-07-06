@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/career.png); background-size: cover; background-position: center; height: 600px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Audit applicatif
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Audit applicatif </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Bénéficiez de notre service d’audit dédié aux applications métier web et mobiles pour obtenir une étude détaillée de votre application.</p>
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
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">AUDIT APPLICATIF</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">UN ÉTAT DES LIEUX <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">COMPLET</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        L’audit a pour but de faire un état des lieux complet de l’application. Auditer une solution web ou mobile permet ainsi de repérer les contraintes, de soulever les problématiques et d’être informé sur les possibilités de correction et d’évolution de la solution. Au-delà de l’audit de code (qui est la partie de l’audit la plus connue), il est essentiel d’analyser d’autres aspects liés à l’application :
                        la complétude fonctionnelle, les compétences (internes et externes), la dette technique, les processus de développement, de déploiement et de livraison, la couverture des tests, la maintenance applicative, les coûts liés, les besoins d’évolutions, la valeur financière de l’application, … Une analyse de l’application peut être nécessaire à différents moments. Par exemple : un projet de modernisation de l’application, des besoins d’évolution ou des corrections
                        importantes mais problématiques, un manque de maîtrise du code, … Les problèmes que peut poser une application sont très variés. Avant d’envisager des évolutions majeures, une modernisation de l’application ou son remplacement pur et simple par une autre solution, la réalisation d’un audit est une étape cruciale. La démarche nécessite certes un peu de temps pour collecter les informations et dresser un état détaillé de la situation, mais cela vous permet de gagner du temps par la suite. L’audit applicatif peut débloquer une situation complexe et laborieuse. Il vous permet de reprendre le contrôle sur l’application et sur vos investissements.
                    </p>

                    <div class="get-started text-center">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic </a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Application obsolete -->
    @include('client.Sections.application-obsolete')

    @include('client.Sections.premier-diagnostic')

    @include('client.Sections.audit-application')

    @include('client.Sections.moderniser-application')

    <!-- Notre collaborations -->
    @include('client.Sections.collaborations')

    @include('client.Sections.telecharger-ressource')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

@endsection
