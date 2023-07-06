@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/bg2.jpg); background-size: cover; background-position: center; height: 500px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    application mobile
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Développement d'applications mobiles </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Vous avez besoin d’une application disponible en dehors du bureau ? <br> Vous souhaitez développer votre propre application mobile ? </p>
                                {{-- <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">NOTRE MÉTHODE DE DÉVELOPPEMENT MOBILE</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">cervea préconise une méthodologie qui s’appliquent à l’ensemble du projet ou se décline par lots ou par modules selon l’ampleur des travaux :</p>
                </div>
            </div>
        </div>
    </section>

    @include('client.Sections.section-four')

    <!-- Conception fonctionnel -->
    @include('client.Sections.conception-fonctionnel')

    <!-- -->
    @include('client.Sections.gouvernance-projet')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')

    <!-- securiser les interventions -->
<section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p5.jpg') }}" alt="">
            </div>
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
                                <h4 class="font-weight-bold text-4 mb-0">DÉVELOPPEMENT D’APPLICATIONS MÉTIERS</h4>
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
        </div>
    </div>
</section>
<!-- Fin Securiser les interventions -->

    <!-- Projet pleins d'innovation -->
    @include('client.Sections.section-projet')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')
@endsection
